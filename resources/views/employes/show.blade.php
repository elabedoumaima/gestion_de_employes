@extends('adminlte::page')

@section('title')
    Afficher l’employé | laravel Employes App
@endsection

@section('content_header')
    <h1><em>Afficher l’employé</em></h1>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card my-5">
                    <div style="background: white; color:  #000F72"  class="card-header">
                        <div class="text-center font-weight-bold fw text-uppercase">
                            <h3><em>{{$employe->prenom}}  {{$employe->nom}} </em></h3>
                        </div>
                    </div>
                    <div class="text-center font-weight-bold mt-3">
                        <a href="{{route('vacation.request',$employe->Numcine)}}" class="btn btn-outline-dark">
                            Demande de vacances
                        </a>
                        <a href="{{route('certificate.request',$employe->Numcine)}}" class="btn btn-outline-danger">
                            Demande de certificat de travail                        
                        </a>
                    </div>
                    <hr>

                    <div class="card-body">
                        <div class="form-group mb-3 d-flex align-items-center">
                            <label for="Numcine" class="col-sm-2 col-form-label">CINE</label>
                            <div class="col-sm-10">
                                <input type="text" disabled class="form-control rounded-0" name='Numcine' placeholder="Numéro de la carte nationale" value="{{ $employe->Numcine }}">
                            </div>
                        </div>
                        <div class="form-group mb-3 d-flex align-items-center">
                            <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                            <div class="col-sm-10">
                            <input type="text" disabled class="form-control rounded-0" name='nom' placeholder="Nom" value="{{$employe->nom}}">
                            </div>
                        </div>
                        <div  class="form-group mb-3 d-flex align-items-center">
                            <label for="prenom" class="col-sm-2 col-form-label">Prénom</label>
                            <div class="col-sm-10">
                            <input type="text" disabled class="form-control rounded-0" name='prenom' placeholder="Prénom" value="{{$employe->prenom}}">
                        </div>
                        </div>
                        <div  class="form-group mb-3 d-flex align-items-center">
                            <label for="dateNaiss" class="col-sm-2 col-form-label">Date de naissance</label>
                            <div class="col-sm-10">
                            <input type="date" disabled class="form-control rounded-0" name='dateNaiss' placeholder="Date de naissance" value="{{$employe->dateNaiss}}">
                        </div>
                        </div>
                        <div  class="form-group mb-3 d-flex align-items-center">
                            <label for="address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                            <input type="text" disabled class="form-control rounded-0" name='address' placeholder="Address" value="{{$employe->address}}">
                        </div>
                        </div>
                        <div  class="form-group mb-3 d-flex align-items-center">
                            <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                            <input type="email" disabled class="form-control rounded-0" name='email' placeholder="E-mail" value="{{$employe->email}}">
                        </div>
                        </div>
                        <div  class="form-group mb-3 d-flex align-items-center">
                            <label for="telephone" class="col-sm-2 col-form-label">Téléphone</label>
                            <div class="col-sm-10">
                            <input type="tel" disabled class="form-control rounded-0" name='telephone' placeholder="Téléphone" value="{{$employe->telephone}}">
                        </div>
                        </div>
                        <div  class="form-group mb-3 d-flex align-items-center">
                            <label for="specialisation" class="col-sm-2 col-form-label">Spécialisation</label>
                            <div class="col-sm-10">
                            <input type="text" disabled class="form-control rounded-0" name='specialisation' placeholder="Spécialisation" value="{{$employe->specialisation}}">
                        </div>
                        </div>
                        <div  class="form-group mb-3 d-flex align-items-center">
                            <label for="PreuvesObtenues" class="col-sm-2 col-form-label">Preuves Obtenues</label>
                            <div class="col-sm-10">
                            <input type="text" disabled class="form-control rounded-0" name='PreuvesObtenues' placeholder="Preuves Obtenues" value="{{$employe->PreuvesObtenues}}">
                        </div>
                        </div>
                        <div  class="form-group mb-3 d-flex align-items-center">
                            <label for="demande" class="col-sm-2 col-form-label">Objet de la demande</label>
                            <div class="col-sm-10">
                            <input type="text" disabled class="form-control rounded-0" name='demande' placeholder="Objet de la demande" value="{{$employe->demande}}">
                        </div>
                        </div>
                    </div>
                    
                </div>
               
            </div>
        </div>
    </div>
@endsection
