<?php

namespace App\Http\Controllers;
use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementsController extends Controller
{
    public function index()
    {
        $departements = Departement::all();
        return view('departements.index')->with([
            'departements' => $departements
        ]);
    }
    public function create()
    {
        return view('departements.create');
    }

    
    public function store(Request $request)
    {
        $this->validate($request,[
             'Numdep'=>'required|string|unique:departements,Numdep',
             'nomDep'=>'required',
             'description'=>'required',
             'niveau_education_requis'=>'required',
        ]);
        Departement::create($request->except('_token'));
        return redirect()->route('departements.index')->with([
             'success' => 'departement ajouté avec succès'
        ]);
    }

    public function edit($id)
    {
        $departement = Departement::where('Numdep',$id)->first();
        return view('departements.edit')->with([
            'departement'=> $departement
        ]);
    }

    public function update(Request $request, $id)
    {
        $departement = Departement::where('Numdep', $id)->first();

        $this->validate($request, [
            'Numdep' => 'required|string|unique:departements,Numdep,' . $departement->id,
            'nomDep' => 'required',
            'description' => 'required',
            'niveau_education_requis' => 'required',
        ]);

        $departement->update($request->except('_token', '_method'));
        return redirect()->route('departements.index')->with([
            'success' => 'Département mis à jour avec succès'
        ]);
    }
    public function destroy($id)
    {
        $departement = Departement::where('Numdep',$id)->first();
        $departement->delete();
        return redirect()->route('departements.index')->with([
            'success' => 'departement Supprimé avec succès'
        ]);
    }
}

