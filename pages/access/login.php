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
         alert(resultado);
        /*if (resultado == "err:ok") {
          //  window.location="http://192.168.0.55/MantenimientoIndustrial/index.php";
            window.location="http://127.0.0.1/GestorAlmacen/dashboard.php";
          }
        if (resultado == "") {
          $("#FormLogin")[0].reset();
          //window.location="http://192.168.0.55/MantenimientoIndustrial/login.php";
        }*/
       });
      }
    });

</script>
