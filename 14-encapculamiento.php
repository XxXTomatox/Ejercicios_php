<?php 

class producto {
    public function __construct(protected $nombre = "Oreo",private $precio = 29,protected $caducidad = "29/09/2023"){}

    public static function obtenerProducto(){
        return "accedimos al metodo estatico";
        /**
         * if ($nombre === $this->nombre) {
         *       return "priducto: " . $this->nombre ."precio: " . $this-> precio ."Caducidad: " . $this-> caducidad;
         *   }else {
         *       return "El producto no existe";
         *  }
         */
       
    }
}
$galletas = new producto("Principe",20,"29/09/2023");

echo "<pre>";
print_r($galletas->obtenerProducto("marias"));
echo "<br>";
print_r($galletas->obtenerProducto("Principe"));
echo "<br>";
print_r(producto::obtenerProducto("Principe"));
echo "</pre>";
?>