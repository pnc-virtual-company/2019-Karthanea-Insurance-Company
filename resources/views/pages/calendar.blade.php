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

    <div class="container mt-4">
        <div id='calendar'></div>
    </div>
    {{-- <script src="{{asset('js/app.js')}}"></script> --}}
    <script>
    document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    
    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid' ],
      header: {
        right: 'prev,next today',
        center: 'title',
        left: 'month,agendaWeek,agendaDay'
      },
      defaultDate: '2019-04-12',
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      
      events: [
             @foreach ($call as $item)
              {
                
                title:' Client {{$item->client->firstname}} {{$item->client->lastname}} {{$item->duration}} ',
                start: '{{$item->date}}',
                color:'red',
                textColor:'white'
              },
              @endforeach
            ]
    });

    calendar.render();
  });

    </script>

@endsection
