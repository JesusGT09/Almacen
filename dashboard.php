<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gestor | Almacen</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.css">
  <link rel="icon"  href="dist/img/lavanderia.png" type="image/png" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<link rel="stylesheet" href="dist/css/sweetalert.css">
	<script src="dist/js/sweetalert-dev.js"></script>
  <link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style>
    #modal-default{
      background-color: rgba(0,0,0, 0.5) !important;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="javascript:void(0);" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>G</b>A</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>GESTOR </b>ALMACEN</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="javascript:void(0)" id="salir">
              <i class="fa fa-power-off"></i>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <!--<div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>-->
      </div>

    <!--  <form action="#" method="get" class="sidebar-form">
              <div class="input-group">
                <input type="text" name="q" class="" placeholder="Buscar...">
                <span class="input-group-btn">
                      <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                        <i class="fa fa-search"></i>
                      </button>
                    </span>
              </div>
            </form>-->

      <div class="product-img sidebar-form" style="text-align: center;">
        <img src="dist/img/ibytes.png" alt="Product Image" style="height:110px;margin: 10px;">
      </div>
      <!--
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"> GENERAL</li>

       <li class="treeview menu-open resumen">
         <a href="#" id="resumen">
           <i class="fa fa-object-group" aria-hidden="true"></i>
           <span>Resumen</span>
         </a>
       </li>


     <li class="treeview empleado">
       <a href="#" id="empleado">
         <i class="fa fa-users" aria-hidden="true"></i>
         <span>Personal</span>
       </a>
     </li>

       <li class="treeview categoria">
         <a href="#" id="categoria">
             <i class="fa fa-th" aria-hidden="true"></i>
           <span>Categoria</span>
         </a>
       </li>



       <li class="treeview producto">
         <a href="#" id="producto">
             <i class="fa fa-tags" aria-hidden="true"></i>
             <span>Productos</span>
         </a>
       </li>

       <li class="treeview  almacen">
         <a href="#" id="tipo">
          <i class="fa fa-industry" aria-hidden="true"></i>
           <span>Tipo (Entrada/Salida)</span>
         </a>
       </li>

       <li class="treeview  entrada">
         <a href="#" id="entrada">
           <i class="fa fa-indent" aria-hidden="true"></i>
           <span>Entrada</span>
         </a>
       </li>

       <li class="treeview salida">
         <a href="#" id="salida">
        <i class="fa fa-outdent" aria-hidden="true"></i>
           <span>Salidas</span>
         </a>
       </li>



       <li class="header"></li>

     </ul>
    </section>
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="contenido-main" style="min-height:800px;">
  </div>
  <!-- /.content-wrapper -->




  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>DogmaSoft &copy; 2020 <a href="https://adminlte.io"></a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">

  <!--  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>-->

    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>

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

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
    </div>
  </aside>
  <div class="control-sidebar-bg"></div>
</div>



<script src="bower_components/jquery/dist/jquery.min.js"></script>
<link rel="stylesheet" href="dist/css/lc_switch.css">
<script src="dist/js/lc_switch.js"></script>
<link rel="stylesheet" href="dist/css/wickedpicker.min.css">
<script src="dist/js/wickedpicker.min.js"></script>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="bower_components/chart.js/Chart.js"></script>
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<script src="bower_components/moment/moment.js"></script>
<script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="dist/js/Ajax.js"></script>
<script src="dist/js/funcionesAjax.js"></script>
<script src="bower_components/Flot/jquery.flot.js"></script>
<script src="bower_components/Flot/jquery.flot.resize.js"></script>
<script src="bower_components/Flot/jquery.flot.pie.js"></script>
<script src="bower_components/Flot/jquery.flot.categories.js"></script>
<script src="plugins/jquery-validation-1.14.0/dist/jquery.validate.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/main.js"></script>
<script src="bower_components/ckeditor/ckeditor.js"></script>
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-json/2.4.0/jquery.json.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.2.17/jquery.timepicker.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/rainbow/1.2.0/js/rainbow.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/rainbow/1.2.0/js/language/generic.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/rainbow/1.2.0/js/language/javascript.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/rainbow/1.2.0/js/language/html.js" type="text/javascript"></script>
<script type="text/javascript" src="dist/js/jquery.businessHours.min.js"></script>
<link rel="stylesheet" type="text/css" href="dist/css/jquery.businessHours.css"/>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/github-fork-ribbon-css/0.1.0/gh-fork-ribbon.min.css">

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>




<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script type="text/javascript">
  funcionajax("pages/resumen/index.php","contenido-main","");
  $('.resumen').addClass('active');

  $("#salir").click(function(){
    swal({
         title: "Cerrar Sesion",
         text: "Realmente deseas salir de la sesion actual ?",
         type: "warning",
         showCancelButton: true,
         confirmButtonColor: "#ff9932",
         confirmButtonText: "Aceptar",
         cancelButtonText: "Cancelar",
         closeOnConfirm: false,
         closeOnCancel: false
        },
        function(isConfirm){
         if (isConfirm) {
          // swal("Deleted!", "Your imaginary file has been deleted.", "success");
            window.location="https://concursogtd.online/index.php";
         } else {
          // swal("Cancelled", "Your imaginary file is safe :)", "error");
          swal.close();
         }
        });
  });


//  home pos empleado calendario categoria producto entrada servicio salida

  $("#resumen").click(function(){
    $('.treeview').removeClass('active');
    $('.resumen').addClass('active');
    funcionajax("pages/resumen/index.php","contenido-main","");
  });

  $("#categoria").click(function(){
    $('.treeview').removeClass('active');
    $('.categoria').addClass('active');
     funcionajax("pages/categoria/index.php","contenido-main","");
  });



  $("#producto").click(function(){
    $('.treeview').removeClass('active');
    $('.producto').addClass('active');
     funcionajax("pages/producto/index.php","contenido-main","");
  });


  $("#entrada").click(function(){
    $('.treeview').removeClass('active');
    $('.entrada').addClass('active');
     funcionajax("pages/entrada/index.php","contenido-main","");
  });


  $("#tipo").click(function(){
    $('.treeview').removeClass('active');
    $('.tipo').addClass('active');
     funcionajax("pages/tipo/index.php","contenido-main","");
  });




  $("#empleado").click(function(){
    $('.treeview').removeClass('active');
    $('.empleado').addClass('active');
    funcionajax("pages/empleado/index.php","contenido-main","");
  });

  $("#salida").click(function(){
    $('.treeview').removeClass('active');
    $('.salida').addClass('active');
    funcionajax("pages/salida/index.php","contenido-main","");
  });

  $("#almacen").click(function(){
    $('.treeview').removeClass('active');
    $('.almacen').addClass('active');
     funcionajax("pages/almacen/index.php","contenido-main","");
  });
</script>




<div class="modal fade centered-modal" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">



            <!-- DIRECT CHAT -->
            <div class="box-warning direct-chat direct-chat-warning">
              <div class="box-header with-border">
                <h3 class="box-title">Direct Chat</h3>

                <div class="box-tools pull-right">
                  <span data-toggle="tooltip" title="" class="badge bg-yellow" data-original-title="3 New Messages">3</span>
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="" data-widget="chat-pane-toggle" data-original-title="Contacts">
                    <i class="fa fa-comments"></i></button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                  <!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                    <div class="direct-chat-info clearfix">
                      <span class="direct-chat-name pull-left">Alexander Pierce</span>
                      <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                    </div>
                    <!-- /.direct-chat-info -->
                    <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      Is this template really for free? That's unbelievable!
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                  <!-- Message to the right -->
                  <div class="direct-chat-msg right">
                    <div class="direct-chat-info clearfix">
                      <span class="direct-chat-name pull-right">Sarah Bullock</span>
                      <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                    </div>
                    <!-- /.direct-chat-info -->
                    <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      You better believe it!
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                  <!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                    <div class="direct-chat-info clearfix">
                      <span class="direct-chat-name pull-left">Alexander Pierce</span>
                      <span class="direct-chat-timestamp pull-right">23 Jan 5:37 pm</span>
                    </div>
                    <!-- /.direct-chat-info -->
                    <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      Working with AdminLTE on a great new app! Wanna join?
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                  <!-- Message to the right -->
                  <div class="direct-chat-msg right">
                    <div class="direct-chat-info clearfix">
                      <span class="direct-chat-name pull-right">Sarah Bullock</span>
                      <span class="direct-chat-timestamp pull-left">23 Jan 6:10 pm</span>
                    </div>
                    <!-- /.direct-chat-info -->
                    <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      I would love to.
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                </div>
                <!--/.direct-chat-messages-->

                <!-- Contacts are loaded here -->
                <div class="direct-chat-contacts">
                  <ul class="contacts-list">
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Image">

                        <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Count Dracula
                                <small class="contacts-list-date pull-right">2/28/2015</small>
                              </span>
                          <span class="contacts-list-msg">How have you been? I was...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user7-128x128.jpg" alt="User Image">

                        <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Sarah Doe
                                <small class="contacts-list-date pull-right">2/23/2015</small>
                              </span>
                          <span class="contacts-list-msg">I will be waiting for...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user3-128x128.jpg" alt="User Image">

                        <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Nadia Jolie
                                <small class="contacts-list-date pull-right">2/20/2015</small>
                              </span>
                          <span class="contacts-list-msg">I'll call you back at...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user5-128x128.jpg" alt="User Image">

                        <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Nora S. Vans
                                <small class="contacts-list-date pull-right">2/10/2015</small>
                              </span>
                          <span class="contacts-list-msg">Where is your new...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user6-128x128.jpg" alt="User Image">

                        <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                John K.
                                <small class="contacts-list-date pull-right">1/27/2015</small>
                              </span>
                          <span class="contacts-list-msg">Can I take a look at...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user8-128x128.jpg" alt="User Image">

                        <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Kenneth M.
                                <small class="contacts-list-date pull-right">1/4/2015</small>
                              </span>
                          <span class="contacts-list-msg">Never mind I found...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                  </ul>
                  <!-- /.contatcts-list -->
                </div>
                <!-- /.direct-chat-pane -->
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <form action="#" method="post">
                  <div class="input-group">
                    <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                    <span class="input-group-btn">
                          <button type="button" class="btn btn-warning btn-flat">Send</button>
                        </span>
                  </div>
                </form>
              </div>
              <!-- /.box-footer-->
            </div>


     </div>
   </div>
  </div>
</div>

</body>
</html>
