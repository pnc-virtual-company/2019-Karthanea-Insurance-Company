
@extends('layout.dashboard')
@section('content')
<html>
    
    <head>
        <title>Line Chart</title>
        <script src="{{asset('js/Chart.min.js')}}"></script>
        <script src="{{asset('js/utils.js')}}"></script>
        <script src="{{asset('js/chart.js')}}"></script>
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
        <div style="width:50%;">
            <canvas id="canvas"></canvas>
        </div>
        {{-- <br>
        <br>
        <button id="randomizeData">Randomize Data</button>
        <button id="addDataset">Add Dataset</button>
        <button id="removeDataset">Remove Dataset</button>
        <button id="addData">Add Data</button>
        <button id="removeData">Remove Data</button> --}}
        <div class="row">
            <div class="col-6 col-md-6 col-sm-12">
                <div style="width:100%;">
                    <canvas id="canvas"></canvas>
                </div>
            </div>
            <div class="col-6 col-md-6 col-sm-12">
                <div style="width: 100%">
                    <canvas id="canvas2"></canvas>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
	