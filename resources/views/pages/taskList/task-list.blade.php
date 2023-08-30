
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
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">{{ __('Task List index Page header') }}</div>
                                    <div class="card-body">{{ __('Task index Page mani') }}</div>
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
