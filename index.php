<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GESTOR ALMACEN</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link  rel="icon"  href="dist/img/lavanderia.png" type="image/png" />
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
 <style media="screen">
   .lockscreen{
      background-repeat: no-repeat;
      background-size: 100% auto;
      background-position: center top;
      background-attachment: fixed;
   }
 </style>
</head>
<body class="hold-transition lockscreen">
  <div class="login-box">
    <div class="login-box-body">
      <form id="FormLogin"  method="post">
        <div class="attachment-block clearfix">
            <img class="attachment-img" src="dist/img/ibytes.png" alt="Attachment Image" style="height: 150px;">
        </div>

        <div class="form-group has-feedback">
          <input type="email" id="username" name="username" class="form-control"  placeholder="Email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" id="password" name="password" class="form-control"   placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

        <div class="row">
          <div class="col-xs-8">
          </div>
        </div>

        <div class="social-auth-links text-center">
          <button type="submit" style="background:#FFA420; text-align:center;" class="btn btn-block btn-facebook btn-flat">Iniciar Sesión</button>
        </div>
      </form>

    </div>
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

  <script type="text/javascript">
    $("#FormLogin").validate({ debug: true,
      rules:{
        username:{required: true},
        password:{required: true}
      },
      messages:{
        username:{required: "<span class='label label-danger'>Ingrese nombre de usuario</span>"},
        password:{required: "<span class='label label-danger'>Ingrese su password</span>"}
      },
      submitHandler: function(form){
          guardarForm("pages/access/checkUser.php", "FormLogin", function(resultado){
          if (resultado == "err:ok") {
            //  window.location="http://192.168.0.55/MantenimientoIndustrial/index.php";
              window.location="dashboard.php";
            }
          if (resultado == "") {
            $("#FormLogin")[0].reset();
            //window.location="http://192.168.0.55/MantenimientoIndustrial/login.php";
          }
         });
        }
      });

  </script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
