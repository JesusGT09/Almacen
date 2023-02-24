<?php
require "../../class/db/clsController.php";
$obj_cnsc = new clsCnsc();
$resultado_cnsc = $obj_cnsc->ConsultarIdCategoria($_POST["id"]);
$listado_p = mysqli_fetch_assoc($resultado_cnsc);
?>

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
                <form id="form_editar_categoria"  method="post">

                  <div class="form-group">
                    <label>ID Categoria:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-tags"></i>
                      </div>
                      <input type="text" readonly id="id" name="id" value="<?php echo $listado_p["id"]; ?>"  class="form-control" >
                    </div>
                  </div>

                <div class="form-group">
                  <label>Categoria:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-tags"></i>
                    </div>
                    <input type="text"  id="categoria" name="categoria" value="<?php echo $listado_p["nombre"]; ?>"  class="form-control" >
                  </div>
                </div>
                <!-- /.form group -->

                <div class="box-footer" style="text-align:center;">
                  <button type="submit" class="btn btn-warning"><i class="fa fa-floppy-o" aria-hidden="true"></i> Actualizar</button>
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
$("#form_editar_categoria").validate({ debug: true,
  rules:{
    id:{required: true},
    categoria:{required: true}
  },
  messages:{
    id:{required: "<span class='label label-danger'>Ingrese un mensage</span>"},
    categoria:{required: "<span class='label label-danger'>Ingrese un mensage</span>"}
  },
  submitHandler: function(form){
    guardarForm("pages/categoria/modificar_categoria.php", "form_editar_categoria", function(resultado){
    if (resultado == "err:ok") {
        swal("actualizacion Exitoso!", "Categoria actualizada con exito!", "success");
        //  funcionajax("pages/especialista/new_especialista.php","contenido-main","");
      }
    });
    }
  });
</script>
