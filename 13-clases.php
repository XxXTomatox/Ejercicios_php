<?php 

class persona{
    public function __construct(public $nombre, public $apellido, public $edad);
}

class Alumno{
    public $matricula;
    public $nombre:
    public $apellido;
    public $edad;

    public function __construct($matricula, $nombre, $apellido, $edad){
        $this -> matricula = $matricula;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> edad = $edad;
    }

    public function reprobar($materia){
        return "reprobaste: " . $materia;
    }
    public function aprobar($materia,$calificacion){
        return "aprobaste: $materia" . "con: " . $calificacion;
    }
}

$alumno = new Alumno(201190021,"Axel","Martinez",20)

$parker= new persona("Axel","Martinez", 20);

echo "<pre>";
print_r($parker);
print_r($alumno);
print($alumno -> aprobar ("POO",70));
echo "<br>";
print($alumno -> reprobar ("POO"));
echo "</pre>";
?>