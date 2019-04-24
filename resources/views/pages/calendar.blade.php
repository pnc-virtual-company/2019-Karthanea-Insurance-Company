<!-- pei chart link -->
<script src="https://cdnjs.com/libraries/Chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script src="{{asset('js/chart.js')}}"></script>
@extends('layout.dashboard')
@section('content')
    <div class="container mt-4">
        <div id='calendar'></div>
    </div>
@endsection
