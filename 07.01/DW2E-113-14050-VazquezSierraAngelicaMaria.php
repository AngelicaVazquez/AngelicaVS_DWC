//slides, variables 3 colores, valores  - 255, ls tres eventos van al mismo sitio. en php lleo valores, paso a exadecimal los junto y los paso a clte
//viajan los decimales
<?php

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>
<script>
    function iniciar() {

        //Contenedor principal
        var contenedor = document.createElement("div");
        contenedor.id="contenedor";
        contenedor.style.display="flex";
        contenedor.style.alignItems="space-between";
        contenedor.style.width="50vw";
        //contenedor.style.height="5rem";
        contenedor.style.border="solid darkgrey 1px";
        document.body.appendChild(contenedor);
        

        //Sliders
        //R
        var divR = document.createElement("div");
        divR.id="divR";
        document.getElementById("contenedor").appendChild(divR);

        var r = document.createElement("input");
        r.id="r";
        r.type="range";
        r.min="0";
        r.max="255";
        r.value="125";
        document.getElementById("divR").appendChild(r);

        //G
        var divG = document.createElement("div");
        divG.id="divG";
        document.getElementById("contenedor").appendChild(divG);

        var g = document.createElement("input");
        g.id="g";
        g.type="range";
        g.min="0";
        g.max="255";
        g.value="125";
        document.getElementById("divG").appendChild(g);

        //B
        var divB = document.createElement("div");
        divB.id="divB";
        document.getElementById("contenedor").appendChild(divB);

        var b = document.createElement("input");
        b.id="b";
        b.type="range";
        b.min="0";
        b.max="255";
        b.value="125";
        document.getElementById("divB").appendChild(b);

        var muestra = document.createElement("div");
        muestra.id="muestra";
        muestra.style.flexGrow=1;
        document.getElementById("contenedor").appendChild(muestra);

    }

    window.onload=iniciar;
</script>
</head>
<body>
</body>
</html>