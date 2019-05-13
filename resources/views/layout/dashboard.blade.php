<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('images/icon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>
      {{ config('app.name', 'Karthanea') }}
  </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

  <link rel="stylesheet" href="../css/profile.css">
  <!-- pei chart link -->

  <script src="https://cdnjs.com/libraries/Chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script src="{{asset('js/Chart.min.js')}}"></script>
  <script src="{{asset('js/utils.js')}}"></script>
  <script src="{{asset('js/chart.js')}}"></script>

  <!-- link calendar -->
  <link href='{{asset('packages/core/main.css')}}' rel='stylesheet' />
  <link href='{{asset('packages/daygrid/main.css')}}' rel='stylesheet' />
  
  <script src='{{asset('packages/core/main.js')}}'></script>
  <script src='{{asset('packages/interaction/main.js')}}'></script>
  <script src='{{asset('packages/daygrid/main.js')}}'></script>
  <script src='{{asset('js/calendar.js')}}'></script>
  
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('css/dataTable.bootstrap4.min.css')}}">
  <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
  <script src="{{asset('js/jquery.dataTypes.min.js')}}"></script>
  <script src="{{asset('js/dataTypes.bootstrap4.min.js')}}"></script>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
  <!-- CSS Files -->

  <link href="{{asset('css/material-dashboard.css?v=2.1.0')}}" rel="stylesheet" />
  {{-- <!-- CSS Just for demo purpose, don't include it in your project --> --}}
  <link href="{{asset('demo/demo.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
  <div class="wrapper">
    <div class="sidebar" data-color="primary" data-background-color="black" data-image="{{asset('images/sidebar-4.jpg')}}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger "
        
        Tip 2: you can also add an image using data-image tag
      -->
      <div class="logo bg-teal">
        <a href="{{url('/client')}}" class="simple-text logo-normal">
          <picture>
            <source media="(min-width: 650px)" srcset="{{asset('images/logo-1.png')}}">
            <source media="(min-width: 465px)" srcset="{{asset('images/logo-1.png')}}">
            <img src="{{asset('images/logo-1.png')}}" alt="brand logo">
          </picture>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active">
              <a href="#submenu" data-toggle="collapse" id="dashboard" aria-expanded="false" class="nav-link">
                    <i class="material-icons">color_lens</i>
                    <p>
                      Dashboard
                      <span class="material-icons ml-5" id="dashDown">arrow_drop_down</span>
                    </p>
                  </a>
                  <ul class="collapse list-unstyled " id="submenu">
                    <li class="list-group-item collapsed">
                      <a href="{{url('/userCall')}}">
                        <span class="text-white">
                          <i class="material-icons text-white">perm_phone_msg</i>
                          User Call
                        </span>
                      </a>
                    </li>
                    <li class="list-group-item collapsed">
                      <a href="{{url('/client')}}">
                        <span class="text-white">
                              <i class="material-icons text-white">format_list_numbered</i>
                              Clients List
                            </span>
                        </a>
                    </li>
                    <li class="list-group-item collapsed">
                      <a href="{{url('/chart')}}">
                        <span class="text-white">
                          <i class="material-icons text-white">pie_chart</i>
                          Occupency
                        </span>
                      </a>
                    </li>
                  </ul>
                </li>
          <li class="nav-item ">
            <a class="nav-link" href="#pageSubmenu" id="management" data-toggle="collapse" aria-expanded="false">
              <i class="material-icons">work</i>
              <p>Managements
                <span class="material-icons ml-4" id="manageDown">arrow_drop_down</span>
              </p>
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
              <li class="list-group-item collapsed">
                <a href="{{url('/contracttype')}}">
                  <span class="text-white">
                    <i class="material-icons text-white">ballot</i>
                    Contract Type
                      </span>
                    </a>
                  </li>
                <li class="list-group-item collapsed">
                  <a href="{{url('/contract')}}">
                    <span class="text-white">
                      <i class="material-icons text-white">description</i>
                      Contract List
                    </span>
                  </a>
                </li>
                <li class="list-group-item collapsed">
                  <a href="{{url('/clientAchive')}}">
                    <span class="text-white">
                      <i class="material-icons text-white">people</i>
                      Archieve Clients
                    </span>
                  </a>
                </li>
                <li class="list-group-item collapsed">
                  <a href="{{url('/payment')}}">
                    <span class="text-white">
                      <i class="material-icons text-white">monetization_on</i>
                      Payments
                    </span>
                  </a>
                </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('/call')}}">
              <i class="material-icons">phone_forwarded</i>
              <p>Calling</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('/calendar')}}">
              <i class="material-icons">calendar_today</i>
              <p>Calendar</p>
            </a>
          </li>
          @if (Auth::user()->hasRole('Administrator'))
            <li class="nav-item">
              <a class="nav-link" href="{{url('users')}}">
                <i class="material-icons">person</i> {{ __('Users') }}
              </a>
            </li>
          @endif
          <li class="nav-item ">
            <a class="nav-link" href="{{url('/location')}}">
              <i class="material-icons">location_ons</i>
              <p>Location</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg bg-seccuess navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid ">  
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span><strong>{{Auth::user()->name}}</strong></span>
                  @if (Auth::user()->avatar!=null)
                    <img id="imgProfilePic" src="{{asset('storage/avatar/'.Auth::user()->avatar)}}">
                  @else
                    <img id="imgProfilePic" src="{{asset('storage/avatar/avatar.jpg')}}">
                  @endif
                </a>
                <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdownMenuLink">

                  <a class="dropdown-item nav-link" href="{{url('/profile')}}">
                    <span>
                      <i class="material-icons">account_circle</i>
                      Profile
                    </span>
                  </a>
                  <a class="dropdown-item nav-link" href="{{ route('logout') }}" 
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                      <span>
                        <i class="material-icons">logout</i>
                        Logout
                      </span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          @yield('content')
        </div>
      </div>
      <script>
        const x = new Date().getFullYear();
        let date = document.getElementById('date');
        //date.innerHTML = '&copy; ' + x + date.innerHTML;
        </script>
    </div>
  </div>
  <!--   Core JS Files   -->
  
  <script src="{{asset('js/app.js')}}"></script>
  <script src="{{asset('js/core/jquery.min.js')}}"></script>
  <script src="{{asset('js/core/popper.min.js')}}"></script>
  {{-- modal error --}}
  {{-- <script src="{{asset('js/core/bootstrap-material-design.min.js')}}"></script> --}}
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="{{asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  {{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}
  <!-- Chartist JS -->
  <script src="{{asset('js/plugins/chartist.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('js/material-dashboard.js?v=2.1.0')}}"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('demo/demo.js')}}"></script>
  <script>
    //fade Bill
    $(document).ready(function(){
        $(".toggleBill").click(function(){
          $("#myTabless").fadeToggle("slow");
      });
    });

    //fade payment
    $(document).ready(function(){
      $(".togglePayment").click(function(){
        $("#table2").fadeToggle("slow");
      });
    });
    
    //fade table call
    $(document).ready(function(){
      $(".toggleCallHistory").click(function(){
        $("#myTable2").fadeToggle("slow");
      });
    });

    $(document).ready(function() {
      md.initDashboardPageCharts();
      $('#example').DataTable();                
    });
    
    $(document).ready(function() {
      $('#myTable').DataTable();                
    });
    $(document).ready(function() {
      $('#myTable3').DataTable();                
    });
    $(document).ready(function() {
      $('#myTable4').DataTable();                
    });
    $(document).ready(function() {
      $('#myTable5').DataTable();                
    });
    $(document).ready(function() {
      $('#contractType').DataTable();  
      
    });

</script>
{{-- Link datepicker --}}
 <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
  
   $(document).ready(function() {

$(".startdate").datepicker({
    showOn: 'button',
    buttonText: 'Show Date',
    buttonImageOnly: true,
    buttonImage: '../public/images/calendar.png',
    dateFormat: 'yy-mm-dd',
    
     constrainInput: true,
    
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() + 1);
            $(".enddate").datepicker("option", "minDate", dt);
        }
     

     
});
$(".enddate").datepicker({
    showOn: 'button',
    buttonText: 'Show Date',
    buttonImageOnly: true,
    buttonImage: '../public/images/calendar.png',
    dateFormat: 'yy-mm-dd',
    
     constrainInput: true,
     
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() - 1);
            $("startdate").datepicker("option", "maxDate", dt);
        }
    
});
$(".ui-datepicker-trigger").mouseover(function() {
    $(this).css('cursor', 'pointer');
});

});
    </script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

  {{-- js datapicker --}}
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</body>
<script>
  //barChart
  var line = document.getElementById('line').getContext('2d');
  var myChart = new Chart(line, {
      type: 'line',
      data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'jun'],
          datasets: [{
              label: 'Average of call per month for 2019 (Hours Per Month)',
              data: [12, 9, 13, 5, 12, 10],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.7)',

                  'rgba(54, 162, 235, 0.7)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true
                  }
              }]
          }
      }
  });
  
  
  //barChart
  var bar = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(bar, {
      type: 'bar',
      data: {
          labels: ['Jan', 'Feb', 'Mar', 'April', 'May', 'jun'],
          datasets: [{
              label: '2019 Payment',
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [

                  'rgba(255, 99, 132, 0.7)',
                  'rgba(54, 162, 235, 0.7)',
                  'rgba(255, 206, 86, 0.7)',
                  'rgba(75, 192, 192, 0.7)',
                  'rgba(153, 102, 255, 0.7)',
                  'rgba(255, 159, 64, 0.7)'
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true
                  }
              }]
          }
      }
  });



//PieChart (Persontage of customer Late payment and completion )
  
////Switch data with select option
function switchPieData(){
  var e = document.getElementById("pieOption");
  var optionValue = e.options[e.selectedIndex].value;

  if (optionValue == "jan"){
    jan(); 
  }else if(optionValue == "feb"){
    feb();
  }else if (optionValue == "mar"){
    mar();
  }
}

function jan(){
  pieChart.data.datasets[0].data[0]=0.8;
  pieChart.data.datasets[0].data[1]=0.1;
  pieChart.update();
}

function mar(){
  pieChart.data.datasets[0].data[0]=0.6;
  pieChart.data.datasets[0].data[1]=0.4;
  pieChart.update();
}

function feb(){
  pieChart.data.datasets[0].data[0]=0.3;
  pieChart.data.datasets[0].data[1]=0.7;
  pieChart.update();
}
//end select option

//Piechart script
  var pie = document.getElementById('pieChart').getContext('2d');
  var pieChart = new Chart(pie, {
      type: 'pie',
      data: {
          labels: ['Completed', 'Late',],
          datasets: [{
              label: 'Payment',
              data: [0.8, 0.2],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.7)',
                  'rgba(54, 162, 235, 0.7)'
               
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)'
                  
              ],
              borderWidth: 0.5
          }]
      }
  });



  ////Switch data with select option
function clientLate(){
  var num = document.getElementById('numClientLate').value;
  document.getElementById('num').innerHTML=(num);
}
  </script>
  <script>
    $(document).ready(function(){
      $('#dashboard').click(function(
        $('a#dashboard p span#dash').html('<span class="material-icons ml-5" id="dash">arrow_drop_up</span>');
      ));
    });
  </script>
</html>