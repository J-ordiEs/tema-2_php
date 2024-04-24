<?php
/*
- Ejercicio 1
Escribe una función que determine la cantidad total a pagar por una llamada telefónica según las siguientes premisas:

Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos.
Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5 céntimos.
*/

$minuto = isset($_POST['min']) ? $_POST['min'] : 0;

function precioLlamada($min) {
    if ($min) {
        echo "\$ valor es de 3";
    }
}
?>

<link rel="stylesheet" href="../style.css">

<form action="../nivel2/ejercicio1.php" method="post">

    <input type="number" name="min" >

</form>


<?= precioLlamada($min)?>