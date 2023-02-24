<?php
require "../../class/db/clsController.php";
$obj_cnsc = new clsCnsc();
$resultado_cnsc = $obj_cnsc->ConsultarIdProducto($_POST["id"]);
$listado_p = mysqli_fetch_assoc($resultado_cnsc);
?>

<section class="content-header">
  <h1>
    Producto
    <small>Version 2.0</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<section class="content">
  <form id="form_editar_producto"  method="post">
       <div class="row">
          <div class="col-md-6">
            <div class="box box-danger">
              <div class="box-header">
                <h3 class="box-title">Editar Producto</h3>
              </div>
              <div class="box-body">

                <div class="form-group">
                  <label>ID Producto:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-tags"></i>
                    </div>
                    <input type="text"  readonly id="id" value="<?php echo $listado_p['id'];?>" name="id" class="form-control" >
                  </div>
                </div>



                <div class="form-group">
                  <label>Imagen:</label>
                  <div class="input-group">
                    <div style="position: relative; width: 50px; height: 30px; line-height: 30px; text-align: center;" class="input-group-addon" id="imagen" >
                        <i class="fa fa-image"></i>
                        <input type="file" style="opacity: 0.0; position: absolute; top: 0; left: 0; bottom: 0; right: 0; width: 100%; height:100%;" type="file" id="files" />
                    </div>
                    <div class="product-img">
                      <img src="<?php if($listado_p["foto"] != "" && $listado_p["foto"] != "null"){ echo "pages/producto/upload/".$listado_p["foto"];}else{ echo "dist/img/default-50x50.gif";} ?>"  id="image" style="width: 100px;" alt="Product Image">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group" style="width: 200px;margin: 0 auto;">
                      <div class="row" style="display:none;">
                          <div class="product-img" style="margin-left:30%;">
                            <img src="dist/img/default-50x50.gif" alt="Product Image" style="height: 100px;" id="image">
                          </div>
                      </div>
                      <div class="row">
                        <div style="display:none;">
                          <input type="file" id="files">
                        </div>

                        <div class="col-md-12" style="display:none;">
                          <div class="form-group">
                              <label>Nombre Archivo:</label>
                              <div class="input-group date">
                                <input type="text" class="form-control pull-right input-sm" id="inputNArchivo" name="inputNArchivo">
                              </div>
                        </div>
                      </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                       <div class="upload-msg"></div>
                    </div>
                </div></div>






                <div class="form-group">
                  <label>Producto:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-tags"></i>
                    </div>
                    <input type="text" id="nombre" value="<?php echo $listado_p['nombre'];?>" name="nombre" class="form-control" >
                  </div>
                </div>
                <!-- /.form group -->
                <div class="form-group">
                  <label>Precio:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fas fa-usd-circle"></i>
                    </div>
                    <input type="text" id="precio" name="precio" value="<?php echo $listado_p['precio'];?>" class="form-control" >
                  </div>
                </div>


                <div class="form-group">
                  <label>Categoria:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-phone"></i>
                    </div>
                    <select class="form-control" id="categoria" name="categoria">
                      <?php

                          $resultado_cnsc = $obj_cnsc->ConsultarCategoria();
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



                <!-- phone mask -->
                <div class="form-group">
                  <label>Descripcion:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-phone"></i>
                    </div>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Enter ..."><?php echo $listado_p['descripcion'];?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label>Estado:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-cube"></i>
                    </div>
                    <select class="form-control" id="estado" name="estado">
                      <option value="actualizacion">Activo</option>
                      <option value="cita">Inactivo</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label>Stock:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fas fa-inventory"></i>
                    </div>
                    <input type="text" id="stock" name="stock" class="form-control" value="<?php echo $listado_p['stock'];?>">
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
$(function (){
  document.getElementById("files").onchange = function () {
    var a = document.getElementById('files').files[0].name;
    document.getElementById("inputNArchivo").value = a;
    var reader = new FileReader();
    reader.onload = function (e) {
        document.getElementById("image").src = e.target.result;
    };
    reader.readAsDataURL(this.files[0]);
  };
});







    function upload_image(){
			$(".upload-msg").text('Cargando...');
			var inputFileImage = document.getElementById("files");
			var file = inputFileImage.files[0];
			var data = new FormData();
			data.append('files',file);

			$.ajax({
				url: "pages/producto/upload.php",        // Url to which the request is send
				type: "POST",             // Type of request to be send, called as method
				data: data, 			  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,       // The content type used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,        // To send DOMDocument or non processed data file it is set to false
				success: function(data)   // A function to be called if request succeeds
				{
					$(".upload-msg").html(data);
					window.setTimeout(function() {
					$(".alert-dismissible").fadeTo(500, 0).slideUp(500, function(){
					$(this).remove();
					});	}, 5000);
				}
			});
		}



$("#form_editar_producto").validate({ debug: true,
  rules:{
    id:{required: true},
    nombre:{required: true},
    precio:{required: true},
    descripcion:{required: true},
    estado:{required: true},
    stock:{required: true}
  },
  messages:{
    id:{required: "<span class='label label-danger'>Ingrese un mensage</span>"},
    nombre:{required: "<span class='label label-danger'>Ingrese un mensage</span>"},
    precio:{required: "<span class='label label-danger'>Ingrese un mensage</span>"},
    descripcion:{required: "<span class='label label-danger'>Ingrese un mensage</span>"},
    estado:{required: "<span class='label label-danger'>Ingrese un mensage</span>"},
    stock:{required: "<span class='label label-danger'>Ingrese un mensage</span>"}
  },
  submitHandler: function(form){
    guardarForm("pages/producto/modificar_producto.php", "form_editar_producto", function(resultado){
    if (resultado == "err:ok") {
        upload_image();
        swal("actualizacion Exitoso!", "Producto actualizado con exito!", "success");
        //  funcionajax("pages/especialista/new_especialista.php","contenido-main","");
      }
    });
    }
  });
</script>
