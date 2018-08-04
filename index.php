<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Панель управління | Нова пошта</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <link rel="stylesheet" href="assets/css/jm.spinner.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

  
  
<style type="text/css">
input {
  height: 35px !important;
}

.col-md-4 {
    width: 33.33333333% !important;
    float: left !important;
}
ul.ui-autocomplete {
    z-index: 99999;
}
.ui-autocomplete-loading {
    background:url('assets/img/loading-indicator.gif') no-repeat right center
}
.ui-menu-item {
  /*height: 45px;*/
  border: 1px solid black;
}
@media (min-width: 768px) {
   .modal-dialog {
    width: auto !important;
} 
}
.modal-body {
    height: 600px;
    padding: 5px !important;
}
.modal-footer {
    text-align: center !important;
}
</style>
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
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>АДС</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Автодімсервіс</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p> -->
          <!-- Status -->
          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> -->

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
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">МЕНЮ</li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>НОВА ПОШТА</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="np_new_en.php">Нова накладна</a></li>
            <li><a href="np_list.php">Список накладних</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>АВТОБУСИ</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="bus_new_label.php">Нова етикетка</a></li>
          </ul>
        </li>
        <!-- Optionally, you can add icons to the links -->
        <!-- <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li> -->
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Створити етикетку
        <!-- <small>Optional description</small> -->
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <div id="result">
          <div class="row">
              <div id="result-loader" class="col-md-2 col-md-offset-3" style="position: absolute; top: 10%; z-index: 9999;"></div>
          </div>
        <div id="result-ok" class="alert alert-success fade in alert-dismissible" style="display: none; margin-top:20px;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
            <p></p>
      </div>
      <div id="status-result-error" class="alert alert-danger fade in alert-dismissible" style="display: none; margin-top:20px;"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Помилка!</strong><br><span class="save_ttn_error"></span><br></div>
        </div>

        <label>Клієнт</label>
        <input type="text" name="client" id="client" placeholder="Почніть вводити ім'я клієнта" style="width: 250px; height: 50px !important; margin-left: 32px">
        <br><br>
         <label>Місто</label>
        <input type="text" name="city" id="city" placeholder="Місто" style="width: 250px; height: 50px !important; margin-left: 40px">
        <br><br>
         <label>К-сть місць</label>
        <input type="text" name="seats" id="seats" value="1" style="width: 250px; height: 50px !important; margin-left: 3px">
        <br><br>
        <a href="javascript:void(0)" id="print_bus_label" class="btn btn-primary"><i class="fa fa-print"></i> Роздрукувати</a>

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
    <strong>Copyright &copy; 2018 <a href="#">Автодімсервіс</a></strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<!-- <script src="bower_components/jquery/dist/jquery.min.js"></script> -->
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
<script src="assets/js/jm.spinner.js"></script>

<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">

$(function() {
    $( "#client" ).autocomplete({
        source: 'bus_label_user.php',
        select: itemSelect,
        change: itemChange,
        response : response
    });
    function itemSelect(event, ui) {
        $('#city').val(ui.item.city);
    }
    function itemChange(event, ui) {
        
    }
    function response(event, ui) {
      
    }        
});

$('#print_bus_label').on('click', function() {
  var client = $('#client').val();
  var city = $('#city').val();
  var seats = $('#seats').val();
  seats = parseInt(seats);
  if (client == '') {
    alert('Спочатку оберіть клієнта');
    return false;
  }
  if (city == '') {
    alert('Поле "Місто" повинне бути заповнене');
    return false;
  }
  var correct = confirm('Ви дійсно бажаєте роздрукувати етикетку?');
    if (!correct) {
        return false;
    }
    else {
        $.ajax({
            type: "POST",
            url: "print_exp_deliv.php",
            data: ({ client : client, city : city, seats : seats }),
            beforeSend: function() {
                $('#result-loader').jmspinner();
            },
            success: function(data) {
                $('#result-loader').jmspinner(false);
                $('#result-ok').css('display', 'block').find('p').empty().append(data);
                setTimeout(function(){
                  window.location.href = "bus_new_label.php";
                }, 2000);
            }
        });
    }
  
});



</script>
</body>
</html>