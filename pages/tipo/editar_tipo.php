<?php
require "../../class/db/clsController.php";
$obj_cnsc = new clsCnsc();
$resultado_cnsc = $obj_cnsc->ConsultarIdTipo($_POST["id"]);
$listado_p = mysqli_fetch_assoc($resultado_cnsc);
?>

<section class="content-header">
  <h1>
    Tipo
    <small>Version 2.0</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>


<section class="content">
  <form id="form_editar_tipo"  method="post">
       <div class="row">
          <div class="col-md-6">
            <div class="box box-danger">
              <div class="box-header">
                <h3 class="box-title">Editar Tipo</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label>ID Tipo :</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-tags"></i>
                    </div>
                    <input type="text" id="id" readonly name="id" value="<?php echo $listado_p['id'];?>" class="form-control" >
                  </div>
                </div>

                <div class="form-group">
                  <label>Nombre Tipo :</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-tags"></i>
                    </div>
                    <input type="text" id="nombre" name="nombre" value="<?php echo $listado_p['nombre'];?>" class="form-control" >
                  </div>
                </div>
                <!-- /.form group -->


                <div class="box-footer" style="text-align:center;">
                  <button type="submit" class="btn btn-warning"><i class="fa fa-floppy-o" aria-hidden="true"></i> Actualizar</button>
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
$("#form_editar_tipo").validate({ debug: true,
  rules:{
    id:{required: true},
    nombre:{required: true}
  },
  messages:{
    id:{required: "<span class='label label-danger'>Ingrese un mensage</span>"},
    nombre:{required: "<span class='label label-danger'>Ingrese un mensage</span>"}
  },
  submitHandler: function(form){
    guardarForm("pages/tipo/modificar_tipo.php", "form_editar_tipo", function(resultado){
    if (resultado == "err:ok") {
        swal("actualizacion Exitoso!", "Tipo actualizado con exito!", "success");
        //  funcionajax("pages/especialista/new_especialista.php","contenido-main","");
      }
    });
    }
  });
</script>
