<?php
if(isset($_POST["submit"])){
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    /*if(!empty($_POST['ingredientes'])){
        foreach($_POST['ingredientes'] as $selected){
        $ingredientes=$selected." ";
        }
    }*/
}

setcookie("nombre", $nombre, time()+ (60*15),"/");
setcookie("telefono", $telefono, time()+ (60*15),"/");
//setcookie("ingredientes", $selected, time()+ (60*15),"/");

echo $nombre;
?>