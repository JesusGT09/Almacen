<div class="login-box">
  <div class="login-box-body">

    <form action="index2.html" method="post">
      <div class="attachment-block clearfix">
          <img class="attachment-img" src="dist/img/ibytes.png" alt="Attachment Image">
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control"  readonly placeholder="Nombre de lavanderia / tintoreria">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control"  readonly placeholder="Nombre">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control"  readonly placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control"  readonly placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <hr>
      <div class="form-group has-feedback">
        <input type="password" class="form-control"  readonly placeholder="Contraseña">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control"  readonly placeholder="Repetir contraseña">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
      </div>
    </form>
    <div class="social-auth-links text-center">
      <a href="#" id="login" style="background:#2789e4; text-align:center;" class="btn btn-block btn-facebook btn-flat"> Crear Cuenta</a>
    </div>
    <div class="form-group has-feedback" style="text-align:center;">
      <a id="back" href="#">Ya tengo una cuenta </a>
    </div>
  </div>
</div>
<br><br><br>
<script type="text/javascript">
$("#back").click(function(){
  funcionajax("pages/access/login.php","content_x","");
});
</script>
