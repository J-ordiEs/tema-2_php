<?php
/*
- Ejercicio 6
Charlie me mordió el dedo! Charlie te morderá el dedo exactamente el 50% del tiempo.

Escribe La función isBitten () que devuelve TRUE con un 50% de probabilidad y FALSE de lo contrario.
*/

function isBitten(): bool
{
    return rand(0, 1);
}

?>

<link rel="stylesheet" href="../style.css">

<?php if (isBitten()) : ?>

    <strong>true</strong>

<?php else : ?>

    <strong>false</strong>

<?php endif ?>