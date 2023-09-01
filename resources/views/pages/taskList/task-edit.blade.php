
<style>
    .main {
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        width: 100%;
        min-height: 100%;
        padding: 20px;
    }

    #formContent {
        -webkit-border-radius: 10px 10px 10px 10px;
        border-radius: 10px 10px 10px 10px;
        background: #fff;
        padding: 30px;
        width: 100%;
        max-width: 80%;
        position: relative;
        padding: 0px;
        -webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
        box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
        text-align: center;
    }

    input[type=button],
    input[type=submit],
    input[type=reset] {
        background-color: #56baed;
        border: none;
        color: white;
        padding: 15px 80px;
        text-decoration: none;
        display: inline-block;
        text-transform: uppercase;
        font-size: 13px;
        -webkit-box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
        box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
        margin: 5px 20px 40px 20px;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    input[type=button]:hover,
    input[type=button]:hover {
        background-color: #39ace7;
    }

    input[type=button]:active,
    input[type=button]:active,
    {
    -moz-transform: scale(0.95);
    -webkit-transform: scale(0.95);
    -o-transform: scale(0.95);
    -ms-transform: scale(0.95);
    transform: scale(0.95);
    }

    input[type=text],
    input[type=date] {
        background-color: #f6f6f6;
        border: none;
        color: #0d0d0d;
        padding: 15px 32px;

        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 5px;
        width: 85%;
        border: 2px solid #f6f6f6;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -ms-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
    }

    input[type=text]:focus {
        background-color: #fff;
        border-bottom: 2px solid #5fbae9;
    }

    *:focus {
        outline: none;
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
                        <div class="row justify-content-center main">
                            <div id="formContent">
                                <h1>Create Form</h1>
                                <form action="{{ route('task.update',$data->id) }}" method="post">
                                   @csrf
                                   @method('PUT')
                                    <div class="mb-3">
                                         <input type="text" id="title" name="title" placeholder=" title"
                                          class="fadeIn form-control @error('title') is-invalid @enderror"
                                          value="{{ old('title')}}" autocomplete="title" autofocus >
                                     </div>
                                     <div class="mb-3">
                                         <input type="text" id="description" name="description"  placeholder="description"
                                          class="fadeIn form-control  @error('description') is-invalid @enderror"
                                          value="{{ old('description') }}" autocomplete="description" autofocus >
                                     </div>
                                     <div class="mb-3">
                                         <input type="date" id="due_date" name="due_date" placeholder="due_date"
                                          class="fadeIn form-control  @error('due_date') is-invalid @enderror"
                                          value="{{ old('date') }}" autocomplete="date" autofocus>
                                     </div>
                                     <div class="mb-3">
                                         <input type="text" id="status" name="status" placeholder="status"
                                         class="fadeIn form-control  @error('status') is-invalid @enderror"
                                         value="{{ old('status') }}" autocomplete="status" autofocus>
                                     </div>
                                         <input type="submit" value="Submit" />
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
