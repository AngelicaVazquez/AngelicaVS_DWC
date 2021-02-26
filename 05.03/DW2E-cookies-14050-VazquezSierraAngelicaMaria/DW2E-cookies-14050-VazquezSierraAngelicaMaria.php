<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cookies</title>
    <link rel="stylesheet" media="screen" href="DW2E-cookies-14050-VazquezSierraAngelicaMaria.css">
    <script src="DW2E-cookies-14050-VazquezSierraAngelicaMaria.js"></script>
</head>
<body>
    <div class="contenedor">
        <form action="" method="post">
            <h1>Pizzería</h1>
            <h3>Datos de contacto</h3>
            <label for="nombre">Nombre: </label><br><input type="text" id="nombre" name="nombre"><br>
            <label for="telefono">Teléfono: </label><br><input type="text" id="telefono" name="telefono">
            <h3>Elija los ingredientes</h3>
            <label><input type="checkbox" name="ingredientes[]" value="queso">Queso</label>
            <label><input type="checkbox" name="ingredientes[]" value="jamon">Jamón</label>
            <label><input type="checkbox" name="ingredientes[]" value="piña">Piña</label>
            <label><input type="checkbox" name="ingredientes[]" value="jalapeño">Jalapeño</label>
            <label><input type="checkbox" name="ingredientes[]" value="tomate">Tomate</label>
            <label><input type="checkbox" name="ingredientes[]" value="pimiento">Pimiento</label>
            <br>
            <input type="submit" name="submit" value="Guardar" class="boton">
        </form>
    </div>
    <div class="pedido">
    </div>
    <?php
        if(isset($_POST['submit'])){
            $nombre = $_POST["nombre"];
            $telefono = $_POST["telefono"];
            /*if(!empty($_POST['ingredientes'])){
                foreach($_POST['ingredientes'] as $selected){
                $ingredientes[$selected]=$selected." ";
                }
            }*/
        }

        setcookie("nombre", $nombre, time()+ (60*15));
        setcookie("telefono", $telefono, time()+ (60*15));
        //setcookie("ingredientes", $selected, time()+ (60*15),"/");

        echo $nombre;
    ?>
</body>