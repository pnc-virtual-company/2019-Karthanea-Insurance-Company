<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('images/icon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
      {{ config('app.name', 'Skeleton') }}
  </title>

  
  <!-- pei chart link -->
  <script src="https://cdnjs.com/libraries/Chart.js"></script>

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
  
  <!-- CSS Files -->
  <link href="{{asset('css/material-dashboard.css?v=2.1.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('demo/demo.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
{{-- class="dark-edition" --}}
<body>
  <div class="wrapper">
    <div class="sidebar" data-color="azure" data-background-color="black" data-image="{{asset('images/sidebar-4.jpg')}}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger | primary |"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo bg-teal">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          <img src="{{asset('images/logo-1.png')}}" alt="brand logo">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active">
                <a href="#submenu" data-toggle="collapse" aria-expanded="false" class="nav-link">
                    <i class="material-icons">color_lens</i>
                    <p>Dashboard</p>
                  </a>
                <ul class="collapse list-unstyled" id="submenu">
                    <li class="list-group-item collapsed">
                      <a href="{{url('/client')}}">
                          <p>
                              <i class="material-icons text-info">format_list_numbered</i>
                            Clients List
                          </p>
                        </a>
                    </li>
                    <li class="list-group-item collapsed">
                      <a href="{{url('/chart')}}">
                          <p>
                            <i class="material-icons text-info">pie_chart</i>
                            Occupency
                          </p>
                        </a>
                    </li>
                </ul>
            </li>
          <li class="nav-item ">
            <a class="nav-link" href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
              <i class="material-icons">work</i>
              <p>Managements</p>
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li class="list-group-item collapsed">
                  <a href="{{url('/contract')}}">
                      <p>
                          <i class="material-icons text-info">ballot</i>
                        Contract Type
                      </p>
                    </a>
                </li>
                <li class="list-group-item collapsed">
                  <a href="{{url('/contractlist')}}">
                      <p>
                        <i class="material-icons text-info">description</i>
                        Contract List
                      </p>
                    </a>
                </li>
                <li class="list-group-item collapsed">
                    <a href="{{url('/client')}}">
                      <p>
                        <i class="material-icons text-info">people</i>
                        Clients
                      </p>
                    </a>
                </li>
                <li class="list-group-item collapsed">
                    <a href="{{url('/payment')}}">
                      <p>
                        <i class="material-icons text-info">monetization_on</i>
                        Payments
                      </p>
                    </a>
                </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('/call')}}">
              <i class="material-icons">settings_phone</i>
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
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">settings</i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <p>
                      <i class="material-icons">account_circle</i>
                      Profile
                    </p>
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <p>
                      <i class="material-icons">logout</i>
                      Logout
                    </p>
                  </a>
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
              <span class="badge filter badge-primary active" data-color="azure"></span>
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
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
      $('#example').DataTable();
                        
    });
</script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script>
      $(document).ready(function() {
          $('#myTable').DataTable({
            "searching": false,
            "lengthChange": false

          });
      } );
      $(document).ready(function() {
          $('#myTables').DataTable({
            "lengthChange": false,
            "paging": false,
            "bInfo" : false
          });
      } );
      $(document).ready(function() {
          $('#myTable1').DataTable({
            "sDom": "lfrti",
            "bInfo" : false
          });
      } );
      $(document).ready(function() {
          $('#myTable2').DataTable({
            "searching": false,
            "lengthChange": false
          });
      } );
  </script>
</body>
</html>