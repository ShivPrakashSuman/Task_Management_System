
@extends('layouts.app')

@section('content')
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
        margin-top: -7px;
        border-radius: 20px;
        height: 35px;
        margin-bottom: 10px;
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
                                        <table class="table" >
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>name</th>
                                                    <th>username </th>
                                                    <th>email</th>
                                                    <th>mobile</th>
                                                    <th>address</th>
                                                    <th>image</th>
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
                                                    <td>{{ $row->image}}</td>
                                                      <td class="d-flex"><a href="javascritp:void(0)"data-bs-toggle="modal" data-bs-target="#myModal{{$row->id}}"><button class="btn fa fa-eye text-success"></button></a>
                                                        <a class="mx-1" href="{{ route('user.edit', $row->id) }}"><button class="btn fa fa-edit text-primary"></button></a>
                                                        <form action="{{ route('user.destroy', $row->id ) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                        <button type="submit" class=" btn fa fa-trash text-danger" onclick="return confirm('Are you sure to delete this user?')"></button>
                                                        </form>
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
                                    <td>{{ $row->image }}</td>
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
@endsection

