<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nombre = "Axel";   
        $edad = 29.5;
        $mayor_edad = true;
        var_dump($nombre);
        var_dump($edad); 
        var_dump($mayor_edad);
        
        define("pi",3.1516);//con esta manera podemos declarar constanten en php 
        echo "<br>";
        print("mi nombre en: " . $nombre);//la concatenacion se ase con .
        echo "<br>";
        print(" la constante pi es: " . pi);
    ?>
</body>
</html>