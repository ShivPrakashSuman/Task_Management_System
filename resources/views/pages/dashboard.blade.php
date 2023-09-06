
@extends('layouts.app')

@section('content')
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="assest/css/style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
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
        background-color:#e9423d;
        padding:20px;
    }
    .dashboard > div > div > .bbox4 > i{
        background-color:#0fb7cc;
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
                                    <p class="m-0 pt-3">Task</p>
                                    <h4>{{$userData}}</h4>
                                    <div class="border-top border-1 mt-4">
                                        <p class="p-2"><i class="fa fa-exclamation-triangle text-danger mx-2" aria-hidden="true"></i>Get more space</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="bg-white rounded-3 shadow dbox bbox2">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <p class="m-0 pt-3">User Space</p>
                                    <h4>{{$userData}}</h4>
                                    <div class="border-top border-1 mt-4">
                                        <p class="p-2"><i class="fa fa-calendar-o mx-2" aria-hidden="true"></i>Get more space</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="bg-white rounded-3 shadow dbox bbox3">
                                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                                    <p class="m-0 pt-3">To do List</p>
                                    <h4>49/50 GB</h4>
                                    <div class="border-top border-1 mt-4">
                                        <p class="p-2"><i class="fa fa-tag mx-2" aria-hidden="true"></i>Get more space</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="bg-white rounded-3 shadow dbox bbox4">
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <p class="m-0 pt-3"></p>
                                    <h4>49/50 GB</h4>
                                    <div class="border-top border-1 mt-4">
                                        <p class="p-2"><i class="fa fa-repeat mx-2" aria-hidden="true"></i>Get more space</p>
                                    </div>
                                </div>
                            </div>
                        <div class="col-12 mt-3">
                                <div class="bg-white">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
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

