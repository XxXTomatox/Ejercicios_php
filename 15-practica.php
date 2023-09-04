<?php 

class Persona{
    
    public static $edad;
    protected static $nombre;
    protected static $apellido;

    public function __construct($nombre,$apellido,$edad){
        self::$nombre = $nombre;
        self::$apellido = $apellido;
        self::$edad = $edad;
    }
    
    public static function obtenerPersona(){
        return "Nombre: " . self::$nombre . "Apellido: " . self::$apellido . "Edad: " . self::$edad;
    }
}

$persona = new Persona("Axel","Marinez",20);
print_r($persona->obtenerPersona());
print(Persona::obtenerPersona());

//print(Persona::obtenerPersona("Axel","MArtinez",20))
?>