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

            <!-- navbar content -->
            <div class="m-4">
                <div class="row m-0">
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
                    <div class="col-lg-3 mt-2">
                        <div class="box1 rounded-4 p-3" id="to_do" ondrop="drop_handler(event);" ondragover="dragover_handler(event);">
                            <h5 class="pt-1 ps-1">To do</h5>
                            @foreach ($taskData as $id => $row)
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
                            <!-- <div class="bg-white rounded-4 p-1 my-3" ondragend="dragend_handler(event);" ondragstart="dragstart_handler(event);" id="In_progress"  draggable="true" >
                                <h5 class="pt-1 ps-3"><b>Restiriast Case</b></h5>
                                <button type="button" class="btn btn-outline-primary rounded-5 px-4 my-3 ms-2">primary</button>
                                <p class="ps-3 text-muted">22/2/2022<img class="img-fluid rounded-5 me-4 float-end" src="{{asset('storage/images/download.png')}}" alt="team image" width="20"> </p>
                            </div>
                            <div class="bg-white rounded-4 p-1 my-3"  ondragend="dragend_handler(event);" ondragstart="dragstart_handler(event);" id="src_copy"  draggable="true" >
                                <h5 class="pt-1 ps-3"><b>Restiriast Case</b></h5>
                                <button type="button" class="btn btn-outline-primary rounded-5 px-4 my-3 ms-2">primary</button>
                                <p class="ps-3 text-muted">22/2/2022<img class="img-fluid rounded-5 me-4 float-end" src="{{asset('storage/images/download.png')}}" alt="team image" width="20"> </p>
                            </div>
                            <div class="bg-white rounded-4 p-1 my-3">
                                <h5 class="pt-1 ps-3"><b>Restiriast Case</b></h5>
                                <button type="button" class="btn btn-outline-primary rounded-5 px-4 my-3 ms-2">primary</button>
                                <p class="ps-3 text-muted">22/2/2022<img class="img-fluid rounded-5 me-4 float-end" src="{{asset('storage/images/download.png')}}" alt="team image" width="20"> </p>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-3 mt-2">
                        <div class="box3 rounded-4 p-3" id="on_approval" ondrop="drop_handler(event);" ondragover="dragover_handler(event);">
                            <h5 class="pt-1 ps-4">On approval</h5>
                            <!-- <div class="bg-white rounded-4 p-1 my-3">
                                <h5 class="pt-1 ps-3"><b>Restiriast Case</b></h5>
                                <button type="button" class="btn btn-outline-primary rounded-5 px-4 my-3 ms-2">primary</button>
                                <p class="ps-3 text-muted">22/2/2022<img class="img-fluid rounded-5 me-4 float-end" src="{{asset('storage/images/download.png')}}" alt="team image" width="20"> </p>
                            </div>
                            <div class="bg-white rounded-4 p-1 my-3">
                                <h5 class="pt-1 ps-3"><b>Restiriast Case</b></h5>
                                <button type="button" class="btn btn-outline-primary rounded-5 px-4 my-3 ms-2">primary</button>
                                <p class="ps-3 text-muted">22/2/2022<img class="img-fluid rounded-5 me-4 float-end" src="{{asset('storage/images/download.png')}}" alt="team image" width="20"> </p>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-3 mt-2">
                        <div class="box4 rounded-4 p-3" id="done" ondrop="drop_handler(event);" ondragover="dragover_handler(event);">
                            <h5 class="pt-1 ps-4">Done</h5>
                            <!-- <div class="bg-white rounded-4 p-1 my-3">
                                <h5 class="pt-1 ps-3"><b>Restiriast Case</b></h5>
                                <button type="button" class="btn btn-outline-primary rounded-5 px-4 my-3 ms-2">primary</button>
                                <p class="ps-3 text-muted">22/2/2022<img class="img-fluid rounded-5 me-4 float-end" src="{{asset('storage/images/download.png')}}" alt="team image" width="20"> </p>
                            </div>
                            <div class="bg-white rounded-4 p-1 my-3">
                                <h5 class="pt-1 ps-3"><b>Restiriast Case</b></h5>
                                <button type="button" class="btn btn-outline-primary rounded-5 px-4 my-3 ms-2">primary</button>
                                <p class="ps-3 text-muted">22/2/2022<img class="img-fluid rounded-5 me-4 float-end" src="{{asset('storage/images/download.png')}}" alt="team image" width="20"> </p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<script>
    // var tasks = JSON.parse('<?php $taskData; ?>');
    // console.log('fd', tasks)
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
                console.log('data=', resp );
              
            }
        });
    }
</script>
            