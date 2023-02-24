<section class="content-header">
  <h1>
    Categoria
    <small>Version 2.0</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<section class="content">
       <div class="row">
          <div class="col-md-6">
            <div class="box box-danger">
              <div class="box-header">
                <h3 class="box-title">Nueva Categoria</h3>
              </div>
              <div class="box-body">
                <form id="form_categoria"  method="post">

                <div class="form-group">
                  <label>Categoria:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-tags"></i>
                    </div>
                    <input type="text" id="categoria" name="categoria" class="form-control" >
                  </div>
                </div>
                <!-- /.form group -->

                <div class="box-footer" style="text-align:center;">
                  <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar</button>
                  <button id="cancelarSolicitudes" class="btn btn-default"><i class="fa fa-window-close-o" aria-hidden="true"></i> Cancelar</button>
                </div>
                <!-- /.form group -->

              </form>
            </div>
              <!-- /.box-body -->
          </div>
            <!-- /.box -->
       </div>
    </div>

</section>

<script type="text/javascript">
$("#form_categoria").validate({ debug: true,
  rules:{
    categoria:{required: true}
  },
  messages:{
    categoria:{required: "<span class='label label-danger'>Ingrese una categoria</span>"}
  },
  submitHandler: function(form){
    guardarForm("pages/categoria/crear_categoria.php", "form_categoria", function(resultado){
    if (resultado == "err:ok") {
        funcionajax("pages/categoria/new_categoria.php","contenido-main","");
        swal("Registro Exitoso!", "Categoria registrado con exito!", "success");
        //  funcionajax("pages/especialista/new_especialista.php","contenido-main","");
      }
    });
    }
  });
</script>
