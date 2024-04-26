<?php
/*
- Ejercicio 1
Escribe una función que determine la cantidad total a pagar por una llamada telefónica según las siguientes premisas:

Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos.
Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5 céntimos.
*/

setlocale(LC_MONETARY, 'es_ES');

$minuto = isset($_POST['min']) ? $_POST['min'] : 0;

function precioLlamada($min): string {
    $costeLlamada = 0.10;
    if ($min > 3) {
        $costeLlamada += ($min - 3) * 0.05;
    }
    return sprintf("%.2f", floatval($costeLlamada));
}

?>

<link rel="stylesheet" href="../style.css">

<form action="../nivel2/ejercicio1.php" method="post">

    <input type="number" name="min" >
    <input type="submit" value="Enviar">

</form>


<p>
    El coste de la llamada es: <?= "€" .  precioLlamada($minuto)?>
</p>