<?php
/*
- Ejercicio 5
Escribir una función para verificar el grado de un/a estudiante de acuerdo con la nota.

Condiciones:

Si la nota es 60% o más, el grado debería ser Primera División.
Si la nota está entre el 45% y el 59%, el grado debería ser Segunda División.
Si la nota está entre 33% a 44%, el grado debería ser Tercera División.
Si la nota es menor a 33%, el estudiante reprobará.
*/

$nota = isset($_POST['nota']) ? $_POST['nota'] : 0;

function verificarGrado($nota)
{
    if ($nota >= 60) {
        echo "Primera División.";
    } elseif ($nota >= 54 && $nota <= 59) {
        echo "Segunda División.";
    } elseif ($nota >= 33 && $nota <= 44) {
        echo "Tercera División.";        
    }elseif ($nota < 33){
        echo "Has reprobado capullo";
    }else{
        echo "No has ingresado la nota ¿Como quieres que sepamos que division estas?";
    }
}

?>
<style>
    :root {
        color-scheme: light dark;
    }

    * {
        margin: 5px;
    }

    body {
        font-family: 'Courier New', Courier, monospace;
        display: grid;
        place-content: center;
    }
</style>

<form action="ejercicio5.php" method="post">
    <label for="nota">
        ¿Cual es tu nota?
    </label>
    <input type="number" name="nota">
</form>

<h1>
    <?= verificarGrado($nota)?>
</h1>