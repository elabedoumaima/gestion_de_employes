@extends('adminlte::page')



@section('title')
    Mise à jour des Departements | laravel Departements App
@endsection

@section('content_header')
    <h1><em>Mise à jour des Departements</em></h1>
@endsection

@section('content')
    <div class="container">
        @include('layouts.alert')
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card my-5">
                    <div style="background: white; color:  #000F72"  class="card-header">
                        <div class="text-center font-weight-bold fw text-uppercase">
                            <h4><em>Mise à jour des Departements</em></h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('departements.update',$departement->Numdep)}}" method="POST" class="mt-8">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="Numdep">Numdep</label>
                            <input type="text" class="form-control" name='Numdep' placeholder="Numéro de la carte nationale" value="{{old('Numdep',$departement->Numdep)}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="nomDep">nomDep</label>
                            <input type="text" class="form-control" name='nomDep' placeholder="nom Dep" value="{{old('nomDep',$departement->nomDep)}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">description</label>
                            <input type="text" class="form-control" name='description' placeholder="description" value="{{old('description',$departement->description)}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="niveau_education_requis">niveau education requis</label>
                            <input type="text" class="form-control" name='niveau_education_requis' placeholder="niveau_education_requis" value="{{old('niveau_education_requis',$departement->niveau_education_requis)}}">
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
