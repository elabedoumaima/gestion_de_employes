@extends('layouts.app')


@section('title')
     Welcome | laravel Employes App
@endsection

@section('content')
        <div  class=" my-5">
            <div class="col-md-5 mx-auto">
                <div class="card ">
                    <div style="background:#000F72" class="card-header ">
                        <h1 style="color:white; font-family:initial; font-weight:900;font-size:30px;text-align: center" class="p-2">Welcome Backe</h1>
                    </div>
                    <div style="height: 250px" class="card-body text-center ">
                        @guest
                            <a href="{{url('/login')}}" style="background-color: #8cc646;font-family: initial;font-weight: 900;margin-top: 60px;color: white" class="btn btn-outline-rgb w-50 ">Login</a>
                        @endguest
                        @auth
                        <a href="{{url('/admin/home')}}" style="background-color: #8cc646;font-family: initial;font-weight: 900;margin-top: 60px;color: white" class="btn btn-outline-rgb w-50 ">Home</a>                        
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection