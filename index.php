<?php 

class Waifus{
    public static $NombreW;
    public static $AnimeW;
    public static $fecha;

    function Waifus($NombreW, $AnimeW,$fecha){
        self :: $NombreW = $NombreW;
        self :: $AnimeW = $AnimeW;
        self :: $fecha = $fecha;
    }

    public static function AgregarWaifus(){
        return "Nombre Waifu: " . self::$NombreW . " Anime Waifu: $AnimeW" . self::$AnimeW . " Fecha de lansamiento: ". self::$fecha;
    }
}

$waifus = new Waifus("Rem", "RE:zero", " 4 de abril de 2016");
print_r($waifus -> AgregarWaifus());
//print(Waifus::AgregarWaifus());
?>
