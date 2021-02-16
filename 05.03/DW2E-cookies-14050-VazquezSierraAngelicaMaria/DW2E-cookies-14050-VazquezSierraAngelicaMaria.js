function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }
  
  function checkCookie() {
    var x = document.cookie;
    console.log(x);
    var nombre = getCookie("nombre");
    var telefono = getCookie("telefono");
    var ingredientes = getCookie("ingredientes");
    if (nombre != "") {
      document.getElementById("pedido").innerHTML="Hola "+ nombre + ".<br>Su teléfono es: " + telefono + ".<br>¿Sigue queriendo la pizza con " + ingredientes + "?";
    }
  }

  window.onload=checkCookie;