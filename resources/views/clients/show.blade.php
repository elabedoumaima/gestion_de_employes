@extends('adminlte::page')

@section('title')
    Afficher le client | laravel Employes App
@endsection

@section('content_header')
    <h1><em>Afficher le client</em></h1>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card my-5">
                    <div style="background: white; color:  #000F72"  class="card-header">
                        <div class="text-center font-weight-bold fw text-uppercase">
                            <h3><em>{{$client->prenom}}  {{$client->nom}} </em></h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3 d-flex align-items-center">
                            <label for="Numcine" class="col-sm-2 col-form-label">CINE</label>
                            <div class="col-sm-10">
                                <input type="text" disabled class="form-control rounded-0" name='Numcine' placeholder="Numéro de la carte nationale" value="{{ $client->Numcine }}">
                            </div>
                        </div>
                        <div class="form-group mb-3 d-flex align-items-center">
                            <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                            <div class="col-sm-10">
                            <input type="text" disabled class="form-control rounded-0" name='nom' placeholder="Nom" value="{{$client->nom}}">
                            </div>
                        </div>
                        <div  class="form-group mb-3 d-flex align-items-center">
                            <label for="prenom" class="col-sm-2 col-form-label">Prénom</label>
                            <div class="col-sm-10">
                            <input type="text" disabled class="form-control rounded-0" name='prenom' placeholder="Prénom" value="{{$client->prenom}}">
                        </div>
                        </div>
                        <div  class="form-group mb-3 d-flex align-items-center">
                            <label for="tele" class="col-sm-2 col-form-label">Téléphone</label>
                            <div class="col-sm-10">
                            <input type="tel" disabled class="form-control rounded-0" name='tele' placeholder="Telephone" value="{{$client->tele}}">
                        </div>
                        </div>
                        <div  class="form-group mb-3 d-flex align-items-center">
                            <label for="adresse" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                            <input type="text" disabled class="form-control rounded-0" name='adresse' placeholder="Address" value="{{$client->adresse}}">
                        </div>
                        </div>
                        <div  class="form-group mb-3 d-flex align-items-center">
                            <label for="serviceRequis" class="col-sm-2 col-form-label">Service Requis</label>
                            <div class="col-sm-10">
                            <input type="text" disabled class="form-control rounded-0" name='serviceRequis' placeholder="Service Requis" value="{{$client->serviceRequis}}">
                        </div>
                        </div>
                        <div  class="form-group mb-3 d-flex align-items-center">
                            <label for="dateDebut" class="col-sm-2 col-form-label">date Début</label>
                            <div class="col-sm-10">
                            <input type="text" disabled class="form-control rounded-0" name='dateDebut' placeholder="date Début" value="{{$client->dateDebut}}">
                        </div>
                        </div>
                        <div  class="form-group mb-3 d-flex align-items-center">
                            <label for="dateFin" class="col-sm-2 col-form-label">date Fin</label>
                            <div class="col-sm-10">
                            <input type="text" disabled class="form-control rounded-0" name='dateFin' placeholder="date Fin" value="{{$client->dateFin}}">
                        </div>
                        </div>
                        <a href="#" id="printPageButton" class="btn btn-sm btn-primary mb-1 mt-4 ml-5" onclick="document.getElementById('printPageButton').style.display = 'none';window.print();" class="btn btn-md btn-primary mr-2 mb-2">
                            <i class="fas fa-print"></i>
                        </a>
                        </div>
                       
                    </div>
                    
                </div>
               
            </div>
        </div>
    </div>
@endsection
