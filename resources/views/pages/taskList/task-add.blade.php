
<style>
    #formContent {
        max-width: 80%;
    }
    input[type=text],
    input[type=date],
    select[type=select] {
        background-color: #f6f6f6;
        border: none;
        padding: 15px 30px;
        text-decoration: none;
        display: inline-block;
        width: 85%;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -ms-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
        border-bottom: 2px solid #f6f6f6;
    }
    input[type=text]:focus {
        background-color: #f6f6f6 !important;
        border-bottom: 2px solid #5fbae9;
    }
    .form-select, .form-control:focus {
        color: #1475d6;
        background-color: #f6f6f6 !important;
        border-color: #86b7fe;
        outline: 0;
        box-shadow: 0 0 0 0rem rgba(13,110,253,.25) !important;
    }

    *:focus {
        outline: none;
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
                                <form action="{{ route('task.store') }}" method="post">
                                     @csrf
                                    <div class="my-4">
                                        <input type="text" id="title" name="title" placeholder="Title"
                                        class="fadeIn bnn form-control @error('title') is-invalid @enderror"
                                        value="{{ old('title')}}" autocomplete="title" autofocus >
                                    </div>
                                    <div class="my-3">
                                        <input type="text" id="description" name="description"  placeholder="Description"
                                        class="fadeIn form-control  @error('description') is-invalid @enderror"
                                        value="{{ old('description') }}" autocomplete="description" autofocus >
                                    </div>
                                    <div class="my-3">
                                    <select type="select" class="fadeIn form-select @error('assign_id') is-invalid @enderror" aria-label="Default select example" 
                                        id="assign_id" name="assign_id" autocomplete="assign_id" autofocus>
                                        <option value="" selected hidden>Task Assign</option>
                                        @foreach ($userData as $option)
                                            <option value="{{$option->id}}" {{ $option->id == old('assign_id')? 'selected':'' }}>{{$option->name}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    <div class="my-4">
                                        <input type="date" id="due_date" name="due_date" placeholder="Due Date"
                                        class="fadeIn form-control  @error('due_date') is-invalid @enderror"
                                        value="{{ old('date') }}" autocomplete="date" autofocus>
                                    </div>
                                    <div class="my-3">
                                    <select type="select" class="fadeIn form-select @error('status') is-invalid @enderror" aria-label="Default select example" 
                                        id="status" name="status" autocomplete="status" autofocus>
                                        <option value="to_do" selected>To Do</option>
                                    </select>
                                    </div>
                                    <a href="/task" class="btn btn-info my-4 mx-3 backBtn">Back</a>
                                    <input type="submit" value="Submit" class="btn btn-info my-4"/>
                                </form>
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
