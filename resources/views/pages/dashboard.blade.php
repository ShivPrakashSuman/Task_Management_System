
@extends('layouts.app')

@section('content')
<style>
    .dashboard > div > div > .dbox{
        position:relative;
    }
    .dashboard > div > div > .dbox > i{
        font-size:30px;
        color:white;
        border-radius:3px;
        position:absolute;
        top:-20px;
        left:15px;
    }
    .dashboard > div > div > .dbox > h4, .dashboard > div > div > .dbox > p{
        text-align:right;
        padding-right:1rem;
        color:gray;
    }
    .dashboard > div > div > .bbox1 > i{
        background-color:#fc950d;
        padding:20px;
    }
    .dashboard > div > div > .bbox2 > i{
        background-color:#52ab57;
        padding:20px 25px;
    }
    .dashboard > div > div > .bbox3 > i{
        background-color:#0fb7cc;
        padding:20px;
    }
    .dashboard > div > div > .bbox4 > i{
        background-color:#e9423d;
        padding:20px 22px;
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

            <!-- navbar content -->
            <div class="m-4">
                <div class="row m-0">
                    <div class="container-fluid pt-5 dashboard">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="bg-white rounded-3 shadow dbox bbox1">
                                    <i class="fa fa-tasks" aria-hidden="true"></i>
                                    <p class="m-0 pt-3 fs-6 pb-1">Total Task</p>
                                    <h4> {{$alltask}} </h4>
                                    <div class="border-top border-1 mt-4">
                                        <p class="p-2"><i class="fa fa-thumb-tack text-warning mx-2" aria-hidden="true"></i>Get more space</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="bg-white rounded-3 shadow dbox bbox2">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <p class="m-0 pt-3 fs-6 pb-1"> Total User </p>
                                    <h4>{{$alluser}}</h4>
                                    <div class="border-top border-1 mt-4">
                                        <p class="p-2"><i class="fa fa-calendar-o text-success mx-2" aria-hidden="true"></i>Get more space</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="bg-white rounded-3 shadow dbox bbox3">
                                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                                    <p class="m-0 pt-3 fs-6 pb-1">Total Participants User</p>
                                    <h4>{{ $participantUser }}</h4>
                                    <div class="border-top border-1 mt-4">
                                        <p class="p-2"><i class="fa fa-list-alt text-info mx-2" aria-hidden="true"></i>Get more space</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="bg-white rounded-3 shadow dbox bbox4">
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <p class="m-0 pt-3 fs-6 pb-1">Total Close Task</p>
                                    <h4>{{ $closeTask }}</h4>
                                    <div class="border-top border-1 mt-4">
                                        <p class="p-2"><i class="fa fa-window-close text-danger mx-2" aria-hidden="true"></i>Get more space</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-3">
                                <div class="bg-white rounded-3 shadow dbox bbox1">
                                    <i class="fa fa-tasks bg-primary" aria-hidden="true"></i>
                                    <p class="m-0 pt-3 fs-6 pb-1">Total ToDo Task</p>
                                    <h4>{{ $todoTask }}</h4>
                                    <div class="border-top border-1 mt-4">
                                        <p class="p-2"><i class="fa fa-exclamation-triangle text-primary mx-2" aria-hidden="true"></i>Get more space</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="bg-white rounded-3 shadow dbox bbox2">
                                    <i class="fa fa-spinner" aria-hidden="true"></i>
                                    <p class="m-0 pt-3 fs-6 pb-1">Total Progress Task</p>
                                    <h4>{{ $progressTask }}</h4>
                                    <div class="border-top border-1 mt-4">
                                        <p class="p-2"><i class="fa fa-spinner mx-2 text-success" aria-hidden="true"></i>Get more space</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="bg-white rounded-3 shadow dbox bbox3">
                                    <i class="fa fa-thumbs-o-up px-4" aria-hidden="true"></i>
                                    <p class="m-0 pt-3 fs-6 pb-1">Total Approval Task</p>
                                    <h4> {{ $approvalTask }} </h4>
                                    <div class="border-top border-1 mt-4">
                                        <p class="p-2"><i class="fa fa-thumbs-up mx-2 text-info" aria-hidden="true"></i>Get more space</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="bg-white rounded-3 shadow dbox bbox4">
                                    <i class="fa fa-check bg-success" aria-hidden="true"></i>
                                    <p class="m-0 pt-3 fs-6 pb-1">Total Done Task</p>
                                    <h4>{{ $doneTask }}</h4>
                                    <div class="border-top border-1 mt-4">
                                        <p class="p-2"><i class="fa fa-check-square-o mx-2 text-success" aria-hidden="true"></i>Get more space</p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-12 mt-3">
                                <div class="bg-white">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const ctx = document.getElementById('myChart');
new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
           label: 'Looping tension',
          data: [65, 59, 80, 81, 26, 55, 40],
          fill: false,
          borderColor: 'rgb(75, 192, 192)',
        }]
      },
        options: {
          scales: {
        y: { // defining min and max so hiding the dataset does not change scale range
          min: 0,
          max: 100
        }

        }
      }
    });
  </script>
@endsection

