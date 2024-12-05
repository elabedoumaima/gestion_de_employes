<?php

namespace App\Http\Controllers;
use App\Models\Employe;
use Illuminate\Http\Request;

class EmployesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employes = Employe::all();
        return view('employes.index')->with([
            'employes' => $employes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employes.create');
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
             'Numcine'=>'required|string|unique:employes,Numcine',
             'nom'=>'required',
             'prenom'=>'required',
             'dateNaiss'=>'required',
             'address'=>'required',
             'email'=>'required',
             'telephone'=>'required|numeric',
             'specialisation'=>'required',
             'PreuvesObtenues'=>'required',
             'demande'=>'required',
        ]);
        Employe::create($request->except('_token'));
        return redirect()->route('employes.index')->with([
             'success' => 'Employé ajouté avec succès'
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
        $employe = Employe::where('Numcine',$id)->first();
        return view('employes.show')->with([
            'employe'=> $employe
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
        $employe = Employe::where('Numcine',$id)->first();
        return view('employes.edit')->with([
            'employe'=> $employe
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
        $employe = Employe::where('Numcine', $id)->first();
        $this->validate($request,[
            'Numcine' =>'required|string|unique:employes,id,' . $employe->Numcine,
            'nom'=>'required',
            'prenom'=>'required',
            'dateNaiss'=>'required',
            'address'=>'required',
            'email'=>'required',
            'telephone'=>'required|numeric',
            'specialisation'=>'required',
            'PreuvesObtenues'=>'required',
            'demande'=>'required',
       ]);
       $employe->update($request->except('_token','_method'));
       return redirect()->route('employes.index')->with([
            'success' => 'Employé Mise à jour avec succès'
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
        $employe = Employe::where('Numcine',$id)->first();
        $employe->delete();
        return redirect()->route('employes.index')->with([
            'success' => 'Employé Supprimé avec succès'
        ]);
    }
    

    public function vacationRequest($id)
    {   
        $employe = Employe::where('Numcine', $id)->first();
        return view('employes.vacation-request')->with([
            'employe'=> $employe
        ]);
    }

    public function certificateRequest($id)
    {
        $employe = Employe::where('Numcine', $id)->first();
        return view('employes.certificate-request')->with([
            'employe'=> $employe
        ]);
    }

}
