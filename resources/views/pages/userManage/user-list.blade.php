
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
                    <!--   Change content  -->
                    <div class="d-flex justify-content-between ">
                            <div class="">
                                <h5>Task List</h5>
                            </div>
                            <div class="">
                                <button class="btn btn-primary liststatus_btn" onclick="list_dashboard()" id="status" value="true"><i class="fa fa-edit"></i>click</button>
                            </div>
                        </div>
                    <div class="col-md-4 mt-1">
                        <div class="box rounded-4">
                            <h5 class="pt-4 ps-4">Participants</h5>
                            <img class="img-fluid ps-3 pt-2 pb-5" src="{{asset('storage/images/team.jpg')}}" style="mix-blend-mode:darken" alt="team image" width="270">
                            <i class="fa fa-plus bg-white rounded-5 p-1 mt-1" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-md-4 mt-1">
                        <div class="box rounded-4">
                            <h5 class="pt-4 ps-4">Time</h5>
                            <h4 class="ps-4 pb-5 text-danger">1:40<small><i class="fa fa-long-arrow-down px-2" aria-hidden="true"></i>Time Low</small>
                            <img class="img-fluid ps-5" src="{{asset('storage/images/images.jpg')}}" alt="team image" width="100"> </h4>
                        </div>
                    </div>
                    <div class="col-md-4 mt-1">
                        <div class="box rounded-4">
                            <h5 class="pt-4 ps-4">Activity</h5>
                            <h4 class="ps-4 pb-5 text-success">5%<small><i class="fa fa-long-arrow-up px-2" aria-hidden="true"></i>Activity Top</small>
                            <img class="img-fluid ps-5" src="{{asset('storage/images/images - copy.jpg')}}" alt="team image" width="100"> </h4>
                        </div>
                    </div>

                    <!-- Dashborad Status Start  -->

                    <div class="row m-0 p-0" id="statusDashborad">
                        <div class="col-lg-3 mt-2">
                            <div class="box1 rounded-4 p-3" id="to_do" ondrop="drop_handler(event);" ondragover="dragover_handler(event);">
                                <h5 class="pt-1 ps-1">To do</h5>
                                @foreach ($todo_task_list as $id => $row)
                                <div class="bg-white rounded-4 p-1 my-3" ondragend="dragend_handler(event);" ondragstart="dragstart_handler(event);" id="{{ $row->id }}"  draggable="true">
                                    <h5 class="pt-1 ps-3"><b>{{ $row->title }}</b></h5>
                                    <button type="button" class="btn btn-outline-primary rounded-5 px-4 my-3 ms-2">primary</button>
                                    <p class="ps-3 text-muted">{{ $row->due_date }}<img class="img-fluid rounded-5 me-4 float-end" src="{{asset('storage/images/download.png')}}" alt="team image" width="20"> </p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-3 mt-2">
                            <div class="box2 rounded-4 p-3" id="in_progress" ondrop="drop_handler(event);" ondragover="dragover_handler(event);">
                                <h5 class="pt-1 ps-4">In progress</h5>
                                @foreach ($inprogress_task_list as $id => $row)
                                <div class="bg-white rounded-4 p-1 my-3" ondragend="dragend_handler(event);" ondragstart="dragstart_handler(event);" id="{{ $row->id }}"  draggable="true">
                                    <h5 class="pt-1 ps-3"><b>{{ $row->title }}</b></h5>
                                    <button type="button" class="btn btn-outline-primary rounded-5 px-4 my-3 ms-2">primary</button>
                                    <p class="ps-3 text-muted">{{ $row->due_date }}<img class="img-fluid rounded-5 me-4 float-end" src="{{asset('storage/images/download.png')}}" alt="team image" width="20"> </p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-3 mt-2">
                            <div class="box3 rounded-4 p-3" id="on_approval" ondrop="drop_handler(event);" ondragover="dragover_handler(event);">
                                <h5 class="pt-1 ps-4">On approval</h5>
                                @foreach ($on_approval_task_list as $id => $row)
                                <div class="bg-white rounded-4 p-1 my-3" ondragend="dragend_handler(event);" ondragstart="dragstart_handler(event);" id="{{ $row->id }}"  draggable="true">
                                    <h5 class="pt-1 ps-3"><b>{{ $row->title }}</b></h5>
                                    <button type="button" class="btn btn-outline-primary rounded-5 px-4 my-3 ms-2">primary</button>
                                    <p class="ps-3 text-muted">{{ $row->due_date }}<img class="img-fluid rounded-5 me-4 float-end" src="{{asset('storage/images/download.png')}}" alt="team image" width="20"> </p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-3 mt-2">
                            <div class="box4 rounded-4 p-3" id="done" ondrop="drop_handler(event);" ondragover="dragover_handler(event);">
                                <h5 class="pt-1 ps-4">Done</h5>
                                @foreach ($done_task_list as $id => $row)
                                <div class="bg-white rounded-4 p-1 my-3" ondragend="dragend_handler(event);" ondragstart="dragstart_handler(event);" id="{{ $row->id }}"  draggable="true">
                                    <h5 class="pt-1 ps-3"><b>{{ $row->title }}</b></h5>
                                    <button type="button" class="btn btn-outline-primary rounded-5 px-4 my-3 ms-2">primary</button>
                                    <p class="ps-3 text-muted">{{ $row->due_date }}<img class="img-fluid rounded-5 me-4 float-end" src="{{asset('storage/images/download.png')}}" alt="team image" width="20"> </p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Dashborad Status Start  -->

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
                                                @foreach ($data as $data => $row )
                                                <tr>
                                                    <td>{{$data+1}}</td>
                                                    <td>{{ $row->name}}</td>
                                                    <td>{{ $row->username}}</td>
                                                    <td>{{ $row->email}}</td>
                                                    <td>{{ $row->password}}</td>
                                                    <td>{{ $row->mobile}}</td>
                                                    <td>{{ $row->address}}</td>
                                                    <td class="d-flex">
                                                        <a class="mx-1" href="{{ route('User.show' ,$row->id) }}"><button class="btn fa fa-eye text-success"></button></a>
                                                        <a class="mx-1" href="{{ route('User.edit', $row->id) }}"><button class="btn fa fa-edit text-primary"></button></a>
                                                        <form action="{{ route('User.destroy', $row->id ) }}" method="post">
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

