@extends('adminlte::page')


@section('title')
     Home | laravel Employes App
@endsection

@section('content_header')
     <h1 style="font-family: initial ;font-weight: 900"><em>Dashboard</em></h1>
@endsection

@section('content')
    <div class="container">
        <div class="row my-4">
            <div class="col-md-4">
                <div style="background:rgb(5, 218, 218) ; color:white "  class="small-box ">
                    <div class="inner">
                        <h3>{{App\Models\Employe::count()}}</h3>
                        <p style="font-weight: 700 ;font-size: 18px">Employes</p>
                    </div>
                    <div class="icon">
                        <i style="color: rgba(107, 104, 104, 0.562)" class="fas fa-users"></i>
                    </div>
                    <a href="{{url('/admin/employes')}}" class="small-box-footer">
                        More Info <i style="color: white" class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
    
            <div class="col-md-4 ">
                <div style="background: rgb(254, 126, 80) ; color: white"  class="small-box ">
                    <div class="inner">
                        <h3>{{App\Models\Departement::count()}}</h3>
                        <p style="font-weight: 700 ;font-size: 18px">Départements</p>
                    </div>
                    <div class="icon">
                        <i style="color: rgba(107, 104, 104, 0.562)"  class="fas fa-hard-hat"></i>
                    </div>
                    <a href="{{url('/admin/departements')}}" class="small-box-footer">
                        More Info <i style="color: white" class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div style="background:rgb(117, 206, 235) ; color:white " class="small-box ">
                    <div class="inner">
                        <h3>{{App\Models\Client::count()}}</h3>
                        <p style="font-weight: 700 ;font-size: 18px">Clients</p>
                    </div>
                    <div class="icon">
                        <i style="color: rgba(107, 104, 104, 0.562)" class="fas fa-users"></i>
                    </div>
                    <a href="{{url('/admin/clients')}}" class="small-box-footer">
                        More Info <i style="color: white" class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
    
            
        </div>

        
        {{-- Client --}}

        {{-- <div class="row my-4">
            <div class="col-md-4">
                <div style="background: rgb(178, 144, 144)" class="small-box ">
                    <div class="inner">
                        <h3>{{App\Models\Employe::count()}}</h3>
                        <p>Clients</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="{{url('/admin/employes')}}" class="small-box-footer">
                        More Info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
    
            <div class="col-md-4">
                <div style="background: rgb(119, 152, 213)" class="small-box">
                    <div class="inner">
                        <h3>{{App\Models\Employe::count()}}</h3>
                        <p>Demanders</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="{{url('/admin/employes')}}" class="small-box-footer">
                        More Info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
    
            <div class="col-md-4">
                <div style="background: rgb(141, 206, 208)  " class="small-box ">
                    <div class="inner">
                        <h3>{{App\Models\Employe::count()}}</h3>
                        <p>Salaires</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-coins"></i>
                    </div>
                    <a href="{{url('/admin/employes')}}" class="small-box-footer">
                        More Info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div> --}}



    </div>

    
    
@endsection