@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('title')
    Liste des employés | laravel Employes App
@endsection

@section('content_header')
    <h1 style="font-family: initial ;font-weight: 900"><em>Liste des employés</em></h1>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card my-5">
                    <div style="background: white; color:  #000F72"  class="card-header">
                        <div class="text-center font-weight-bold fw text-uppercase">
                            <h4 style="font-family: initial ;font-weight: 900" >Employés</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-bordered table-striped ">
                            <thead>
                                <tr class="text-center">
                                    <th>ID</th>
                                    {{-- <th >CINE</th> --}}
                                    <th >Nom</th>
                                    <th >Prénom</th>
                                    <th >Address</th>
                                    <th>E-mail</th>
                                    {{-- <th>Téléphone</th> --}}
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($employes as $key => $employe)
                                <tr class="text-center" style="font-size: 15px">
                                    <td >{{$key+=1}} </td>
                                    {{-- <td>{{$employe->Numcine}}</td> --}}
                                    <td > {{$employe->nom}}</td>
                                    <td >{{$employe->prenom}}</td>
                                    <td>{{$employe->address}}</td>
                                    <td>{{$employe->email}}</td>
                                    {{-- <td>{{$employe->telephone}}</td> --}}
                                    <td class="d-flex justify-content-center align-items-center">
                                        <a href="{{route('employes.show',$employe->Numcine)}}" class="btn btn-sm btn-primary">
                                           <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{route('employes.edit',$employe->Numcine)}}" class="btn btn-sm btn-warning mx-3">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{route('employes.destroy',$employe->Numcine)}}" id="{{$employe->Numcine}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                        <button type="submit" onclick="deletEmp({{$employe->Numcine}})" 
                                            class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $('#myTable').DataTable({
                dom : 'Bfrtip',
                buttons : [
                    'copy', 'excel','csv','pdf','print','colvis'
                ]
            });
        });
    </script>
    @if(session()->has('success'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{session()->get('success')}}",
                showConfirmButton: true,
                timer: 9900
             });
        </script>
    @endif
    <script>
        function deletEmp(id){
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger mr-2'
                },
                buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(id).submit();
                } else if (
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your ad is safe :)',
                        'error'
                    )
                }
                })
        }
    </script>
@endsection
