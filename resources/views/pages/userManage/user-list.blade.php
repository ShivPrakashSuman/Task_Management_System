
@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

       <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
       <script type="text/javascript" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
       <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
       <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>

</head>
<style>
    .th_action{
        width:270px
    }
    .backBtn{
        background: #102770 !important;
        color: #ffeba7 !important;
    }
    .backBtn:hover{
        background: #ffeba7 !important;
        color: #102770 !important;
    }
    .liststatus_btn {
        height: 38px !important;
       font-size: 20px !important;
       padding: 0px 17px !important;
    }
    #crection_btn{
        height: 38px !important;
       font-size: 20px !important;
       padding: 0px 17px !important;
    }

</style>
<div class="container-fluid p-0">
    <div class="row m-0 maincont">
        <!-- sidebar content -->

            @include('includes.sidebar')

        <!-- main content -->
        <div class="col-10 bg-white main-content p-0">
             <!-- navbar content -->

                @include('includes.navbar')

            <!-- end navbar content -->
            <div class="m-4">
                <div class="row m-0">
                    <!-- Task list Start  -->
                    <div class="container" id="list">
                        <div class="row justify-content-center">
                            <div class=""style="border: antiquewhite;">
                                <div class="row">
                                    <div class="d-flex justify-content-between ">
                                        <div class="">
                                            <h5>User List</h5>
                                        </div>
                                        <div class="">
                                                <a href="{{ route('user.create') }}"><button class="btn btn-primary"><i class="fa fa-plus"></i>Add User</button></a>
                                        </div>
                                    </div>
                                    <hr class="my-2">
                                    <div class="">
                                        <table id="example" class="display nowrap table" >
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>User Name </th>
                                                    <th>Email</th>
                                                    <th>Mobile</th>
                                                    <th>Address</th>
                                                    <th>Image</th>
                                                    <th class="th_action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($userData as $data => $row )
                                                <tr>
                                                    <td>{{$data+1}}</td>
                                                    <td>{{ $row->name}}</td>
                                                    <td>{{ $row->username}}</td>
                                                    <td>{{ $row->email}}</td>
                                                    <td>{{ $row->mobile}}</td>
                                                    <td>{{ $row->address}}</td>
                                                    <td class="text-center p-1">
                                                    @if($row->image)
                                                        <img src="{{asset('storage/images/users/'.$row->image)}}" class="img-fluid" alt="team image" width="38" style='height: 45px;'>
                                                    @else
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-fluid" alt="team image" width="38" style='height: 45px;'>
                                                    @endif
                                                    </td>
                                                    <td class="d-flex">
                                                        <a href="javascritp:void(0)"data-bs-toggle="modal" data-bs-target="#myModal{{$row->id}}"><button class="btn fa fa-eye text-success" id="crection_btn"></button></a>
                                                        <a class="mx-1" href="{{ route('user.edit', $row->id) }}"><button class="btn fa fa-edit text-primary" id="crection_btn"></button></a>
                                                        <form action="{{ route('user.destroy', $row->id ) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                        <button type="submit" class=" btn fa fa-trash text-danger"id="crection_btn" onclick="return confirm('Are you sure to delete this user?')"></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @if(!$userData)
                                                    <tr><td colspan="8" class="text-center text-danger">Record Not Found</td></tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  end Change content  -->
                </div>
                @foreach ($userData as $id => $row)
                <div class="container">
                <div class="modal fade" id="myModal{{$row->id}}" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text">Single row</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">name</th>
                                    <td>{{ $row->name }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">username</th>
                                    <td>{{ $row->username }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">email</th>
                                    <td>{{ $row->email }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">mobile</th>
                                    <td>{{ $row->mobile }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">address</th>
                                    <td>{{ $row->address }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">image</th>
                                    <td> <img src="{{asset('storage/images/users/'.$row->image)}}" class="img-fluid" alt="team image" width="38" style='height: 45px;'></td>
                                </tr>
                            </thead>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('user.edit', $row->id) }}" type="button" class="btn backBtn" >Update</a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                    'csv', 'excel', 'pdf', 'print'
            ]
        } );
    } );
</script>
@endsection

