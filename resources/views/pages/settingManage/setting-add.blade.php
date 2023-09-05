
<style>
    #formContent {
        max-width: 80%;
    }
    input[type=text],
    input[type=date],
    input[type=number],
    input[type=file],
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
                                <h1 class="mt-5">Create setting</h1>
                                <form action="{{ route('setting.store') }}" method="post" enctype="multipart/form-data">
                                     @csrf
                                     <div class="my-3">
                                        <select type="select" class="fadeIn form-select @error('status') is-invalid @enderror" aria-label="Default select example"
                                            id="status" name="status" autocomplete="status" autofocus>
                                            <option selected disabled hidden>Open this select Type</option>
                                            <option value="text">text</option>
                                            <option value="number">number</option>
                                            <option value="iamge">iamge</option>
                                        </select>
                                     </div>
                                     <div class="my-4">
                                        <input type="text" id="key" name="key" placeholder="key"
                                         class="fadeIn bnn form-control @error('key') is-invalid @enderror"
                                         value="{{ old('key')}}" autocomplete="key" autofocus >
                                    </div>
                                    <div class="my-3">
                                         <input type="text" id="value" name="value"  placeholder="Text"
                                          class="fadeIn form-control  @error('value') is-invalid @enderror"
                                          value="{{ old('value') }}" autocomplete="value" autofocus >
                                     </div>
                                    <!-- <div class="my-4">
                                         <input type="number" id="value" name="value" placeholder="Number"
                                          class="fadeIn form-control  @error('value') is-invalid @enderror"
                                          value="{{ old('value') }}" autocomplete="value" autofocus>
                                    </div>
                                    <div class="my-4">
                                        <input type="file" id="value" name="value" placeholder="Image"
                                         class="fadeIn form-control  @error('value') is-invalid @enderror"
                                         value="{{ old('value') }}" autocomplete="value" autofocus>
                                   </div> -->
                                      <a href="/setting" class="btn btn-info my-4 mx-3 backBtn">Back</a>
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
