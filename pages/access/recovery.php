<div class="login-box">
  <div class="login-box-body">
    <div class="attachment-block clearfix">
        <img class="attachment-img" src="dist/img/ibytes.png" alt="Attachment Image">
    </div>
    <form action="index2.html" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" value="adrian@gmail.com" readonly placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">

        </div>
      </div>
    </form>
    <div class="social-auth-links text-center">
      <a href="#" id="loginre" style="background:#2789e4; text-align:center;" class="btn btn-block btn-facebook btn-flat"> Enviar email</a>
    </div>
    <div class="form-group has-feedback" style="text-align:center;">
      <a id="recoveryre" href="#">Ya recibi el correo electronico ? </a>
    </div>
  </div>
</div>

<script type="text/javascript">
$("#recoveryre").click(function(){
  funcionajax("pages/access/login.php","content_x","");
});
</script>
