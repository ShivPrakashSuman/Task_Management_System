
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
    #list {
        display: none;
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

                                    <hr class="my-2">
                                    <div class="">
                                        <table class="table" >
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>name</th>
                                                    <th>username </th>
                                                    <th>email</th>
                                                    <th>password</th>
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
                                                    <td>{{ $row->password}}</td>
                                                    <td>{{ $row->mobile}}</td>
                                                    <td>{{ $row->address}}</td>
                                                    <td class="d-flex">
                                                        <a class="mx-1" href="{{ route('user.show' ,$row->id) }}"><button class="btn fa fa-eye text-success"></button></a>
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
            </div>
        </div>
    </div>
</div>
@endsection

