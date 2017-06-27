<!DOCTYPE html>
<html>
<head>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo e(config('app.name')); ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/fontawesome/css/font-awesome.css')); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('dist/css/AdminLTE.min.css')); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo e(asset('dist/css/skins/_all-skins.min.css')); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/iCheck/flat/blue.css')); ?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/morris/morris.css')); ?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css')); ?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/datepicker/datepicker3.css')); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/daterangepicker/daterangepicker.css')); ?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')); ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-green sidebar-mini">
<?php if(Auth::guest()): ?>
<li><a href="<?php echo e(route('login')); ?>">Login</a></li>
<?php else: ?>
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b><?php echo e(config('app.name')); ?></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><?php echo e(config('app.name')); ?></b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
     
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-info">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 1 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo e(asset('dist/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 1 notification</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 1 task</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" >
              <img src="<?php echo e(asset('dist/img/user2-160x160.jpg')); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->last_name); ?></span>
            </a>
            
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i></a>
		<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                	<?php echo e(csrf_field()); ?>

                </form>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
	<li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-globe"></i> <span>OGÓLNE</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
	<li><a href="#"><i class="fa fa-envelope-o"></i> @mail</a></li>
	<li><a href="#"><i class="fa fa-commenting-o"></i> @SMS</a></li>
	<li><a href="#"><i class="fa fa-file-text-o"></i> Dokumenty</a></li>
	<li><a href="#"><i class="fa fa-calendar"></i> Kalendarz</a></li>
	<li><a href="#"><i class="fa fa-map-o"></i> Mapa</a></li>
	</ul></li>
	<li class="treeview">
          <a href="#">
            <i class="fa fa-id-card" aria-hidden="true"></i> <span>EWIDENCJA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
	<li><a href="#"><i class="fa fa-users"></i> Lista myśliwych</a></li>
	<li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> Lista stażystów</a></li>
	<li><a href="#"><i class="fa fa-user"></i> Psy</a></li>
	<li><a href="#"><i class="fa fa-user"></i> Zarząd</a></li>
	</ul></li>
	<li class="treeview">
          <a href="#">
            <i class="fa fa-tree"></i> <span>GOSPODARKA ŁOWIECKA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
	<li><a href="#"><i class="fa fa-list-alt"></i> Plan łowiecki</a></li>
	<li><a href="#"><i class="fa fa-list"></i> Odstrzały</a></li>
	<li><a href="#"><i class="fa fa-binoculars"></i> Zwierzyna</a></li>
	<li><a href="#"><i class="fa fa-bookmark"></i> Urządzenia</a></li>
	<li><a href="#"><i class="fa fa-briefcase"></i> Prace</a></li>
	<li><a href="#"><i class="fa fa-tasks"></i> Zadania</a></li>
	<li><a href="#"><i class="fa fa-users"></i> Polowania zbiorowe</a></li>
	<li><a href="#"><i class="fa fa-road"></i> Upadki</a></li>
	<li><a href="#"><i class="fa fa-window-close"></i> Szkody </a></li>
	</ul></li>
	<li class="treeview">
          <a href="#">
            <i class="fa fa-usd"></i> <span>FINANSE</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
	<li><a href="#"><i class="fa fa-plus"></i> Przychód </a></li>
	<li><a href="#"><i class="fa fa-minus"></i> Rozchód </a></li>
	<li><a href="#"><i class="fa fa-usd"></i> Ceny tuszy </a></li>
	</ul></li>
	<li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i> <span>USTAWIENIA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
	<li><a href="/users"><i class="fa fa-user-o"></i> Users</a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>asdf</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/users"><i class="fa fa-circle-o"></i> Users:index</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
	</ul></li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

		<?php echo $__env->yieldContent('content'); ?>


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.0.2
    </div>
    <strong>Copyright &copy; 2015-<?php echo date('Y'); ?> <a href="http://acomp24.pl">@Comp</a>.</strong> All rights
    reserved.
  </footer>


<!-- jQuery 2.2.3 -->
<script src="<?php echo e(asset('plugins/jQuery/jquery-2.2.3.min.js')); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo e(asset('bootstrap/js/bootstrap.min.js')); ?>"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo e(asset('plugins/morris/morris.min.js')); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo e(asset('plugins/sparkline/jquery.sparkline.min.js')); ?>"></script>
<!-- jvectormap -->
<script src="<?php echo e(asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo e(asset('plugins/knob/jquery.knob.js')); ?>"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo e(asset('plugins/daterangepicker/daterangepicker.js')); ?>"></script>
<!-- datepicker -->
<script src="<?php echo e(asset('plugins/datepicker/bootstrap-datepicker.js')); ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo e(asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')); ?>"></script>
<!-- Slimscroll -->
<script src="<?php echo e(asset('plugins/slimScroll/jquery.slimscroll.min.js')); ?>"></script>
<!-- FastClick -->
<script src="<?php echo e(asset('plugins/fastclick/fastclick.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('dist/js/app.min.js')); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo e(asset('dist/js/pages/dashboard.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('dist/js/demo.js')); ?>"></script>
</body>
</html>
<?php endif; ?>