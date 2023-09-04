
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
                    <!--   Change content  -->
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class=""style="border: antiquewhite;">
                                <div class="row">
                                    <div class="d-flex justify-content-between ">
                                        <div class="">
                                            <h5>Setting</h5>
                                        </div>
                                        <div class="">
                                                <a href="{{ route('setting.create') }}"><button class="btn btn-primary"><i class="fa fa-plus"></i>Add setting</button></a>
                                        </div>
                                    </div>
                                    <hr class="my-2">
                                    <div class="">
                                        <table class="table" >
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>key</th>
                                                    <th>value</th>
                                                    <th>type </th>
                                                    <th class="th_action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $data => $row )
                                                <tr>
                                                    <td>{{$data+1}}</td>
                                                    <td>{{ $row->key}}</td>
                                                    <td>{{ $row->value}}</td>
                                                    <td>{{ $row->type}}</td>
                                                   <td class="d-flex">
                                                      <form action="{{ route('setting.destroy', $row->id ) }}" method="post">
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
