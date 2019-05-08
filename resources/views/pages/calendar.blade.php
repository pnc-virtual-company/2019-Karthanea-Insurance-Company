@extends('layout.dashboard')
@section('content')
<body>
        <div class="container mt-4">
                <div id='calendar'></div>
            </div> 
</body>
<script src="{{asset('js/app.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     {{-- <script src="{{asset('js/core/bootstrap-material-design.min.js')}}"></script>
      <script src="{{asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script> --}}
@endsection
