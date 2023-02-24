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
  <form id="form_empleado"  method="post">
       <div class="row">
          <div class="col-md-6">
            <div class="box box-danger">
              <div class="box-header">
                <h3 class="box-title">Nuevo Personal</h3>
              </div>
              <div class="box-body">

                <div class="form-group">
                  <label>Identificacion:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-tags"></i>
                    </div>
                    <input type="text" id="identificacion" name="identificacion" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                  </div>
                </div>


                <div class="form-group">
                  <label>Nombre:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-tags"></i>
                    </div>
                    <input type="text" id="nombre" name="nombre" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                  </div>
                </div>
                <!-- /.form group -->
                <div class="form-group">
                  <label>Apellido:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fas fa-usd-circle"></i>
                    </div>
                    <input type="text" id="apellido" name="apellido" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                  </div>
                </div>


                <div class="form-group">
                  <label>Telefono:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fas fa-usd-circle"></i>
                    </div>
                    <input type="text" id="telefono" name="telefono" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                  </div>
                </div>


                <div class="form-group">
                  <label>Usuario:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-tags"></i>
                    </div>
                    <input type="text" id="usuario" name="usuario" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                  </div>
                </div>


                <div class="form-group">
                  <label>Contraseña:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fas fa-clipboard-list-check"></i>
                    </div>
                    <input type="text" id="password" name="password" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
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
$("#form_empleado").validate({ debug: true,
  rules:{
    identificacion:{required: true},
    nombre:{required: true},
    apellido:{required: true},
    telefono:{required: true},
    usuario:{required: true},
    password:{required: true}
  },
  messages:{
    identificacion:{required: "<span class='label label-danger'>Ingrese un mensage</span>"},
    nombre:{required: "<span class='label label-danger'>Ingrese un mensage</span>"},
    apellido:{required: "<span class='label label-danger'>Ingrese un mensage</span>"},
    telefono:{required: "<span class='label label-danger'>Ingrese un mensage</span>"},
    usuario:{required: "<span class='label label-danger'>Ingrese un mensage</span>"},
    password:{required: "<span class='label label-danger'>Ingrese un mensage</span>"}
  },
  submitHandler: function(form){
    guardarForm("pages/empleado/crear_empleado.php", "form_empleado", function(resultado){
    if (resultado == "err:ok") {
        funcionajax("pages/empleado/new_personal.php","contenido-main","");
        swal("Registro Exitoso!", "Empleado registrado con exito!", "success");
      }
    });
    }
  });
</script>
