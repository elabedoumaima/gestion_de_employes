@extends('adminlte::page')



@section('title')
    Ajouter un nouvel employé | laravel Employes App
@endsection

@section('content_header')
    <h1><em>Ajouter un nouvel employé</em></h1>
@endsection

@section('content')
    <div class="container">
        @include('layouts.alert')
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card my-5">
                    <div style="background: white; color:  #000F72"  class="card-header">
                        <div class="text-center font-weight-bold fw text-uppercase">
                            <h4><em>Ajouter un nouvel employé</em></h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('employes.store')}}" method="POST" class="mt-8">
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
                            <label for="dateNaiss">Date de naissance</label>
                            <input type="date" class="form-control" name='dateNaiss' placeholder="Date de naissance" value="{{old('dateNaiss')}}">
                        <1/div>
                        <div class="form-group mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name='address' placeholder="Address" value="{{old('address')}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" name='email' placeholder="E-mail" value="{{old('email')}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="telephone">Téléphone</label>
                            <input type="tel" class="form-control" name='telephone' placeholder="Téléphone" value="{{old('telephone')}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="specialisation">Spécialisation</label>
                            <input type="text" class="form-control" name='specialisation' placeholder="Spécialisation" value="{{old('specialisation')}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="PreuvesObtenues">Preuves Obtenues</label>
                            <input type="text" class="form-control" name='PreuvesObtenues' placeholder="Preuves Obtenues" value="{{old('PreuvesObtenues')}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="demande">Objet de la demande</label>
                            <input type="text" class="form-control" name='demande' placeholder="Objet de la demande" value="{{old('demande')}}">
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
