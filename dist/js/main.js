$(document).ready(function(e) {
    $('input').lc_switch();

    $("#pago").keypress(function() {
      var valor = $("#valor_total").val();
      var cambio = $("#pago").val();
      var resultado = (cambio - valor);
      $("#cambio").val(""+resultado);
    //  alert( "Handler for .keypress() called." );
    });

    $(document).on('lcs-statuschange', '.lcs_check', function() {
        var status 	= ($(this).is(':checked')) ? 'checked' : 'unchecked',
        subj 	= ($(this).attr('type') == 'radio') ? 'radio #' : 'checkbox #',
        num		= $(this).val();
      $('#third_div ul').prepend('<li><em>[lcs-statuschange]</em>'+ subj + num +' changed status: '+ status +'</li>');
    });
    // triggered each time a field is checked
    $(document).on('lcs-on', '.lcs_check', function() {
      var subj 	= ($(this).attr('type') == 'radio') ? 'radio #' : 'checkbox #',
      num		= $(this).val();
      funcionajax("pages/pos/delivery_form.php","form_delivery","");
      $('#third_div ul').prepend('<li><em>[lcs-on]</em>'+ subj + num +' is checked</li>');
    });
    // triggered each time a is unchecked
    $(document).on('lcs-off', '.lcs_check', function() {
        var subj 	= ($(this).attr('type') == 'radio') ? 'radio #' : 'checkbox #',
        num		= $(this).val();
    funcionajax("pages/pos/empty.php","form_delivery","");
    $('#third_div ul').prepend('<li><em>[lcs-off]</em>'+ subj + num +' is unchecked</li>');form_delivery
    });
});


$("#pagar_principal").click(function(){
    if($("#id_cliente").val().length > 0){
      $('#modal-info').modal('show');
    }else{
       swal("Seleccione un cliente!", "No has seleccionado un cliente!", "error");
    }

    if($("#addPago").html() == '$ 0' ){
       swal("Son iguales!", "los parametros comparados son iguales!", "success");
    }else{
       swal("No son iguales!", "los parametros no son iguales!", "error");
    }

});



$("#Aceptarpagar").click(function(){
    $('#addPago').html($("#pago").val());
    $('#addCambio').html($("#cambio").val());
    $('#modal-pay').modal('hide');
});



// clean events log
$('#third_div small').click(function() {
  $('#third_div ul').empty();
});

$('#bill').html("<span style='margin:auto; display:table; margin-top:20px;font-weight: bold;'> No Orders!</span>");

$("#cancelar").click(function(){
    clearOrder();
});

$("#add_pay").click(function(){
  $("#modal-pay").modal("show");
});

$("#add_discount").click(function(){
 $("#modal-discount").modal("show");
});

$('#seleccion').on('change', function() {
   if(this.value == "producto"){
     getMenu('2');
   }
   if(this.value == "prenda"){
    getMenu('1');
   }
});

  function randomString(length) {
      var text = "";
      var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
      for(var i = 0; i < length; i++) {
          text += possible.charAt(Math.floor(Math.random() * possible.length));
      }
      return text;
  }



  function refraccionesPrenda(){
    alert("dado click");
  }

  function showOrders(){
    var theresult = "";
    var thetotal = "";
    var theorders = JSON.parse(localStorage.orders);
    for(var f=0;f<theorders.length;f++) {
    theresult += '<div class="itembox" onclick="refraccionesPrenda()" id="'+theorders[f][0]+'"><div class="alignleft" style="font-size: 16px;"><b>'+theorders[f][1].toLowerCase()
    +' ('+theorders[f][3]+')</b></div><div class="alignright"> $ '+theorders[f][2]
    +'.00 &nbsp<span class="minus" onclick="removeOrder(\''+f+'\',\''+theorders[f][2]+'\')">-</span></div><div style="clear: both;"></div></div>';
      if(theorders[f][4].length > 0) {
        for(var g=0;g<theorders[f][4].length;g++) {
          theresult += '<div class="itembox" onclick="refraccionesPrenda()" id="'+theorders[f][4][g][0]+'"><div class="alignleft">--'+theorders[f][4][g][1].toLowerCase()
          +' ('+theorders[f][4][g][3]+')</div><div class="alignright">$ '+theorders[f][4][g][2]
          +'.00 &nbsp<span class="minus" onclick="removeAddOn(\''+f+'\',\''
          +g+'\',\''
          +theorders[f][4][g][2]+'\')">-</span></div><div style="clear: both;"></div></div>';
        }
      }
      }
    theresult += '<div class="focus" tabindex="1"></div>';
    thetotal = ""+localStorage.total+"";
    $('#bill').html(theresult);
    $('#cambio').val(thetotal);
    $('#bill-total').html(thetotal);
    $('#valor_total').val(thetotal);
    $('#subtotal-total').html(thetotal);
  }

  $("#pagar").click(function(){
      // window.open('http://192.168.0.112/lavanderia/pages/pos/ticket.php');
      var theresult = "";
      var thetotal = "";
      thetotal = ""+localStorage.total;
      var theorders = JSON.parse(localStorage.orders);

      var fecha_recibido = $("#fecha_recibido").val();
      var fecha_entrega = $("#fecha_entrega").val();
      var direccion_entrega = $("#direccion_entrega").val();
      var observaciones = $("#descripcion").val();
      var idcliente = $("#id_cliente").val();
      var total = thetotal;

  //    alert(" fecha Recibido "+fecha_recibido+" fecha entrega "+fecha_entrega+" direccion entrega "+direccion_entrega+" observaciones "+observaciones+" idcliente "+idcliente+" total "+total);
      GuardarOrden(fecha_recibido, fecha_entrega, direccion_entrega, observaciones, idcliente, total);

      for(var f=0;f<theorders.length;f++) {
      //alert("id "+theorders[f][0]+"nombre "+theorders[f][1]+" precio "+theorders[f][2]+" cantidad "+theorders[f][3]+" Total "+thetotal);
      GuardarData(theorders[f][0],theorders[f][1], theorders[f][2], theorders[f][3]);
    /*  theresult += '<div class="itembox" id="'+theorders[f][0]+'"><div class="alignleft" style="font-size: 16px;"><b>'+theorders[f][1].toLowerCase()
      +' ('+theorders[f][3]+')</b></div><div class="alignright"> $ '+theorders[f][2]
      +'.00 &nbsp<span class="minus" onclick="removeOrder(\''+f+'\',\''+theorders[f][2]+'\')">-</span></div><div style="clear: both;"></div></div>';
        if(theorders[f][4].length > 0) {
          for(var g=0;g<theorders[f][4].length;g++) {
            theresult += '<div class="itembox" id="'+theorders[f][4][g][0]+'"><div class="alignleft">--'+theorders[f][4][g][1].toLowerCase()
            +' ('+theorders[f][4][g][3]+')</div><div class="alignright">$ '+theorders[f][4][g][2]
            +'.00 &nbsp<span class="minus" onclick="removeAddOn(\''+f+'\',\''
            +g+'\',\''
            +theorders[f][4][g][2]+'\')">-</span></div><div style="clear: both;"></div></div>';
          }
        }*/
      }
  });





    function GuardarOrden(fecha_recibido, fecha_entrega, direccion_entrega, observaciones, idcliente, total, pago, cambio){
      $.ajax({
        method: "POST",
        url: "pages/pos/guardar_orden.php",
        data: {fecha_recibido:fecha_recibido, fecha_entrega: fecha_entrega, direccion_entrega: direccion_entrega, observaciones: observaciones, idcliente: idcliente, total: total , pago: pago , cambio: cambio},
        cache: false
      })
      .done(function( msg ) {
        $('#modal-info').modal('hide')
        clearOrder();
        swal("Registro Exitoso!", "Orden registrada con exito!", "success");
        window.open("http://192.168.1.104/lavanderia/pages/pos/ticket.php", '_blank');
      }).fail(function() {
        swal("Registro Fallido!", "Orden no registrada!", "error");
      })
      .always(function() {
      });
    }





  function GuardarData(id, nombre, precio, cantidad){
    $.ajax({
      method: "POST",
      url: "pages/pos/guardar_pos.php",
      data: {id:id, nombre: nombre , precio: precio, cantidad: cantidad},
      cache: false
    })
    .done(function( msg ) {
    }).fail(function() {
    })
    .always(function() {
    });
  }


  function popUp(orderid,ordername,orderprice,orderpos) {
    modal.style.display = "block";
    localStorage.origid = orderid;
    localStorage.origpos = orderpos;
    localStorage.change = 0;
    var orders = JSON.parse(localStorage.orders);
    if (orderid.indexOf('-') < 0) {
    if(!localStorage.addCode){
      localStorage.addCode = 1;
    }
    var addCode = localStorage.addCode;
    var newId = orderid.toString() + "-" + addCode.toString();
    orders[orderpos][0] = newId;
    localStorage.addCode ++;
    }
    localStorage.orders = JSON.stringify(orders);
    showOrders();
  }

  function addOn(orderid,ordername,orderprice) {
    var orders = JSON.parse(localStorage.orders);
    var parentId = localStorage.origid;
    var parentPos = localStorage.origpos;
    var addlist = [orderid,ordername,orderprice,1];

    var counter = 0;
    var exist;
    for(var x=0;x<orders[parentPos][4].length;x++){
      if($.inArray(orderid, orders[parentPos][4][x]) !== -1) {
        counter ++;
        exist = x;
      }
    }
    if (counter > 0) {
      orders[parentPos][4][exist][3] += 1;
      var orderSum = parseInt(orders[parentPos][4][exist][2]);
      orderSum += parseInt(orderprice);
      var orderTotal = parseInt(localStorage.total);
      orderTotal += parseInt(orderprice);
      orders[parentPos][4][exist][2] = orderSum.toString();
      localStorage.total=orderTotal.toString();
    }else {
      var toPush=[orderid,ordername,orderprice,1];
      orders[parentPos][4].push(toPush);
      var orderTotal = parseInt(localStorage.total);
      orderTotal += parseInt(orderprice);
      localStorage.total=orderTotal.toString();
    }
    if(orders) {
    localStorage.orders = JSON.stringify(orders);
    showOrders();
    }
    localStorage.change = 1;
  }


















  function addOrder(orderid,ordername,orderprice) {
    if(!localStorage.orderid) {
      localStorage.orderid = randomString(11);
      var orders=[];
      localStorage.total="0";
    } else {
      orders = JSON.parse(localStorage.orders);
      var total = localStorage.total;
    }
    var counter = 0;
    var exist;
    for(var x=0;x<orders.length;x++){
      if($.inArray(orderid, orders[x]) !== -1) {
        counter ++;
        exist = x;
      }
    }
    if (counter > 0) {
      orders[exist][3] += 1;
      var orderSum = parseInt(orders[exist][2]);
      orderSum += parseInt(orderprice);
      var orderTotal = parseInt(localStorage.total);
      orderTotal += parseInt(orderprice);
      orders[exist][2] = orderSum.toString();
      localStorage.total=orderTotal.toString();
    }else {
      orders.push([orderid,ordername,orderprice,1,[]]);
      var orderTotal = parseInt(localStorage.total);
      orderTotal += parseInt(orderprice);
      localStorage.total=orderTotal.toString();
    }
    if(orders) {
    localStorage.orders = JSON.stringify(orders);
    showOrders();
    }
     $('.focus')[0].focus();
  }













  function removeOrder(pos,price) {
    orders = JSON.parse(localStorage.orders);
    if(orders[pos][4]){
      for(var h=0;h<orders[pos][4].length;h++) {
        localStorage.total=(parseInt(localStorage.total)-parseInt(orders[pos][4][h][2])).toString();
      }
    }
    orders.splice(pos,1);
    localStorage.orders = JSON.stringify(orders);
    localStorage.total=(parseInt(localStorage.total)-parseInt(price)).toString();
    showOrders();
  }

  function removeAddOn(pos, poss,price) {
    orders = JSON.parse(localStorage.orders);
    orders[pos][4].splice(poss,1);
    localStorage.orders = JSON.stringify(orders);
    localStorage.total=(parseInt(localStorage.total)-parseInt(price)).toString();
    showOrders();
  }

  function clearOrder() {
    localStorage.clear();
    $('#bill').html("<span style='margin:auto; display:table; margin-top:20px;font-weight: bold;'> No Orders!</span>");
    $('#bill-total').html("$ 00.00");
    $('#subtotal-total').html("$ 00.00");
    $('#valor_total').val("00.00");
    $('#cambio').val("00.00");
  }


  if(localStorage.orderid){
    showOrders();
  }
  else{
    $('#bill').html("<span style='margin:auto; display:table; margin-top:20px;font-weight: bold;'> No Orders!</span>");
  }
  getMenu('1');


  //modal
var modal = document.getElementById('myModal');
window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
      if (localStorage.change == 0) {
        var orders = JSON.parse(localStorage.orders);
        var orderpos = localStorage.origpos;
        var origid = localStorage.origid;
        orders[orderpos][0] = origid;
        localStorage.orders = JSON.stringify(orders);
        showOrders();
      }
    }
  }

  function getMenu(cat){
  $.ajax({
    method: "GET",
    url: "pages/pos/test.php?category="+cat,
    data: { function: 'getMenu' },
    cache: false
  })
  .done(function( msg ) {
    var parsed = JSON.parse(msg);
    var menu = parsed[cat];
      var output = '';
      for(var i in menu){
         var id = menu[i].id;
         var name = menu[i].name.toLowerCase();
         var price = menu[i].price;
         var foto = menu[i].image;

         var producto = "";
         var prenda = "";

         if(cat == 2){
           if(foto != ""){
            producto = "pages/producto/upload/"+foto;
           }else{
            producto = "dist/images/noimage.png";
           }
         }
         if(cat == 1){
           if(foto != ""){
            producto = "pages/entrada/upload/"+foto;
           }else{
            producto = "dist/images/noimage.png";
           }
         }

         output += '<div class="col-md-3" id="'+id+'" onclick="addOrder(\''+id+'\',\''+name+'\',\''+price+'\')"><figure style="cursor:pointer;" class="card card-product"><span class="badge-new editar_prenda"><i class="fas fa-trash-alt" aria-hidden="true"></i> </span> <div class="img-wrap"><img src="'+producto+'" alt="Product Image"><a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a></div><figcaption class="info-wrap"><a href="#" class="title">'+name+'</a><div class="action-wrap add"><a href="#" class="btn btn-primary btn-sm" style="width: 100%;"> Agregar </a><div class="price-wrap h5"><span class="price-new">$ \''+price+'\'</span></div></div></figcaption></figure></div>';

    }
    $('.super-inner-right').html(output);
    $('#categ').html(cat);
  }).fail(function() {
  })
  .always(function() {
  });
}
