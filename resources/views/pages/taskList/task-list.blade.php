<head>


</head>
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
                            <button class="btn btn-primary liststatus_btn" onclick="list_dashboard()"id="status" value="true"><i class="fa fa-hand-o-up fs-6 pe-2"></i>click</button>
                        </div>
                    </div>
                    <div class="col-md-4 mt-1">
                        <div class="box rounded-4">
                            <h5 class="pt-4 ps-4">Participants</h5>
                            <p>
                                <img class="img-fluid ps-3 pt-2 pb-5" src="{{asset('storage/images/team.jpg')}}" style="mix-blend-mode:darken" alt="team image" width="270">
                                <a href="{{ route('task.create') }}" class="bg-white rounded-5 me-5 mt-1 float-end" style="margin-left: 150px;">
                                <i class="fa fa-plus p-1 " aria-hidden="true"></i>
                                </a>
                            </p>
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
                                    <h5 class="pt-1 px-3">
                                        <div class="overflow-single-row float-start"><b>{{ $row->title }}</b></div>
                                        <form action="{{ route('task.destroy', $row->id ) }}" method="post" class="m-0 float-end pt-1">
                                            @csrf @method('DELETE')
                                            <button class="text-danger border-0 bg-transparent p-0" onclick="return confirm('Are you sure to delete this user?')"><i class="fa fa-times" aria-hidden="true"></i></button>
                                        </form>
                                    </h5>
                                    <a href="{{ route('task.show', $row->id) }}"><button type="button" class="btn btn-outline-primary rounded-5 px-4 my-3 ms-2">Review</button></a>
                                    <p class="ps-3 text-muted">{{ $row->due_date }}
                                        <img class="img-fluid rounded-5 me-3 float-end" src="{{asset('storage/images/users/'.$row->getUser->image)}}"
                                        alt="team image" class="rounded-circle" width="30" height="30" style="margin-top:-5px;"
                                        data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="{{ $row->getUser->name }}"/>
                                    </p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- In progress  -->
                        <div class="col-lg-3 mt-2">
                            <div class="box2 rounded-4 p-3" id="in_progress" ondrop="drop_handler(event);" ondragover="dragover_handler(event);">
                                <h5 class="pt-1 ps-4">In progress</h5>
                                @foreach ($inprogress_task_list as $id => $row)
                                <div class="bg-white rounded-4 p-1 my-3" ondragend="dragend_handler(event);" ondragstart="dragstart_handler(event);" id="{{ $row->id }}"  draggable="true">
                                    <h5 class="pt-1 px-3">
                                        <div class="overflow-single-row float-start"><b>{{ $row->title }}</b></div>
                                        <form action="{{ route('task.destroy', $row->id ) }}" method="post" class="m-0 float-end pt-1">
                                            @csrf @method('DELETE')
                                            <button class="text-danger border-0 bg-transparent p-0" onclick="return confirm('Are you sure to delete this user?')"><i class="fa fa-times" aria-hidden="true"></i></button>
                                        </form>
                                    </h5>
                                    <a href="{{ route('task.show', $row->id) }}"><button type="button" class="btn btn-outline-primary rounded-5 px-4 my-3 ms-2">Review</button></a>
                                    <p class="ps-3 text-muted">{{ $row->due_date }}
                                        <img class="img-fluid rounded-5 me-3 float-end" src="{{asset('storage/images/users/'.$row->getUser->image)}}"
                                        alt="team image" class="rounded-circle" width="30" height="30" style="margin-top:-5px;"
                                        data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="{{ $row->getUser->name }}"/>
                                    </p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- On approval  -->
                        <div class="col-lg-3 mt-2">
                            <div class="box3 rounded-4 p-3" id="on_approval" ondrop="drop_handler(event);" ondragover="dragover_handler(event);">
                                <h5 class="pt-1 ps-4">On approval</h5>
                                @foreach ($on_approval_task_list as $id => $row)
                                <div class="bg-white rounded-4 p-1 my-3" ondragend="dragend_handler(event);" ondragstart="dragstart_handler(event);" id="{{ $row->id }}"  draggable="true">
                                    <h5 class="pt-1 px-3">
                                        <div class="overflow-single-row float-start"><b>{{ $row->title }}</b></div>
                                        <form action="{{ route('task.destroy', $row->id ) }}" method="post" class="m-0 float-end pt-1">
                                            @csrf @method('DELETE')
                                            <button class="text-danger border-0 bg-transparent p-0" onclick="return confirm('Are you sure to delete this user?')"><i class="fa fa-times" aria-hidden="true"></i></button>
                                        </form>
                                    </h5>
                                    <a href="{{ route('task.show', $row->id) }}"><button type="button" class="btn btn-outline-primary rounded-5 px-4 my-3 ms-2">Review</button></a>
                                    <p class="ps-3 text-muted">{{ $row->due_date }}
                                        <img class="img-fluid rounded-5 me-3 float-end" src="{{asset('storage/images/users/'.$row->getUser->image)}}"
                                        alt="team image" class="rounded-circle" width="30" height="30" style="margin-top:-5px;"
                                        data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="{{ $row->getUser->name }}"/>
                                    </p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Done  -->
                        <div class="col-lg-3 mt-2">
                            <div class="box4 rounded-4 p-3" id="done" ondrop="drop_handler(event);" ondragover="dragover_handler(event);">
                                <h5 class="pt-1 ps-4">Done</h5>
                                @foreach ($done_task_list as $id => $row)
                                <div class="bg-white rounded-4 p-1 my-3" ondragend="dragend_handler(event);" ondragstart="dragstart_handler(event);" id="{{ $row->id }}"  draggable="true">
                                    <h5 class="pt-1 px-3">
                                        <div class="overflow-single-row float-start"><b>{{ $row->title }}</b></div>
                                        <form action="{{ route('task.destroy', $row->id ) }}" method="post" class="m-0 float-end pt-1">
                                            @csrf
                                            @method('DELETE')
                                           <button  type="submit"class="text-danger border-0 bg-transparent p-0"  onclick="return confirm('Are you sure to delete this user?')"><i class="fa fa-times" aria-hidden="true"></i></button>
                                        </form>
                                    </h5>
                                    <a href="{{ route('task.show', $row->id) }}"><button type="button" class="btn btn-outline-primary rounded-5 px-4 my-3 ms-2">Review</button></a>
                                    <p class="ps-3 text-muted">{{ $row->due_date }}
                                        <img class="img-fluid rounded-5 me-3 float-end" src="{{asset('storage/images/users/'.$row->getUser->image)}}"
                                        alt="team image" class="rounded-circle" width="30" height="30" style="margin-top:-5px;"
                                        data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="{{ $row->getUser->name }}"/>
                                    </p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Dashborad Status Start  -->
                    <!-- Task list Start  -->
                    <div class="container" id="list" id="Task-list">
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
                                                    <td class="text-primary"><div class="overflow-single-row">{{ $row->title}}</div></td>
                                                    <td class="text-primary"> {{ $row->getUser->name }}</td>
                                                    <td style="max-width: 350px;"><div class="overflow"> {{ $row->description}} </div></td>
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
                                                        <a href="{{ route('task.show', $row->id) }}"><button class=" m-1 btn fa fa-eye text-success"></button></a>
                                                        <a class="m-1" href="{{ route('task.edit', $row->id) }}"><button class="btn fa fa-edit text-primary"></button></a>
                                                        <form action="{{ route('task.destroy', $row->id ) }}" method="post" class="m-1">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class=" btn fa fa-trash text-danger" onclick="return confirm('Are you sure to delete this user?')"></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @if(count($taskList) == 0)
                                                    <tr><td colspan="7" class="text-center text-danger">Record Not Found</td></tr>
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
                            <h4 class="modal-title text"><div class="overflow-single-row">{{ $row->title }}</div></h4>
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
                                    <td><div class="overflow">{{ $row->description }}</div></td>
                                </tr>
                                <tr>
                                    <th scope="col">Price</th>
                                    <td>{{ $row->due_date }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Quantity</th>
                                    @if($row->status == 'to_do')
                                        <td><span class="bg-warning rounded-4 px-3 py-2 shadow"> To Do <span></td>
                                    @elseif ($row->status == 'in_progress')
                                        <td><span class="bg-primary rounded-4 px-3 py-2 shadow"> In Progress <span></td>
                                    @elseif ($row->status == 'on_approval')
                                        <td><span class="bg-success rounded-4 px-3 py-2 shadow"> On Approval <span></td>
                                    @else
                                        <td><span class="bg-danger rounded-4 px-3 py-2 shadow"> Done <span></td>
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
    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
        function list_dashboard(){
            if(document.getElementById("status").value == 'false'){
                localStorage.setItem('Dashborad','contents');
                localStorage.setItem('lit','none');
                setValue();
                document.getElementById("status").value = 'true';
            } else {
                localStorage.setItem('Dashborad','none');
                localStorage.setItem('lit','initial');
                setValue();
                document.getElementById("status").value = 'false';
            }
        }
        setValue();
        function setValue(){
            if(localStorage.getItem('lit')){
                let text = localStorage.getItem('Dashborad');
                let text1 = localStorage.getItem('lit');
                document.getElementById("statusDashborad").style.display = text;
                document.getElementById("list").style.display = text1;
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

@endsection
