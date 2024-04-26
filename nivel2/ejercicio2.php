<?php
/*
- Ejercicio 2
Imagina que estamos en una tienda donde se vende:

Chocolate: 1 euro
Chiclos: 0,50 euros
Caramelos: 1,50 euros
Implementa un programa que permita añadir cálculos a un total de compras de ese tipo. Por ejemplo, que si compramos:

2 chocolates, 1 de chicles y 1 de caramelos, tengamos un programa que permita ir añadiendo los subtotales a un total, tal que así:

función(2 chocolates) + función(1 de chicles) + función(1 de carmelos) = 2 + 0.5 + 1.5

Siendo, por tanto, el total, 4.
*/

$producto1 = isset($_POST['producto1']) ? $_POST['producto1'] : 0;
$cantidad1 = isset($_POST['cantidad1']) ? $_POST['cantidad1'] : 0;
$producto2 = isset($_POST['producto2']) ? $_POST['producto2'] : 0;
$cantidad2 = isset($_POST['cantidad2']) ? $_POST['cantidad2'] : 0;
$producto3 = isset($_POST['producto3']) ? $_POST['producto3'] : 0;
$cantidad3 = isset($_POST['cantidad3']) ? $_POST['cantidad3'] : 0;



function carritoCompra($producto, $cantidad)
{
    switch ($producto) {
        case 'Chocolates':
            return $cantidad * 1.00;
            break;
        case 'Chicles':
            return $cantidad * 0.50;
            break;
        case 'Caramelos':
            return $cantidad * 1.50;
            break;
    }
}

$total = carritoCompra($producto1, $cantidad1) + carritoCompra($producto2, $cantidad2) + carritoCompra($producto3, $cantidad3);
?>

<link rel="stylesheet" href="../style.css">

<form action="./ejercicio2.php" method="post">

    <input type="text" name="producto1" value="Chocolates" >
    <input type="number" name="cantidad1" value="0">
    <p>Chocolates: 1€</p>
    <br>
    
    
    <input type="text" name="producto2" value="Chicles" >
    <input type="number" name="cantidad2" value="0">
    <p>Chicles: 0,50€</p>
    <br>
    
    <input type="text" name="producto3" value="Caramelos" >
    <input type="number" name="cantidad3" value="0">
    <p>Caramelos: 1,50€</p>
    <br>

    <input type="submit" value="Calcular">

    <p style="display: inline;">El resultado es:
        <strong>
            <?= sprintf("%.2f", floatval($total)) . "€"; ?>
        </strong>
    </p>
</form>