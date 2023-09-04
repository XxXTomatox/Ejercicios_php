<?php 
$calificacion = [12,23,34,45,67,78];
$arreglo =["hola mindo", 24, true];

for ($i=0; $i <count($calificacion) ; $i++) { 
    print("interacion: " .$i." valor ". $calificacion[$i]);
    echo "<br>";

}
echo "<br>";

for ($i=0; $i <count($arreglo) ; $i++) { 
    print("interacion: " .$i." valor ". $arreglo[$i]);
    echo "<br>";
}
?>