@extends('layout.dashboard')
@section('content')
<body>
        <div class="container mt-4">
                <div id='calendar'></div>
            </div> 
</body>
<script src="{{'js/app.js'}}"></script>
     {{-- <script src="{{asset('js/core/bootstrap-material-design.min.js')}}"></script>
      <script src="{{asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script> --}}
@endsection
