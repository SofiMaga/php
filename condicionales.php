<!doctype html>
<html>
<head>
    <title>Edad</title>
    <meta charset="UTF-8"/>
</head>
<body>
    <?php
    $edad = 15;
    if($edad >= 18){
        echo("<br>Eres mayor de edad");
    }else if($edad < 18){
        echo("<br>Eres menor de edad");
    }else{
        echo("<br>Error de datos");
    }
    
switch($edad){
    case 18:
        echo("<br>Tienes 18");
        break;
    case 15:
        echo("<br>Tienes 15");
        break;
    default:
    echo("<br>No hay nada que celebrar");
}
?>
</body>
</html>