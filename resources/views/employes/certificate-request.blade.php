@extends('adminlte::page')

@section('title', 'Employes Management System | '.$employe->nom .''.$employe->prenom)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card my-5">
                <div class="card-header bg-white text-center p-3">
                    <h1 style="font-weight: 900" class="text-dark ">
                        <em>Certificat de travail</em>
                    </h1>
                </div>
                <div class="card-body mt-5">
                    <p style="font-size: 25px"class="lead">
                        Il s’agit de certifier que <b>{{$employe->nom}} {{$employe->prenom}}</b> est actuellement employé avec moi dans les domaines suivants :
                    </p>
                    <p style="font-size: 25px" class="lead">
                        <b>{{$employe->specialisation}}</b> département.
                    </p>
                    <p style="font-size: 25px" class="lead">
                        Leur emploi a commencé le <b>{{$employe->dateNaiss}}</b>
                    </p>
                    <p style="font-size: 25px " class="lead">
                        Cette certification est délivrée à la demande de <b>{{$employe->nom}} {{$employe->prenom}}</b> à quelque fin juridique que ce soit.
                    </p>
                    <p style="font-size: 25px" class="lead">
                        Issued on <b>{{\Carbon\Carbon::today()->toDateString()}}</b> at <b>{{\Carbon\Carbon::now()->toTimeString()}}</b>
                    </p>
                    <p style="font-size: 25px" class="m-5">
                        ___________
                        ___________
                    </p>
                    <a href="#" id="printPageButton" class="btn btn-sm btn-primary mb-3" onclick="document.getElementById('printPageButton').style.display = 'none';window.print();" class="btn btn-md btn-primary mr-2 mb-2">
                        <i class="fas fa-print"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection