<?php

    function suma($x,$y){
        return $x+$y;
    }
    function resta($x,$y){
        return $x-$y;
    }
    function multiplicar($x,$y){
        return $x*$y;
    }
    function dividir($x,$y){
        return $x/$y;
    }

    //variable global
    //if($numero1 != "" && $numero2 != "" && $operacion != ""){

    if(isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["op"])){

        $numero1 = $_GET["num1"];
        $numero2 = $_GET["num2"];
        $operacion = $_GET["op"];

        if(!empty($numero1) && !empty($numero2) && !empty($operacion)){
            if($operacion == "suma"){
                $resultado = suma($numero1,$numero2);
            }else if($operacion == "resta"){
                $resultado = resta($numero1,$numero2);
             }else if($operacion == "multiplicar"){
                $resultado = multiplicar($numero1,$numero2);
            }else if($operacion == "dividir"){
                $resultado = dividir($numero1,$numero2);
            }
            echo("El resultado es: " .$resultado);
        
        }else{
            echo("Algun campo esta vacio");
        }
        
    }else{
        echo("No autorizado");
    }
?>