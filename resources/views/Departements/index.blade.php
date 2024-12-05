@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('title')
    Liste des Departements | laravel Employes App
@endsection

@section('content_header')
    <h1>Liste des Departements</h1>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card my-5">
                    <div style="background: white; color:  #000F72"  class="card-header">
                        <div class="text-center font-weight-bold fw text-uppercase">
                            <h4>Departements</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="myTableClient" class="table table-bordered table-striped ">
                            <thead>
                                <tr class="text-center">
                                    <th>ID</th>
                                    <th >Numdep</th>
                                    <th >nomDep</th>
                                    <th >description</th>
                                    <th>niveau_education_requis</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($departements as $key =>$departement)
                                <tr class="text-center" style="font-size: 15px">
                                    <td >{{$key+=1}} </td>
                                    <td>{{$departement->Numdep}}</td>
                                    <td > {{$departement->nomDep}}</td>
                                    <td >{{$departement->description}}</td>
                                    <td>{{$departement->niveau_education_requis}}</td>
                                    <td class="d-flex justify-content-center align-items-center">
                                        <a href="{{route('departements.edit',$departement->Numdep)}}" class="btn btn-sm btn-warning mr-3">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{route('departements.destroy',$departement->Numdep)}}" method="Post" id="{{$departement->Numdep}}">
                                            @method('DELETE')
                                            @csrf
                                         </form>
                                         <button  type="submit" onclick="deletEmp({{$departement->Numdep}})" 
                                            class="btn btn-sm btn-danger ">
                                            <i class="fas fa-trash "></i>
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
            $('#myTableClient').DataTable({
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
                timer: 5500
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
