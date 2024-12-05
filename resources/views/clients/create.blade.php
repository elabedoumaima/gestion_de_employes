@extends('adminlte::page')



@section('title')
    Ajouter un nouvel client | laravel Employes App
@endsection

@section('content_header')
    <h1><em>Ajouter un nouvel client</em></h1>
@endsection

@section('content')
    <div class="container">
        @include('layouts.alert')
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card my-5">
                    <div style="background: white; color:  #000F72"  class="card-header">
                        <div class="text-center font-weight-bold fw text-uppercase">
                            <h4><em>Ajouter un nouvel client</em></h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('clients.store')}}" method="POST" class="mt-8">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="Numcine">CINE</label>
                            <input type="text" class="form-control" name='Numcine' placeholder="Numéro de la carte nationale" value="{{old('Numcine')}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" name='nom' placeholder="Nom" value="{{old('nom')}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="prenom">Prénom</label>
                            <input type="text" class="form-control" name='prenom' placeholder="Prénom" value="{{old('prenom')}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="tele">Télèphone</label>
                            <input type="tel" class="form-control" name='tele' placeholder="Télèphone" value="{{old('tele')}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="adresse">Address</label>
                            <input type="text" class="form-control" name='adresse' placeholder="Address" value="{{old('adresse')}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="serviceRequis">Service Requis</label>
                            <input type="text" class="form-control" name='serviceRequis' placeholder="Service Requis" value="{{old('serviceRequis')}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="dateDebut">Date Début</label>
                            <input type="date" class="form-control" name='dateDebut' placeholder="Date Début" value="{{old('dateDebut')}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="dateFin">Date Fin</label>
                            <input type="date" class="form-control" name='dateFin' placeholder="dateFin" value="{{old('dateFin')}}">
                        </div>
                        <div class="form-group  text-center">
                            <button style="background: #8cc646;color: white"  type="submit" class="btn btn w-50">{{ __('Create') }}</button>
                        </div>
                        </form>
                    </div>
                    
                </div>
               
            </div>
        </div>
    </div>
@endsection
