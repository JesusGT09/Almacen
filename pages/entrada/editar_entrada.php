<?php
require "../../class/db/clsController.php";
$obj_cnsc = new clsCnsc();
$resultado_cnsc = $obj_cnsc->ConsultarIdEntrada($_POST["id"]);
$listado_p = mysqli_fetch_assoc($resultado_cnsc);
?>

<section class="content-header">
  <h1>
   Entrada
    <small>Version 2.0</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>



<section class="content">
     <div class="row">
       <form id="form_editar_entrada"  method="post">
         <div class="col-md-6">
           <div class="box box-danger">
             <div class="box-header">
               <h3 class="box-title">Editar Entrada</h3>
             </div>
             <div class="box-body">
               <div class="form-group">
                 <label>ID Entrada:</label>
                 <div class="input-group">
                   <div class="input-group-addon">
                     <i class="fas fa-usd-circle"></i>
                   </div>
                   <input type="text" id="id" name="id" value="<?php echo $listado_p["id"]; ?>"  class="form-control" readonly autocomplete="off">
                 </div>
               </div>


               <div class="form-group">
                 <label>Fecha de Entrada:</label>
                 <div class="input-group">
                   <div class="input-group-addon">
                     <i class="fas fa-usd-circle"></i>
                   </div>
                   <input type="text" id="fecha" name="fecha"  value="<?php echo $listado_p["fecha"]; ?>"  class="form-control" readonly autocomplete="off">
                 </div>
               </div>


               <div class="form-group">
                 <label>Tipo:</label>
                 <div class="input-group">
                   <div class="input-group-addon">
                     <i class="fa fa-phone"></i>
                   </div>
                   <select class="form-control" id="tipo" name="tipo">
                     <option value="">Seleccione un tipo</option>
                     <?php
                         $resultado_cnsc = $obj_cnsc->ConsultarTipo();
                         if(mysqli_num_rows($resultado_cnsc)>0){
                           while ($listar_repuesto = mysqli_fetch_assoc($resultado_cnsc)) {;
                        ?>
                         <option value="<?php echo $listar_repuesto['id']; ?>"><?php echo $listar_repuesto['nombre']; ?></option>
                       <?php
                        }
                      }else{
                       ?>
                         <option style="text-align:center;">No se encontraron registros</option>
                     <?php
                       }
                     ?>
                   </select>
                 </div>
               </div>

               <div class="form-group">
                 <label>Producto:</label>
                 <div class="input-group">
                   <div class="input-group-addon">
                     <i class="fa fa-phone"></i>
                   </div>
                   <select class="form-control select2" id="producto" name="producto">
                     <option value="">Seleccione un producto</option>
                     <?php
                         $resultado_cnsc = $obj_cnsc->ConsultarProducto();
                         if(mysqli_num_rows($resultado_cnsc)>0){
                           while ($listar_repuesto = mysqli_fetch_assoc($resultado_cnsc)) {;
                        ?>
                         <option value="<?php echo $listar_repuesto['id']; ?>"><?php echo $listar_repuesto['nombre']; ?></option>
                       <?php
                        }
                      }else{
                       ?>
                         <option style="text-align:center;">No se encontraron registros</option>
                     <?php
                       }
                     ?>
                   </select>
                 </div>
               </div>
               <!-- /.form group -->
               <div class="form-group" style="display:none;">
                 <label>Registrado Por:</label>
                 <div class="input-group">
                   <div class="input-group-addon">
                     <i class="fas fa-usd-circle"></i>
                   </div>
                   <input type="number" id="iduser" name="iduser"  value="<?php echo $_SESSION['codigo']; ?>" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                 </div>
               </div>

               <div class="form-group">
                 <label>Cantidad:</label>
                 <div class="input-group">
                   <div class="input-group-addon">
                     <i class="fas fa-usd-circle"></i>
                   </div>
                   <input type="number" id="cantidad" name="cantidad" value="<?php echo $listado_p["cantidad"]; ?>"  class="form-control" autocomplete="off">
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
       </form>
      </div>
   </section>



<script type="text/javascript">
$(function() {
  $(".select2").select2();

  $("#fecha").datepicker(
    { dateFormat: 'yy-mm-dd' }
  );
});

$("#form_editar_entrada").validate({ debug: true,
  rules:{
    id:{required: true},
    fecha:{required: true},
    tipo:{required: true},
    producto:{required: true},
    cantidad:{required: true}
  },
  messages:{
    id:{required: "<span class='label label-danger'>Ingrese un mensage</span>"},
    fecha:{required: "<span class='label label-danger'>Ingrese un mensage</span>"},
    tipo:{required: "<span class='label label-danger'>Ingrese un mensage</span>"},
    producto:{required: "<span class='label label-danger'>Ingrese un mensage</span>"},
    cantidad:{required: "<span class='label label-danger'>Ingrese un mensage</span>"}
  },
  submitHandler: function(form){
    guardarForm("pages/entrada/modificar_entrada.php", "form_editar_entrada", function(resultado){
    if (resultado == "err:ok") {
        swal("actualizacion Exitoso!", "Entrada actualizada con exito!", "success");
        //  funcionajax("pages/especialista/new_especialista.php","contenido-main","");
      }
    });
    }
  });
</script>
