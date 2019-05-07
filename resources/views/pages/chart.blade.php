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
                                    <option value="jan">Jan,2018</option>
                                    <option value="feb">Feb,2018</option>
                                    <option value="mar">Mar,2018</option>
                                    <option value="apr">Apr,2018</option>
                                    <option value="may">May,2018</option>
                                    <option value="jun">Jun,2018</option>
                                    <option value="jul">Jul,2018</option>
                                    <option value="aug">Aug,2018</option>
                                    <option value="sep">Sep,2018</option>
                                    <option value="oct">Oct,2018</option>
                                    <option value="nov">Nov,2018</option>
                                    <option value="dec">Dec,2018</option>
                                    <option value="jan">Jan,2019</option>
                                    <option value="feb">Feb,2019</option>
                                    <option value="mar">Mar,2019</option>
                                    <option value="apr">Apr,2019</option>
                                    <option value="may">May,2019</option>
                                    <option value="jun">Jun,2019</option>
                                    <option value="jul">Jul,2019</option>
                                    <option value="aug">Aug,2019</option>
                                    <option value="sep">Sep,2019</option>
                                    <option value="oct">Oct,2019</option>
                                    <option value="nov">Nov,2019</option>
                                    <option value="dec">Dec,2019</option>
                                </select>    
                            </div>

                        {{-- PieChart Element for Payment completion  --}}
                            <div class="col-9">
                                <div style="width:100%;">
                                    <canvas id="pieChart"></canvas>
                                </div>  
                            </div>
                        {{--End PieChart Element --}}

                        </div>
                    </div>
                    <div class="card-footer">
                                    
                    </div>
                </div>
            </div>
            
            <div class="col-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-warning">Late Payment</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <select class="form-control text-warning" name="" id="">
                                    <option value="jan">January,2018</option>
                                    <option value="feb">February,2018</option>
                                    <option value="mar">March,2018</option>
                                    <option value="apr">April,2018</option>
                                    <option value="may">May,2018</option>
                                    <option value="jun">June,2018</option>
                                    <option value="jul">July,2018</option>
                                    <option value="aug">August,2018</option>
                                    <option value="sep">September,2018</option>
                                    <option value="oct">October,2018</option>
                                    <option value="nov">November,2018</option>
                                    <option value="dec">December,2018</option>
                                    <option value="jan">January,2019</option>
                                    <option value="feb">February,2019</option>
                                    <option value="mar">March,2019</option>
                                    <option value="apr">April,2019</option>
                                    <option value="may">May,2019</option>
                                    <option value="jun">June,2019</option>
                                    <option value="jul">July,2019</option>
                                    <option value="aug">August,2019</option>
                                    <option value="sep">September,2019</option>
                                    <option value="oct">October,2019</option>
                                    <option value="nov">November,2019</option>
                                    <option value="dec">December,2019</option>   
                                </select>    
                            </div>
                            <div class="col-4">
                                <h1 class="text-danger text-center">11</h1>
                                <h5 class="text-warning text-center">Late Pay Bills</h5>  
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>

{{-- LineChart and BarChart Element  --}}
    <div class="row">        
        <div class="col-6 col-md-6 col-sm-12">
            <div style="width:100%;">
                <canvas id="line"></canvas>
            </div>
        </div>
        <div class="col-6 col-md-6 col-sm-12">            
            <div style="width:100%;">
                <canvas id="myChart"></canvas>
            </div>
         </div>
    </div>
{{-- End LineChart and BarChart Element --}}

</body>
</html>
@endsection 