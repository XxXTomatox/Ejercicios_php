<?php 
    //tabla de verdad
    var_dump(false and false);
    echo "<br>";
    var_dump(true and false);
    echo "<br>";
    var_dump(false && true);
    echo "<br>";
    var_dump(true && true);
    echo "<br>";
    //tabla de verdad or 
    var_dump(false or false);
    echo "<br>";
    var_dump(false or true);
    echo "<br>";
    var_dump(true | false);
    echo "<br>";
    var_dump(true | true);
    echo "<br>";
    //tabla de verdad not
    var_dump(!false);
    echo "<br>";
    var_dump(!true);
?>