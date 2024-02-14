<!doctype html>
<html>
<head>
    <title>Mi primera Web</title>
    <meta charset="UTF-8"/>
</head>
<body>
    <h1>Tienda Online</h1>
    <?php
    $edad = 15;
    if($edad >= 18 && $edad <=80 ){
        echo("<br>Eres mayor de edad");
        header("Location: https://www.google.com");
    }else if($edad < 18 && $edad > 10 ){
        echo("<br>Eres menor de edad");
        $mensaje ="<script> alert('Tas chiquito');</script>";
    }else{
        header("Location: https://www.youtube.com");
        echo("");
    }