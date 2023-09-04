<?php 

$opcion= "js";

switch ($opcion) {
    case 'html':
        print("Lenguaje de maquetado");
        break;
    case 'css':
        print("Hojas de estilos");
        break;
    case 'js':
        print("Lenjuague de programacion cliente");
        break;
    default:
        print("No conosco el lenguaje");
        break;
}

?>