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


    foreach ( $persona as $key => $value) {
        echo "<pre>";
        print_r("llave: ". $key. " valor: ". $value);
        
        echo " ";
        print(gettype($value));
        echo "<br>";
        echo "</pre>";
    }
    foreach ($array as list($direccion, $calificaciones)) {
        echo "A: $a; B: $b; C: $c\n";
    }
?>