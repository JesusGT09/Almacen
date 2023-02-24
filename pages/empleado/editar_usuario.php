<?php
require "../../class/db/clsController.php";
$obj_cnsc = new clsCnsc();
$resultado_cnsc = $obj_cnsc->ConsultarIdEmpleado($_POST["id"]);
$listado_p = mysqli_fetch_assoc($resultado_cnsc);
?>

<section class="content-header">
  <h1>
   Personal
    <small>Version 2.0</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<section class="content">
  <form id="form_editar_empleado"  method="post">
       <div class="row">
          <div class="col-md-6">
            <div class="box box-danger">
              <div class="box-header">
                <h3 class="box-title">Editar Personal</h3>
              </div>
              <div class="box-body">

                <div class="form-group">
                  <label>Id:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-tags"></i>
                    </div>
                    <input type="text" readonly id="id" name="id" value="<?php echo $listado_p["id"]; ?>" class="form-control">
                  </div>
                </div>


                <div class="form-group">
                  <label>Identificacion:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-tags"></i>
                    </div>
                    <input type="text" id="identificacion" value="<?php echo $listado_p["identificacion"]; ?>" name="identificacion" class="form-control" >
                  </div>
                </div>


                <div class="form-group">
                  <label>Nombre:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-tags"></i>
                    </div>
                    <input type="text" id="nombre" value="<?php echo $listado_p["nombre"]; ?>" name="nombre" class="form-control" >
                  </div>
                </div>
                <!-- /.form group -->
                <div class="form-group">
                  <label>Apellido:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fas fa-usd-circle"></i>
                    </div>
                    <input type="text" id="apellido" name="apellido" value="<?php echo $listado_p["apellido"]; ?>" class="form-control" >
                  </div>
                </div>


                <div class="form-group">
                  <label>Telefono:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fas fa-usd-circle"></i>
                    </div>
                    <input type="text" id="telefono" name="telefono"  value="<?php echo $listado_p["telefono"]; ?>"class="form-control" >
                  </div>
                </div>


                <div class="form-group">
                  <label>Usuario:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-tags"></i>
                    </div>
                    <input type="text" id="usuario" name="usuario" value="<?php echo $listado_p["correo"]; ?>" class="form-control" >
                  </div>
                </div>


                <div class="form-group">
                  <label>Contraseña:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fas fa-clipboard-list-check"></i>
                    </div>
                    <input type="password" id="password" name="password" class="form-control" >
                  </div>
                </div>

                <div class="form-group">
                  <label>Personal:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-cube"></i>
                    </div>
                    <select class="form-control" id="rol" name="rol">
                      <option value="admin">Admin</option>
                      <option value="personal">personal</option>
                    </select>
                  </div>
                </div>


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
$("#form_editar_empleado").validate({ debug: true,
  rules:{
    id:{required: true},
    identificacion:{required: true},
    nombre:{required: true},
    apellido:{required: true},
    telefono:{required: true},
    usuario:{required: true},
    password:{required: true},
    rol:{required: true}
  },
  messages:{
    id:{required: "<span class='label label-danger'>Ingrese un mensage</span>"},
    identificacion:{required: "<span class='label label-danger'>Ingrese un mensage</span>"},
    nombre:{required: "<span class='label label-danger'>Ingrese un mensage</span>"},
    apellido:{required: "<span class='label label-danger'>Ingrese un mensage</span>"},
    telefono:{required: "<span class='label label-danger'>Ingrese un mensage</span>"},
    usuario:{required: "<span class='label label-danger'>Ingrese un mensage</span>"},
    password:{required: "<span class='label label-danger'>Ingrese un mensage</span>"},
    rol:{required: "<span class='label label-danger'>Seleccione un rol</span>"}
  },
  submitHandler: function(form){
    guardarForm("pages/empleado/modificacion_empleado.php", "form_editar_empleado", function(resultado){
    if (resultado == "err:ok") {
        swal("Actualizacion Exitoso!", "Usuario actualizado con exito!", "success");
        //  funcionajax("pages/especialista/new_especialista.php","contenido-main","");
      }
    });
    }
  });
</script>
