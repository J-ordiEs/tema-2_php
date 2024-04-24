<?php

/*
- Ejercicio 3
a) Declara dos variables X e Y de tipo int, dos variables N y M de tipo double y asigna a cada una un valor. A continuación, muestra por pantalla para X e Y :

El valor de cada variable.
La suma.
El resto.
El producto.
El módulo.
Por N y M realizarás lo mismo.

Para todas las variables (X, Y, N, M):

El doble de cada variable.
La suma de todas las variables.
El producto de todas las variables.
b) Crea una función  Calculadora que entre dos números por parámetro, y en un tercer parámetro te permita realizar la suma, la resta, la multiplicación o la división de los dos números.

*/

#a)
$x = 1;

$y = 2;

$n = 112.1237981;

$m = 23.12379812;

#b)

$num1 = isset($_POST['num1']) ? $_POST['num1'] : 1;
$num2 = isset($_POST['num2']) ? $_POST['num2'] : 1;
$char = isset($_POST['char']) ? $_POST['char'] : '+';

function calculadora(int $num1 = 0,  $num2, string $char)
{

    if ($char === '+') {
        return $num1 + $num2;
    } elseif ($char === '-') {
        return $num1 - $num2;
    } elseif ($char === '*') {
        return $num1 * $num2;
    } elseif ($char === '/') {
        return $num1 / $num2;
    }
}
?>

<link rel="stylesheet" href="../style.css">


<!--html-->
<h3>ejercicio 3</h3>

<!-- a) -->
<p>x =
    <?= $x; ?><br>
    y =
    <?= $y; ?><br>
    suma x + y =
    <?= $x + $y; ?><br>
    resta x - y =
    <?= $x - $y; ?><br>
    producto x * y =
    <?= $x * $y; ?><br>
    modulo x % y =
    <?= $x % $y; ?><br>
</p>

<p>n =
    <?= $n; ?><br>
    m =
    <?= $m; ?><br>
    suma n + m =
    <?= $n + $m; ?><br>
    resta n - m =
    <?= $n - $m; ?><br>
    producto n * m =
    <?= $n * $m; ?><br>
    modulo n % m =
    <?= $n % $m; ?><br>
</p>

<p>
    el doble de x es:
    <?= $x * 2; ?><br>
    el doble de y es:
    <?= $y * 2; ?><br>
    el doble de n es:
    <?= $n * 2; ?><br>
    el doble de m es:
    <?= $m * 2; ?><br>
</p>

<!-- b) -->
<form action="ejercicio3.php" method="post">
    <input type="number" name="num1">
    <select name="char">
        <option value="+">➕</option>
        <option value="-">➖</option>
        <option value="*">✖</option>
        <option value="/">➗</option>
    </select>
    <input type="number" name="num2">
    <input type="submit" value="Calcular">
    <p style="display: inline;">El resultado es:
        <strong>
            <?= calculadora($num1, $num2, $char); ?>
        </strong>
    </p>
</form>