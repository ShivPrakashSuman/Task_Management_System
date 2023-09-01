
@extends('layouts.app')

@section('content')
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
                                <div class="card p-2 w-100">
                                    <div class="d-flex justify-content-between ">
                                        <div class="">
                                            <h3>Category List</h3>
                                        </div>
                                        <div class="">
                                          {{-- <a href="{{ route('taskList.edit',$cate->id) }}"><button class="btn btn-primary"><i class="fa fa-edit"></i> Edit</button></a> --}}
                                        </div>
                                    </div>
                                    <hr class="my-1">
                                    <div class="">
                                        @if (\Session::has('msg'))
                                            <div class="text-success  text-center ">
                                               <h6 style=" text-align:center !important;"><b>Success! </b>{!! \Session::get('msg') !!}</h6>
                                            </div>
                                        @endif
                                        <table class="table " >
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>USER_ID</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Due_date</th>
                                                    <th>Status </th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cate as $data => $row)
                                                <tr>
                                                    <td>{{$data+1}}</td>
                                                    <td>{{ $row->user_id}}</td>
                                                    <td>{{ $row->title}}</td>
                                                    <td>{{ $row->description}}</td>
                                                    <td>{{ $row->due_date}}</td>
                                                    <td>{{ $row->status}}</td>
                                                    <td class="d-flex">
                                                        <a class="mx-1" href="{{ route('task.show' ,$row->id) }}"><button class="btn fa fa-eye text-success"></button></a>
                                                        <a class="mx-1" href="{{ route('task.edit', $row->id) }}"><button class="btn fa fa-edit text-primary"></button></a>
                                                        <form action="{{ route('task.destroy', $row->id ) }}" method="post">
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
