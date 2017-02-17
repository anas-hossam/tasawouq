<?php

@session_start();
require_once 'constants.php';
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Tasawouq</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=PATH?>adminLTE/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=PATH?>adminLTE/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="<?=PATH?>adminLTE/dist/css/skins/skin-blue.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?=PATH?>adminLTE/plugins/datatables/dataTables.bootstrap.css">
  <!--{{&#45;&#45;jquery library&#45;&#45;}}-->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?=PATH?>site" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>NA</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>TASAWOUQ</b>Web</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->


          <!--@else-->
          <!-- User Account Menu -->
          <li class="dropdown user user-menu" id="usermenu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?=PATH?>adminLTE/dist/img/avatar5.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><!--{{ Auth::user()->name }}--></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?=PATH?>adminLTE/dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  Welcome <?php
                    if(isset($_SESSION['logged']))
                    echo $_SESSION['logged']['fname'];
                    ?>
                </p>
              </li>

              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?=PATH?>logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!--@endif-->
          <!-- Control Sidebar Toggle Button -->
          <!--{{&#45;&#45;<li>&#45;&#45;}}-->
            <!--{{&#45;&#45;<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>&#45;&#45;}}-->
          <!--{{&#45;&#45;</li>&#45;&#45;}}-->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <!--@if(auth()->user()))-->
  <aside class="main-sidebar" id="mainsidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->

      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=PATH?>adminLTE/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>
              <?php
              if(isset($_SESSION['logged']))
              echo $_SESSION['logged']['fname'];
              ?>
          </p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>


      <!-- search form (Optional) -->
     <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->

      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="<?=PATH?>users"><i class="fa fa-users"></i> <span>Users</span></a></li>
        <li><a href="<?=PATH?>products"><i class="fa fa-product-hunt"></i> <span>Products</span></a></li>
        <li class="treeview">
          <a href="<?=PATH?>categories"><i class="fa fa-list"></i> <span>Categories</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="<?=PATH?>categories">Categories</a></li>
            <li><a href="<?=PATH?>sub_categories">Sub Categories</a></li>
          </ul>
        </li>
        <li><a href="<?=PATH?>orders"><i class="fa fa-shopping-cart"></i> <span>Shopping Lists</span></a></li>
        <li><a href="<?=PATH?>settings"><i class="fa fa-gears"></i> <span>Settings</span></a></li>
        <!--<li><a href="{{url('sectest')}}"><i class="fa fa-google"></i> <span>Testimonial</span></a></li>-->
        <li><a href="<?=PATH?>contacts"><i class="fa fa-comments"></i> <span>Contacts</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  <!--@endif-->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="main" style="position: relative;">
    <!--@yield('content')-->
    <!-- Content Header (Page header) -->
    <!-- Main content -->

    <section class="content">

      <!-- Your Page Content Here -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?=PATH?>adminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=PATH?>adminLTE/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=PATH?>adminLTE/dist/js/app.min.js"></script>
<!-- DataTables -->
<script src="<?=PATH?>adminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=PATH?>adminLTE/plugins/datatables/dataTables.bootstrap.min.js"></script>


</body>
</html>
