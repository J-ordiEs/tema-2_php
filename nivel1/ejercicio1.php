<?php
#ejercicio 1
$numInt = 10;

$numDouble = 120.123798123123;

$str = "Hi everyone!";

define('NAME', "Jorge");
?>
<link rel="stylesheet" href="../style.css">
<!-- html -->
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