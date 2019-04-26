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
  {{-- link and script datepicker --}}
  
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
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('demo/demo.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
  <div class="wrapper">
    <div class="sidebar" data-color="primary" data-background-color="black" data-image="{{asset('images/sidebar-3.jpg')}}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger "
        
        Tip 2: you can also add an image using data-image tag
      -->
      <div class="logo bg-teal">
        <a href="{{url('/')}}" class="simple-text logo-normal">
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
                      <span class="material-icons ml-5" id="dashUp">arrow_drop_up</span>
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
                <span class="material-icons ml-4" id="manageUp">arrow_drop_up</span>
              </p>
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
              <li class="list-group-item collapsed">
                <a href="{{url('/contract')}}">
                  <span class="text-white">
                    <i class="material-icons text-white">ballot</i>
                    Contract Type
                      </span>
                    </a>
                  </li>
                <li class="list-group-item collapsed">
                  <a href="{{url('/contractlist')}}">
                    <span class="text-white">
                      <i class="material-icons text-white">description</i>
                      Contract List
                    </span>
                  </a>
                </li>
                <li class="list-group-item collapsed">
                  <a href="{{url('/client')}}">
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
      <nav class="navbar navbar-expand-lg bg-info navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid ">  
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                  <i class="material-icons">settings</i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item nav-link" href="{{url('users/profile')}}">
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
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-primary active" data-color="primary"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="{{asset('images/sidebar-4.jpg')}}" alt="">
          </a>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/material-dashboard-dark" target="_blank" class="btn btn-primary btn-block">Free Download</a>
        </li>
       
        <li class="button-container">
          <a href="https://demos.creative-tim.com/material-dashboard-dark/docs/2.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
            View Documentation
          </a>
        </li>
        <li class="button-container github-star">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard/tree/dark-edition" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
        </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('js/core/jquery.min.js')}}"></script>
  <script src="{{asset('js/core/popper.min.js')}}"></script>
  <script src="{{asset('js/core/bootstrap-material-design.min.js')}}"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="{{asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="{{asset('js/plugins/chartist.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('js/material-dashboard.js?v=2.1.0')}}"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('demo/demo.js')}}"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });
        
        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');
          
          $(this).siblings().removeClass('active');
          $(this).addClass('active');
          
          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }
          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }
          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });
        
        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');
          
          var new_color = $(this).data('background-color');
          
          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });
        
        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');
          
          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');
          var new_image = $(this).find("img").attr('src');
          
          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }
          
          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }
          
          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
            
            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }
          
          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });
        
        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');
          
          $input = $(this);
          
          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }
            
            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }
            
            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }
            
            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }
            
            background_image = false;
          }
        });
        
        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');
          
          $input = $(this);
          
          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;
            
            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();
            
          } else {
            
            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');
              
              md.misc.sidebar_mini_active = true;
            }, 300);
          }
          
          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
          
        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      md.initDashboardPageCharts();
      $('#example').DataTable();                
    });
    
    $(document).ready(function() {
      md.initDashboardPageCharts();
      $('#myTable').DataTable();                
    });
    $(document).ready(function() {
      md.initDashboardPageCharts();
      $('#myTable3').DataTable();                
    });
    $(document).ready(function() {
      md.initDashboardPageCharts();
      $('#myTable4').DataTable();                
    });
    $(document).ready(function() {
      md.initDashboardPageCharts();
      $('#myTable5').DataTable();                
    });
    $(document).ready(function() {
      md.initDashboardPageCharts();
      $('#contractType').DataTable();  
      
    });

</script>
{{-- Link datepicker --}}
 <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
  
   $(document).ready(function() {

$(".txtDate").datepicker({
    showOn: 'button',
    buttonText: 'Show Date',
    buttonImageOnly: true,
    buttonImage: '../public/images/calendar.png',
    dateFormat: 'mm/dd/yy',
    
     constrainInput: true
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
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [{
              label: '# of Votes',
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
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
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [{
              label: '# of Votes',
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
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



//PieChart
  var pie = document.getElementById('pieChart').getContext('2d');
  var pieChart = new Chart(pie, {
      type: 'pie',
      data: {
          labels: ['Red', 'Blue', 'Yellow'],
          datasets: [{
              label: '# of Votes',
              data: [12, 19, 3],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)'
                  
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)'
                  
              ],
              borderWidth: 0.5
          }]
      }
  });
  </script>
</html>