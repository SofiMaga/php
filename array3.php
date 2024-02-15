<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Array 3</title>
</head>
<body>
    <?php
    echo "<h3>Productos</h3>";
    $productos = array(
        array("Heladera",2500000,18),
        array("Microonda",1500000,9),
        array("Cocina",5900000,21),
        array("Licuadora",450000,15),
        array("Mixer",260000,5),
        array("Ventilador",150000,15)
    );
    //Imprimir primera forma
    for($x = 0 ; $x < count($productos);$x++){
        print("<br>".$productos[$x][0].", precio: ".$productos[$x][1]);
    }

    //Imprimir segunda forma
    echo("<hr>");
    echo "<h3>Productos</h3>";
    for($x = 0; $x < count($productos); $x++){
        print("<br>Producto $x: ");
        for($y = 0; $y < 3; $y++){
            print(" - ");
            print($productos [$x]  [$y]);
        }
    }

    //Imprimir tercera forma
    echo("<hr>");
    echo "<h3>Productos</h3>";
    foreach($productos as $p){
        print("<hr>" );
        foreach($p as $item){
            print($item." | " );
        }
    }
    ?>
</body>
</html>