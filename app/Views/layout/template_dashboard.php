<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title; ?></title>

    <!-- Bootstrap -->
    <link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/assets/build/css/custom.min.css" rel="stylesheet">

      <style>
        .btn-add {
         
          bottom: 35px;
          right: 35px;
          background-color: #944E63;
          border-radius: 100%;
        }

        #body {
          font-family: Arial, sans-serif;
          background-color: #f7f7f7;
          margin: 0;
          padding: 0;
        }
        /* .container {
          max-width: 400px;
          margin: 50px auto;
          padding: 20px;
          background-color: #fff;
          border-radius: 8px;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        } */
        h2 {
          text-align: center;
          color: #333;
        }
        form {
          display: flex;
          flex-direction: column;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
          padding: 10px;
          margin-bottom: 15px;
          border: 1px solid #ddd;
          border-radius: 4px;
        }
        button {
          padding: 10px;
          background-color: #5cb85c;
          color: white;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }
        button:hover {
          background-color: #4cae4c;
        }

      </style>
  </head>

  <body class="nav-md">

  <div class="container body bg-dasboard">
      <div class="main_container bg-dasboard">
        <div class="col-md-3 left_col bg-dasboard" >
          <div class="left_col scroll-view bg-dasboard" >
            <div class="navbar nav_title bg-dasboard" style="border: 0;" >
              <a href="/" class="site_title bg-dasboard" ><img class="logo-main" src="/assets/images/logo.png" width="200" height="40" alt="Logo" /></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="/assets/images/icon.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2>User</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu" >
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="/dashboard/"><span class="m-3"> MENU DASHBOARD </span> </a> </li>
                  <li><a href="/dashboard/produk"><i class="fa-solid fa-clipboard-list"></i><span class="m-3"> Produk </span> </a> </li>
                  <li><a href="/dashboard/transaksi"><i class="fa-solid fa-credit-card"></i> <span class="m-3"> Transaksi </span> </a> </li>
                  <li><a href="/dashboard/customer"><i class="fa-solid fa-people-line"></i> <span class="m-3"> Customer </span> </a> </li>
                  <li><a href="/dashboard/reseller"><i class="fa-solid fa-people-arrows"></i><span class="m-3"> Reseller </span> </a> </li>
                  <li><a href="/dashboard/order"><i class="fa-solid fa-cart-shopping"></i> <span class="m-3"> Order </span> </a> </li>
                  <li><a href="/dashboard/laporan"><i class="fa-solid fa-chart-line"></i> <span class="m-3"> Laporan </span> </a> </li>
                  <li><a href="/dashboard/keuangan"><i class="fa-solid fa-money-check-dollar"></i> <span class="m-3"> Keuangan </span> </a> </li>
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small" style="background-color: #944E63;">
              <a data-toggle="tooltip" data-placement="top" title="Settings" style="background-color: #944E63;">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen" style="background-color: #944E63;">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock" style="background-color: #944E63;">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html" style="background-color: #944E63;">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="/assets/images/icon.png" alt="">User
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                        <a class="dropdown-item"  href="javascript:;">
                          <span class="badge bg-red pull-right"></span>
                          <span>Settings</span>
                        </a>
                    <a class="dropdown-item"  href="javascript:;">Help</a>
                      <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
  
                  <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-green"></span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="message">
                            Tidak ada pesan tersedia
                          </span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- head page content -->
        <div class="position-relative right_col " role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> <?= $subtitle; ?> </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Penelusuran...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Cari!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>


  <?= $this->renderSection('dashboard'); ?>


  
        
      </div>
    </div>

  
    <!-- jQuery -->
    <script src="/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- FastClick -->
    <script src="/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/vendors/nprogress/nprogress.js"></script>

    <!-- morris.js -->
    <script src="/vendors/raphael/raphael.min.js"></script>
    <script src="/vendors/morris.js/morris.min.js"></script>

    <!-- ECharts -->
    <script src="/vendors/echarts/dist/echarts.min.js"></script>
    <script src="/vendors/echarts/map/js/world.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/assets/build/js/custom.min.js"></script>

    <!-- scripts vanila -->
    <script src="/assets/main.js"></script>
  </body>
</html>