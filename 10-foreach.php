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
$calificaciones = [12,23,34,45,67,78];
$arreglo =["hola mindo", 24, true];

foreach ($calificaciones as $calificacion ) {
    print($calificacion);
    echo"<br>";
}
/*foreach ($calificaciones as $calificacion ) :
    print($calificacion);
    echo"<br>";
endforeach;*/
foreach ($persona as $key => $value ) {
    echo "<pre>";
    print_r("llave: ". $key. " valor: ". $value);
    echo " ";
    print(gettype($value));
    echo "<br>";
    echo "</pre>";
}
?>
