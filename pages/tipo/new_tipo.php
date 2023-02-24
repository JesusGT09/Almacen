<section class="content-header">
  <h1>
    Tipo(Entrada/SAlida)
    <small>Version 2.0</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<section class="content">
  <form id="form_tipo"  method="post">
       <div class="row">
          <div class="col-md-6">
            <div class="box box-danger">
              <div class="box-header">
                <h3 class="box-title">Nuevo Tipo</h3>
              </div>
              <div class="box-body">


                <div class="form-group">
                  <label>Nombre Tipo :</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-tags"></i>
                    </div>
                    <input type="text" id="nombre" name="nombre" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                  </div>
                </div>
                <!-- /.form group -->


                <div class="box-footer" style="text-align:center;">
                  <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar</button>
                  <button id="cancelarSolicitudes" class="btn btn-default"><i class="fa fa-window-close-o" aria-hidden="true"></i> Cancelar</button>
                </div>
                <!-- /.form group -->
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
         </div>
      </div>
    </form>

</section>

<script type="text/javascript">

$("#form_tipo").validate({ debug: true,
  rules:{
    nombre:{required: true}
  },
  messages:{
    nombre:{required: "<span class='label label-danger'>Ingrese un mensage</span>"}
  },
  submitHandler: function(form){
    guardarForm("pages/tipo/crear_tipo.php", "form_tipo", function(resultado){
    if (resultado == "err:ok") {
        funcionajax("pages/tipo/new_tipo.php","contenido-main","");
        swal("Registro Exitoso!", "Tipo registrado con exito!", "success");
        //  funcionajax("pages/especialista/new_especialista.php","contenido-main","");
      }
    });
    }
  });
</script>
