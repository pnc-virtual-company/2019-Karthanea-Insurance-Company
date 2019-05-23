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

                            <div class="col-4">
                                <select id="pieOption" value='DataSet' class="form-control" onChange="switchPieData();">
                                   
                                   
                                    <option value="{{$item->id}}">{{}}</option>
                                   
                                    @endforeach
                                   

                                </select>    
                            </div>

                        {{-- PieChart Element for Payment completion  --}}
                            <div class="col-8">

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

                                <select id="numClientLate" value='DataSet' class="form-control" onChange="clientLate();">
                                    @foreach ($bill as $item)
                                    <option value="{{$item->id}}">{{$item->month}}</option>
                                    @endforeach
                                   
                                    
                                </select>    
                            </div>
                            <div class="col-4">
                                <h1 class="text-danger text-center" id="num">5</h1>
                                <h5 class="text-warning text-center">Client/s Late Pay Bills</h5>  

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