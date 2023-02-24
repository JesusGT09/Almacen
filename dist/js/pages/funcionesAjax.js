function funcionajax(ruta, div, id){
  var peticion=ConstructorXMLHttpRequest();
  var datos= "id="+id;
  peticion.open("POST", ruta, true);
  peticion.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=ISO-8859-1');
  peticion.onreadystatechange=function()
  {
    if (peticion.readyState==4 && peticion.status==200)
    {
      setTimeout(function(){
        ejecutaScript(document.getElementById(div).innerHTML=peticion.responseText);
      }, 200);
    }
  }
  peticion.send(datos);
}

function ejecutaScript(cad) {
  var scripts = new Array();
  while(cad.indexOf("<script") > -1 || cad.indexOf("</script") > -1) {
    var s = cad.indexOf("<script");
    var s_e = cad.indexOf(">", s);
    var e = cad.indexOf("</script", s);
    var e_e = cad.indexOf(">", e);
    scripts.push(cad.substring(s_e+1, e));
    cad = cad.substring(0, s) + cad.substring(e_e+1);
  }
  for(var i=0; i<scripts.length; i++) {
    try {
      eval(scripts[i]);
    }
    catch(ex) {
    }
  }
}

function guardarForm(ruta, form, callback){
  $.ajax({
    data:  $("#"+form).serialize(),
    url:   ruta,
    type:  'POST',
    success:  function (response) {
      if (response == "err:ok") {
        callback("err:ok");
      }else {
        alert(response)
      }
    }
  });
}
