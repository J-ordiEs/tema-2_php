<?php

/*
- Ejercicio 1
La criba de Eratóstenes es un algoritmo pensado para encontrar números primos dentro de un intervalo dado. Basándote en la información del enlace adjunto, implementa la criba de
Eratóstenes dentro de una función, de tal forma que podamos invocar la función para un número concreto.
*/


// Criba de Eratóstenes
$limite = isset($_POST['limite']) ? $_POST['limite'] : 0;


function criba($limite): void
{
    $numeros = array_fill(2, $limite, true);
    $numeros[2] = true;
    // Consideramos 2 como el primer número primo
    
    // Recorremos los números y para cada uno
    for ($n = 2; $n < $limite; $n++) {
        // Si es primo, recorremos los múltiplos y los marcamos como no primos
        if ($numeros[$n]) {
            for ($i = $n * $n; $i < $limite; $i += $n) {
                $numeros[$i] = false;
            }
        }
    }

    // Mostramos la lista de números primos
    echo "Números primos: ";
    for ($n = 2; $n < $limite; $n++) {
        if ($numeros[$n]) {
            echo $n . " ";
        }
    }
}


?>

<link rel="stylesheet" href="../style.css">

<form action="ejercicio1.php" method="post">

    <input type="number" name="limite">
</form>

<?= criba($limite); ?>