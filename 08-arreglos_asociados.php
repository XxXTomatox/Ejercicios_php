<?php 

$persona= [
    "nombre"=>"Axel",
    "edad"=> 29,
    "direccion"=> [
        "ciudad"=> "Milpa Alta",
        "pueblo"=> "San Juan"
    ],
    "calificacion"=>[12,23,34,45,67,78]
    ];

echo "<pre>";
print_r($persona);
print($persona["nombre"]);
print($persona["direccion"]["nombre"]);
print($persona["calificaciones"][3]);
echo "</pre>";
?>