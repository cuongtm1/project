<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
  <!-- Twitter meta-->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:site" content="@pratikborsadiya">
  <meta property="twitter:creator" content="@pratikborsadiya">
  <!-- Open Graph Meta-->
  <base href="{{ BASE_URL }}">
  <link rel="stylesheet" type="text/css" href="public/css/style.css">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Vali Admin">
  <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
  <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
  <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
  <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
  <title>Vali Admin - Free Bootstrap 4 Admin Template</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="public/css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="public/js/jquery-3.2.1.min.js"></script>
</head>
<body class="app sidebar-mini rtl">
  <!-- Navbar-->
  <header class="app-header"><a class="app-header__logo" href="index.html">Vali</a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
      <li class="app-search">
        <input class="app-search__input" type="search" placeholder="Search">
        <button class="app-search__button"><i class="fa fa-search"></i></button>
      </li>
      <!--Notification Menu-->
      <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
        <ul class="app-notification dropdown-menu dropdown-menu-right">
          <li class="app-notification__title">You have 4 new notifications.</li>
          <div class="app-notification__content">
            <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
              <div>
                <p class="app-notification__message">Lisa sent you a mail</p>
                <p class="app-notification__meta">2 min ago</p>
              </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                <div>
                  <p class="app-notification__message">Mail server not working</p>
                  <p class="app-notification__meta">5 min ago</p>
                </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
                  <div class="app-notification__content">
                    <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                      <div>
                        <p class="app-notification__message">Lisa sent you a mail</p>
                        <p class="app-notification__meta">2 min ago</p>
                      </div></a></li>
                      <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                        <div>
                          <p class="app-notification__message">Mail server not working</p>
                          <p class="app-notification__meta">5 min ago</p>
                        </div></a></li>
                        <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                          <div>
                            <p class="app-notification__message">Transaction complete</p>
                            <p class="app-notification__meta">2 days ago</p>
                          </div></a></li>
                        </div>
                      </div>
                      <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
                    </ul>
                  </li>
                  <!-- User Menu-->
                  <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
                    <ul class="dropdown-menu settings-menu dropdown-menu-right">
                      <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                      <li><a class="dropdown-item" href="logout"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                    </ul>
                  </li>
                </ul>
              </header>
              <!-- Sidebar menu-->
              <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
              <aside class="app-sidebar">
                <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
                  <div>
                    <p class="app-sidebar__user-name">Nhóm 2</p>
                    {{-- <p class="app-sidebar__user-designation">Frontend Developer</p> --}}
                  </div>
                </div>
                <ul class="app-menu">
                  <li ><a class="app-menu__item @yield('trangchu')" href="admin"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label">Trang chủ</span></a></li>
                  <li class="treeview @yield('info')"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Quản trị thông tin</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                      <li><a class="treeview-item" href="admin/phu-huynh/thong-tin"><i class="icon fa fa-circle-o"></i>Phụ huynh</a></li>
                       <li><a class="treeview-item" href="admin/Childrens"><i class="icon fa fa-circle-o"></i>Học sinh</a></li>
                       <li><a class="treeview-item" href="admin/class"><i class="icon fa fa-circle-o"></i>Lớp Học</a></li>
                    </ul>
                  </li>
                  <li class="treeview @yield('news')"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Quản trị tin tức</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                      <li><a class="treeview-item" href="admin/tin-tuc/danh-sach"><i class="icon fa fa-circle-o"></i>Danh sách tin tức</a></li>
                       <li><a class="treeview-item" href="admin/category"><i class="icon fa fa-circle-o"></i>Danh mục</a></li>
                    </ul>
                  </li>


                  
                   <li ><a class="app-menu__item @yield('contact')" href="admin/lien-he/"><i class="app-menu__icon fa fa-github"></i><span class="app-menu__label">Danh sách liên hệ</span></a></li>
                  <li ><a class="app-menu__item @yield('acti')" href="admin/activate"><i class="app-menu__icon fa fa-gamepad"></i><span class="app-menu__label">Quản trị hoạt động</span></a></li>
                  <li ><a class="app-menu__item @yield('image')" href="admin/image/"><i class="app-menu__icon fa fa-image"></i><span class="app-menu__label">images</span></a></li>
                  <li ><a class="app-menu__item @yield('setting')" href="admin/setting"><i class="app-menu__icon fa fa-cog fa-lg"></i><span class="app-menu__label">Setting</span></a></li>

                </ul>
              </aside>
              <script src="public/js/jquery-3.2.1.min.js"></script>
              @yield('content')
              <!-- Essential javascripts for application to work-->
              <script src="public/js/jquery-3.2.1.min.js"></script>
              <script src="public/js/popper.min.js"></script>
              <script src="public/js/bootstrap.min.js"></script>
              <script src="public/js/main.js"></script>
              <!-- The javascript plugin to display page loading on top-->
              <script src="public/js/plugins/pace.min.js"></script>
              <!-- Page specific javascripts-->
              <script type="text/javascript" src="public/js/plugins/chart.js"></script>
              <script type="text/javascript">
                var data = {
                 labels: ["January", "February", "March", "April", "May"],
                 datasets: [
                 {
                   label: "My First dataset",
                   fillColor: "rgba(220,220,220,0.2)",
                   strokeColor: "rgba(220,220,220,1)",
                   pointColor: "rgba(220,220,220,1)",
                   pointStrokeColor: "#fff",
                   pointHighlightFill: "#fff",
                   pointHighlightStroke: "rgba(220,220,220,1)",
                   data: [65, 59, 80, 81, 56]
                 },
                 {
                   label: "My Second dataset",
                   fillColor: "rgba(151,187,205,0.2)",
                   strokeColor: "rgba(151,187,205,1)",
                   pointColor: "rgba(151,187,205,1)",
                   pointStrokeColor: "#fff",
                   pointHighlightFill: "#fff",
                   pointHighlightStroke: "rgba(151,187,205,1)",
                   data: [28, 48, 40, 19, 86]
                 }
                 ]
               };
               var pdata = [
               {
                value: 300,
                color: "#46BFBD",
                highlight: "#5AD3D1",
                label: "Complete"
              },
              {
                value: 50,
                color:"#F7464A",
                highlight: "#FF5A5E",
                label: "In-Progress"
              }
              ]

              var ctxl = $("#lineChartDemo").get(0).getContext("2d");
              var lineChart = new Chart(ctxl).Line(data);

              var ctxp = $("#pieChartDemo").get(0).getContext("2d");
              var pieChart = new Chart(ctxp).Pie(pdata);
            </script>
            <!-- Google analytics script-->
            <script type="text/javascript">
              if(document.location.hostname == 'pratikborsadiya.in') {
               (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
               })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
               ga('create', 'UA-72504830-1', 'auto');
               ga('send', 'pageview');
             }
           </script>
           <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js" type="text/javascript" charset="utf-8" async defer></script>
           <script src="public/js/validate.js" type="text/javascript" charset="utf-8" async defer></script>
         </body>
         </html>