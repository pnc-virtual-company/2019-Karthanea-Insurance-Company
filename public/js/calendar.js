  // document.addEventListener('DOMContentLoaded', function() {
  //   var calendarEl = document.getElementById('calendar');

  //   var calendar = new FullCalendar.Calendar(calendarEl, {
  //     plugins: [ 'interaction', 'dayGrid' ],
  //     defaultDate: '2019-04-12',
  //     editable: true,
  //     eventLimit: true, // allow "more" link when too many events
  //     events: [
  //       @foreach ($call as $item)
  //             {
                
  //               title:' Client {{$item->client->firstname}} {{$item->client->lastname}} ',
  //               start: '{{$item->created_at}}' 
  //             }
  //             @endforeach
  //     ]
  //   });

  //   calendar.render();
  // });
