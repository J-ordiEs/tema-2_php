<?php

$hasta = isset($_POST['hasta']) ? $_POST['hasta'] : 10;
$de = isset($_POST['de']) ? $_POST['de'] : 1;

function contar(int $hasta = 10, int $de = 1): void
{
    $count = 0;
    for ($i = 0; $i < $hasta; $i += $de) {
        $count += $de;
        echo "$i + $de  = $count <br>";
    }
    echo "Hemos contado hasta $i ";
}

?>

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

<form action="ejercicio4.php" method="post">
    <label for="hasta">
        ¿Hasta cuánto deseas contar?
        <input value="10" type="number" name="hasta" id="hasta">
    </label>
    <br>
    <label for="de">
        ¿De cuánto a cuánto deseas contar?
        <input value="1" type="number" name="de" id="de">
    </label>
    <input type="submit" value="Contar">
</form>
<p><?= contar($hasta, $de) ?></p>