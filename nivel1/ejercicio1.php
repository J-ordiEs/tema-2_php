<?php

#ejercicio 1
/*
- Ejercicio 1
Define una variable de cada tipo: integer ,  double ,  string y boolean . Imprímelas por pantalla.

Después crea una constante que incluya tu nombre y muéstralo en formato título por pantalla.
 */
$numInt = 10;

$numDouble = 120.123798123123;

$str = "Hi everyone!";

define('NAME', "Jorge");
?>
<link rel="stylesheet" href="../style.css">
<!-- html -->
<h3>ejercicio 1</h3>
<p>
    print Integer:
    <?= $numInt; ?><br>
    print Double:
    <?= $numDouble; ?><br>
    print String:
    <?= $str; ?>
</p>
<h4>
    print Constant
    <?= NAME; ?>
</h4>