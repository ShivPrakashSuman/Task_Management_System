<style>
    #formContent {
        max-width: 80%;
    }
    input[type=text],
    input[type=date],
    input[type=number],
    input[type=email],
    input[type=password],
    input[type=password],
    input[type=file],
    textarea[type=text],
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
                                <h1 class="mt-5">UserUpdate Form</h1>
                                <form action="{{ route('user.update',$data->id) }}" method="post"enctype="multipart/form-data">
                                   @csrf
                                   @method('PUT')
                                   <div class="my-4">
                                         <input type="text" id="name" name="name" placeholder="Full Name"
                                          class="fadeIn bnn form-control @error('name') is-invalid @enderror"
                                          value="{{  $data->name }}" autocomplete="name" autofocus >
                                     </div>
                                     <div class="my-3">
                                         <input type="text" id="username" name="username"  placeholder="User Name"
                                          class="fadeIn form-control  @error('username') is-invalid @enderror"
                                          value="{{ $data->username }}" autocomplete="username" autofocus >
                                     </div>
                                     <div class="my-4">
                                         <input type="email" id="email" name="email" placeholder="Your Email"
                                          class="fadeIn form-control  @error('email') is-invalid @enderror"
                                          value="{{ $data->email }}" autocomplete="email" autofocus>
                                     </div>
                                    <div class="my-3">
                                        <input type="number" id="mobile" name="mobile" placeholder="Your Contact"
                                          class="fadeIn form-control  @error('email') is-invalid @enderror"
                                          value="{{ $data->mobile }}" autocomplete="mobile" autofocus>
                                     </div>
                                     <div class="my-3">
                                        <textarea type="text" id="image" name="address" placeholder="address"class="fadeIn form-control @error('address') is-invalid @enderror"
                                        autocomplete="address" autofocus>{{ $data->address }}</textarea>
                                     </div>
                                     <div class="my-3">
                                        <input type="file" id="image" name="image" placeholder="image" style="width: 80%;"
                                          class="fadeIn form-control  @error('image') is-invalid @enderror" autocomplete="image" autofocus>
                                          <span><img src="{{asset('storage/images/users/'.$data->image)}}" class="img-fluid" alt="team image" width="38" style='height: 45px;'></span>
                                     </div>
                                        <a href="/user" class="btn btn-info my-4 mx-3 backBtn">Back</a>
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
