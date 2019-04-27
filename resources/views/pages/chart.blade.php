{{-- <script src="https://cdnjs.com/libraries/Chart.js"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> --}}
<script src="{{asset('js/utils.js')}}"></script>
<script src="{{asset('js/Chart.min.js')}}"></script>
<script src="{{asset('js/chart.js')}}"></script>
@extends('layout.dashboard')
@section('content')
<html>
    <head>
        <title>Line Chart</title>
        <style>
            canvas{
                -moz-user-select: none;
                -webkit-user-select: none;
                -ms-user-select: none;
            }
        </style>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
                <div class="col-6 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Payment Completion</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                            <select class="form-control" name="" id="">
                                                <option value="1">one</option>
                                                <option value="2">two</option>  
                                                <option value="3">three</option>  
                                                <option value="4">four</option>    
                                            </select>    
                                        </div>
                                        <div class="col-9">
                                                <div style="width:100%;">
                                                    <canvas id="pieChart"></canvas>
                                                </div>  
                                        </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                    
                            </div>
                        </div>
                    </div>
            
            <div class="col-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Payment Completion</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                        <select class="form-control" name="" id="">
                                            <option value="1">one</option>
                                            <option value="2">two</option>  
                                            <option value="3">three</option>  
                                            <option value="4">four</option>    
                                        </select>    
                                    </div>
                                    <div class="col-4">
                                        <h1 class="text-info text-center">50%</h1>
                                        <h5 class="text-info text-center">Paid Bills</h5>  
                                    </div>
                            </div>
                        </div>
                        <div class="card-footer">
                                
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-md-6 col-sm-12">
                <div style="width:100%;">
                    <canvas id="line"></canvas>
                </div>
            </div>
            <div class="col-6 col-md-6 col-sm-12">

                <div style="width:100%;">
                    <canvas id="myChart"></canvas
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection 