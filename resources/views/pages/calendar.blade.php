@extends('layout.dashboard')
@section('content')
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
