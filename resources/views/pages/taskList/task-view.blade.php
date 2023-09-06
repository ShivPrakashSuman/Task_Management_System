<<<<<<< Updated upstream
<html lang="en">
<style>
    label{
        font-weight: 600;
    }
</style>

<body>

    <div class="d-flex justify-content-center p-2 m-2">
        <div class="card p-2 w-50">
            <div class="d-flex justify-content-between">
                <div class="">
                    <h3>User Profile</h3>
                </div>
                <div class="">
                    <a href="{{ route('task.edit',$task->id) }}"><button class="btn btn-primary"><i class="fa fa-edit"></i>Edit</button></a>
                </div>
            </div>
            <hr class="my-1 mb-2">
            <div class="row">
                <div class="col-4">
                    <div class="border p-1 text-center">
                        <img src="{{ asset('task.png') }}" alt="user image" width="120">
                    </div>
                </div>
                <div class="col-8">
                    <h6>General Information</h6>
                    <hr class="my-1">
                    <div class="d-flex justify-content-between">
                        <label class="">Title:</label>
                        <span class="text-primary">{{ $task->title }}</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <label class="">AssignUser :</label>
                        <span class="text-primary">{{ $task->AssignUser }}</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <label class="">Description:</label>
                        <span class="text-primary">{{ $task->Description }}</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <label class="">DueDate:</label>
                        <span class="text-primary">{{ $task->DueDate }}</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <label class="">status:</label>
                        <span class="text-primary">{{ $task->Status }}</span>
                    </div>
=======

<style>
    
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

                    <div class="container">
                        <div class="row justify-content-center">
                            <div id="formContent" class="shadow bg-white rounded-3 text-center mt-5">
                                <h1 class="mt-5">Create New Task</h1>
                                
                            </div>
                        </div>
                    </div>
                     <!--  end Change content  -->
>>>>>>> Stashed changes
                </div>
            </div>
        </div>
    </div>
<<<<<<< Updated upstream
</body>
</html>
=======
</div>
@endsection
>>>>>>> Stashed changes
