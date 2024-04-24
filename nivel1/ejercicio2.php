<?php
// - Ejercicio 2
// Imprime por pantalla " Hello, World! " utilizando una variable. Después:

// Transforma todos los caracteres del string a mayúsculas e imprime en pantalla.
// Imprime por pantalla el tamaño (longitud) de la variable.
// Imprime por pantalla el string en orden inverso de caracteres.
// Crea una nueva variable con el contenido “ Este es el curso de PHP ” e imprime por pantalla la concatenación de ambos strings.

$greeting = "Hello, World!";

$curse = "Este es el curso de PHP";

?>

<link rel="stylesheet" href="../style.css">

<!--Ejercicio 2-->

<h3>ejercicio 2</h3>
<p>Printing:
    <?= $greeting ?><br>
    Printing in capital letter:
    <?= strtoupper($greeting); ?><br>
    Printing length:
    <?= strlen($greeting); ?><br>
    Printing string reverse:
    <?= strrev($greeting); ?><br>
    <?= $curse . " " . '"' . $greeting . '"'; ?>
</p>