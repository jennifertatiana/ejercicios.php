<?php

function saludarNombre(){
    echo "Hola Jennifer";
}

function saludar(){
    echo "Hola...";
}

function despedir($nombre, $apellido){
    echo "Adios " . $nombre ." " .$apellido;
}

saludar();
saludarNombre();
echo "<br/>";
despedir("Jennifer ", " lopez");


?>