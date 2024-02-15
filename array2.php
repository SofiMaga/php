<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Array 2</title>
</head>
<body>
    <?php
    echo "<h3>Edades</h3>";
    $edades = array("Sofia"=>"18","Ninfa"=>"45","David"=>"17");
    echo("Sofia tiene".$edades['Sofia']."años.");
    echo("<hr>");

    foreach($edades as $x => $valor){
        echo ("<br>Nombre: ".$x.", edad:".$valor);
        echo("<br>");
    }
    ?>
</body>
</html>