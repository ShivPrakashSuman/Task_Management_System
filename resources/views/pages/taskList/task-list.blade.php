
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
                                                    <th>Title</th>
                                                    <th>Assign User</th>
                                                    <th>Description</th>
                                                    <th>Due Date</th>
                                                    <th>Status </th>
                                                    <th class="th_action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($taskList as $count => $row)
                                                <tr>
                                                    <td>{{$count+1}}</td>
                                                    <td class="text-primary">{{ $row->title}}</td>
                                                    <td class="text-primary"> {{ $row->getUser->name }}</td>
                                                    <td>{{ $row->description}}</td>
                                                    <td>{{ $row->due_date}}</td>
                                                    @if($row->status == 'to_do')
                                                        <td><span class="badge bg-warning rounded-4 px-3 py-2 shadow"> To Do <span></td>
                                                    @elseif ($row->status == 'in_progress')
                                                        <td><span class="badge bg-primary rounded-4 px-3 py-2 shadow"> In Progress <span></td>
                                                    @elseif ($row->status == 'on_approval')
                                                        <td><span class="badge bg-success rounded-4 px-3 py-2 shadow"> On Approval <span></td>
                                                    @else
                                                        <td><span class="badge bg-danger rounded-4 px-3 py-2 shadow"> Done <span></td>
                                                    @endif
                                                    <td class="d-flex">
                                                        <a href="javascritp:void(0)"data-bs-toggle="modal" data-bs-target="#myModal{{$row->id}}"><button class="btn fa fa-eye text-success"></button></a>
                                                        <a class="mx-1" href="{{ route('task.edit', $row->id) }}"><button class="btn fa fa-edit text-primary"></button></a>
                                                        <form action="{{ route('task.destroy', $row->id ) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class=" btn fa fa-trash text-danger" onclick="return confirm('Are you sure to delete this user?')"></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @if(!$taskList)
                                                    <tr><td colspan="6" class="text-center text-danger">Record Not Found</td></tr>
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
            </div>
            @foreach ($taskList as $id => $row)
                <div class="container">
                <div class="modal fade" id="myModal{{$row->id}}" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text">{{ $row->title }}</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-hover">
                            <thead> 
                                <tr>
                                    <th scope="col">Assign User Name</th>
                                    <td class="text-primary"> {{ $row->getUser->name }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Description</th>
                                    <td>{{ $row->description }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Price</th>
                                    <td>{{ $row->due_date }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Quantity</th>
                                    @if($row->status == 'to_do')
                                        <td><span class="badge bg-warning rounded-4 px-3 py-2 shadow"> To Do <span></td>
                                    @elseif ($row->status == 'in_progress')
                                        <td><span class="badge bg-primary rounded-4 px-3 py-2 shadow"> In Progress <span></td>
                                    @elseif ($row->status == 'on_approval')
                                        <td><span class="badge bg-success rounded-4 px-3 py-2 shadow"> On Approval <span></td>
                                    @else
                                        <td><span class="badge bg-danger rounded-4 px-3 py-2 shadow"> Done <span></td>
                                    @endif
                                </tr>
                            </thead>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('task.edit', $row->id) }}" type="button" class="btn backBtn" >Update</a>
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
@endsection
<script>
 
    function list_dashboard(){
        if(document.getElementById("status").value == 'false'){
            document.getElementById("statusDashborad").style.display = "contents";
            document.getElementById("list").style.display = "none";
            document.getElementById("status").value = 'true';
        } else {
            document.getElementById("statusDashborad").style.display = "none";
            document.getElementById("list").style.display = "initial";
            document.getElementById("status").value = 'false';
        }
    }

    function dragstart_handler(ev) {
        ev.dataTransfer.setData("text", ev.target.id);
        ev.effectAllowed = "copyMove";
    }
    function dragover_handler(ev) {
        ev.currentTarget.style.background = "";
        ev.preventDefault();
    }    
    function drop_handler(ev) {
        ev.preventDefault();
        var id = ev.dataTransfer.getData("text");
        var ele = document.getElementById(id); 
        var ids = ["to_do","in_progress","on_approval","done"]
        if (id == ele.id && ids.includes(ev.target.id) > -1){
            ev.target.appendChild(document.getElementById(id));
        }
    }
    function dragend_handler(ev) {
        ev.preventDefault();
        changeTask(ev.target.id, ev.target.parentElement.id);
    }

    function changeTask(task_id, field_id){
        console.log('en0',task_id);
        console.log('en1',field_id);
        $.ajax({
            type:'GET',
            url: `/changeStatus?task_id=${task_id}&field_id=${field_id}`,
            data: '',
            success: function (data){ 
                let resp = JSON.parse(data);
                window.location.reload(true);
            }
        });
    }
</script>
