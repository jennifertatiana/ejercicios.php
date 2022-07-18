<?php

//Bucle foreach

//array
$array[] = "andres";
$array[] = "camilo";
$array[] = "maria";
$array[] = "juan";
$array[] = "paula";

foreach($array as $value){
    echo $value;
    echo "<br/>";
}


foreach($array as $key => $value){
    echo "posicio: " . $key . " el nombre es: " . $value;
    echo "<br/>";
}



//recorrer un array multidimensional

$notas = array(
    '0' => array('materia' => "Ingles", "nombre" => "tatiana", "nota" => 2.5),
    '1' => array('materia' => "Español", "nombre" => "Juana", "nota" => 4.5),
    '2' => array('materia' => "Matematicas", "nombre" => "Andres", "nota" => 3.5),
    '3' => array('materia' => "Ingles", "nombre" => "Carlos", "nota" => 3.5),
);

echo "---------------------------------------------------------------";
echo "<br/>";

foreach($notas as $key => $value){
    echo "la materia: " . $value["materia"]. " Persona: " . $value["nombre"]. " la nota es: " . $value["nota"];
    echo "<br/>";
}




?>