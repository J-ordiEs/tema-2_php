<?php
#ejercicio 1
$numInt = 10;

$numDouble = 120.123798123123;

$str = "Hi everyone!";

define('NAME', "Jorge");

#ejercicio 2

$greeting = "Hello, World!";

$curse = "Este es el curso de PHP";

#ejercicio 3

#a)
$x = 1;

$y = 2;

$n = 112.1237981;

$m = 23.12379812;

#b)

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$char = $_POST['char'];

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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        :root {
            color-scheme: light dark;
        }

        body {
            font-family: 'Courier New', Courier, monospace;
            display: grid;
            place-content: center;
        }

        option {
            font-size: large;
        }
    </style>
</head>

<body>
    <!--Ejercicio 1-->
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

    <!--Ejercicio 3-->
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

    <form action="nivel_1.php" method="post">
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
                <?= calculadora(10, 2, '+');?>
            </strong>
        </p>
    </form>

    <!-- ejercicio 4 -->

    <p>
        <?= contar(10) ?>
    </p>

</body>

</html>