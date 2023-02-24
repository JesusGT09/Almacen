<section class="content-header">
  <h1>
    Salida
    <small>Version 2.0</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<section class="content">
  <div class="box">
    <div class="box-header navbar">
      <div class="input-group">
       <h3 class="box-title">Listado de Salida</h3>
        
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="col-md-8">
                <!-- /.input group -->
      <br>
    </div>
    <div class="col-md-2">
      <button type="button" id="new_notificacion" class="btn btn-block btn-default"><i class="fa fa-tags" aria-hidden="true"></i> Nuevo Salida</button>
    </div>
    <table id="example01" class="table table-bordered table-striped">
      <thead>
      <tr class="cabecera">
        <th>ID</th>
        <th>FOTO</th>
        <th>PRODUCTO</th>
        <th>FECHA</th>
        <th>CANTIDAD</th>
        <th style="text-align:center;">OPERACIONES</th>
      </tr>
      </thead>
      <tbody>
        <?php
          require "../../class/db/clsController.php";
          $obj_cnsc = new clsCnsc();
          $resultado_cnsc = $obj_cnsc->ConsultarSalida();
           if(mysqli_num_rows($resultado_cnsc)>0){
             $cont = 0;
                while ($listar_repuesto = mysqli_fetch_assoc($resultado_cnsc)) {;
                 $cont++;
               ?>
                 <tr class="dato">
                   <td><?php echo $cont; ?></td>
                   <td>
                     <img src="<?php if($listar_repuesto["foto"] != "" && $listar_repuesto["foto"] != "null"){ echo "pages/producto/upload/".$listar_repuesto["foto"];}else{ echo "vendors/images/photo1.png";} ?>"  class="border-radius-100 shadow" width="40" height="40" alt="">
                   </td>
                   <td><?php echo $listar_repuesto["nombre"]; ?></td>
                   <td><?php echo $listar_repuesto["fecha"]; ?></td>
                   <td><?php echo $listar_repuesto["cantidad"]; ?></td>
                   <td style="text-align:center;">
                     <div class="btn-group">
                       <button type="button" atrib="<?php echo $listar_repuesto["id"]; ?>" class="eliminar_salida btn btn-danger">Eliminar</button>
                       <button type="button" atrib="<?php echo $listar_repuesto["id"]; ?>" class="editar_salida btn btn-warning">Editar</button>
                     </div>
                   </td>
                 </tr>
                 <?php
                  }
                }else{
                 ?>
                 <tr>
                     <td colspan="6" style="text-align:center;">No se encontraron registros</td>
                 </tr>
             <?php
               }
             ?>
      </tbody>
    </table>
    </div>
    <!-- /.box-body -->
  </div>
</section>


<script type="text/javascript">
$("#boton_buscar").click(function(){
  var filtro = $("#txtBuscar").val();
  funcionajax("pages/producto/index.php","contenido-main",filtro);
});



$(".eliminar_salida").click(function(){
  var a = $(this).attr("atrib");
   funcionajax("pages/salida/eliminar_salida.php","contenido-main",a);
});

$(".editar_salida").click(function(){
  var a = $(this).attr("atrib");
  funcionajax("pages/salida/editar_salida.php","contenido-main",a);
});

$("#new_notificacion").click(function(){
  funcionajax("pages/salida/new_salida.php","contenido-main","");
});

$(function () {
//  $('#example1').DataTable()
  $('#example01').DataTable({
    'paging'      : true,
    'lengthChange': true,
    'searching'   : true,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : true
  })
});
</script>
