<?php
#Definicion de variables y asignacion de datos
$a = 8;
$b = 3;
echo "<h3>Operaciones aritmeticas</h3>";
echo "a= $a y b= $b";
echo "<br>Suma:".($a+$b);
echo "<br>Resta:".($a-$b);
echo "<br>Division:".($a/$b);
echo "<br>Multiplicacion:".($a*$b);
echo "<br>Exponente b:".($a**$b);
echo "<br>Resto b:".($a%$b);
?>

<?php
$x = 8;
$y = 3;
echo "<h3>Operadores de comparacion</h3>";
echo "x= $x y y= $y";
echo "<br>¿X es igual a Y?".(&x == $y);
echo "<br>¿X es distinto a Y?".(&x != $y);
echo "<br>¿X es menor a Y?".(&x < $y);
echo "<br>¿X es mayor a Y?".(&x > $y);
echo "<br>¿X es mayor o igual a Y?".(&x >= $y);
echo "<br>¿X es menor o igual a Y?".(&x <= $y);
?>

<?php

echo "<h3>Operadores logicos Y, O, negacion</h3>";
echo "A es igual a B y X es mayor a Y".($a == $b && $x > $y);
echo "<br>A es igual a B o X es igual a Y".($a == $b || $x == $y);
echo "<br>Negar (B es igual a X)".!($b == $x);
?>