@extends('adminlte::page')


@section('title')
    Vacation Request
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card my-5">
                    <div class="card-header bg-white text-center p-3">
                        <h3 style="font-weight: 900" class="text-dark">
                           <em>Demande de vacances</em> 
                        </h3>
                    </div>
                    <div  class="card-body">
                        <p style="font-size: 25px" class="lead">
                            <b>{{$employe->nom}} {{$employe->prenom}}</b> Il travaille actuellement avec moi sur les projets suivants :
                        </p>
                        <p style="font-size: 25px" class="lead">
                            <b>{{$employe->specialisation}}</b> département.
                        </p>
                        <p style="font-size: 25px" class="lead">
                            Il demande des vacances à partir de <b>________________</b>
                        </p>
                        <p style="font-size: 25px" class="lead">
                            Et se termine sur <b>______________</b>
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