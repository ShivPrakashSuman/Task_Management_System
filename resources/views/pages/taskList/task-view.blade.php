
<style>
    .liststatus_btn {
        margin-top: -7px !important;
        border-radius: 20px !important;
        height: 35px !important;
        margin-bottom: 10px !important;
    }
</style>
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
                    <div class="d-flex justify-content-between ">
                        <div class="">
                            <h5>View Task</h5>
                        </div>    
                        <div class="">
                            <a href='/task' ><button class="btn btn-primary liststatus_btn"><i class="fa fa-hand-o-left fs-6 pe-2"></i>Back</button></a>
                        </div>    
                    </div>
                    <hr>
                    <div class="col-md-12 mt-2">
                        <div class="row mb-2">
                            <div class="col-sm-12 text-secondary">
                            <h3 class="mb-0">{{ $taskGet->title }}</h3>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-1">
                                <h6 class="mb-0">Assign User</h6>
                            </div>        
                            <div class="col-sm-11 text-secondary">
                                <span class="text-primary">{{ $taskGet->getUser->name }} </span>
                            </div>
                        </div> 
                        <div class="row mb-3">
                            <div class="col-sm-1">
                                <h6 class="mb-0">Due Date</h6>
                            </div>        
                            <div class="col-sm-11 text-secondary">
                                {{ $taskGet->due_date }}
                            </div>
                        </div>                        
                        <div class="row mb-3">
                            <div class="col-sm-1">
                                <h6 class="mb-0">Status</h6>
                            </div>        
                            <div class="col-sm-11 text-secondary">
                                @if($taskGet->status == 'to_do')
                                    <span class="badge bg-warning rounded-4 px-3 py-2 shadow"> To Do <span>
                                @elseif ($taskGet->status == 'in_progress')
                                    <span class="badge bg-primary rounded-4 px-3 py-2 shadow"> In Progress<span>
                                @elseif ($taskGet->status == 'on_approval')
                                    <span class="badge bg-success rounded-4 px-3 py-2 shadow"> On Approval <span>
                                @else 
                                    <span class="badge bg-danger rounded-4 px-3 py-2 shadow"> Done <span>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-1">
                                <h6 class="mb-0">Created At</h6>
                            </div>        
                            <div class="col-sm-11 text-secondary">
                                {{ $taskGet->created_at }}
                            </div>
                        </div>
                        <div class="row">
                            <h6 class="">Description </h6>        
                            <div class="text-secondary">
                                {{ $taskGet->description }}
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
