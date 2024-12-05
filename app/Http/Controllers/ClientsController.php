<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients.index')->with([
            'clients' => $clients
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
             'Numcine'=>'required|string|unique:clients,Numcine',
                'nom'=>'required',
                'prenom'=>'required',
                'tele'=>'required|numeric',
                'adresse'=>'required',
                'serviceRequis'=>'required',
                'dateDebut'=>'required',
                'dateFin'=>'required',
        ]);
        Client::create($request->except('_token'));
        return redirect()->route('clients.index')->with([
             'success' => 'Client ajouté avec succès'
        ]);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {
        //
        $client = Client::where('Numcine',$id)->first();
        return view('clients.show')->with([
            'client'=> $client
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        $client = Client::where('Numcine',$id)->first();
        return view('clients.edit')->with([
            'client'=> $client
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $id)
    {
        $client = Client::where('Numcine', $id)->first();
        $this->validate($request,[
            'Numcine' =>'required|string|unique:clients,id,' . $client->Numcine,
            'nom'=>'required',
            'prenom'=>'required',
            'tele'=>'required|numeric',
            'adresse'=>'required',
            'serviceRequis'=>'required',
            'dateDebut'=>'required',
            'dateFin'=>'required',
       ]);
       $client->update($request->except('_token','_method'));
       return redirect()->route('clients.index')->with([
            'success' => 'Client Mise à jour avec succès'
       ]);
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::where('Numcine',$id)->first();
        $client->delete();
        return redirect()->route('clients.index')->with([
            'success' => 'Employé Supprimé avec succès'
        ]);
    }
}
