
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
    </div>
</body>
</html>
@endsection
	