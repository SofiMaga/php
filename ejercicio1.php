<?php
$llueve = "si";
$es_feriado = "no";
$es_finde = "no";
#Programa de verdadeo y/o falso

if($llueve == "si" || $es_feriado == "si" || $es_finde == "si"){
    print("me quedo en casa");
}else{
    print("me voy al super");
}
print("<hr>");

$llueve2 = 1;
$es_feriado2 = null;
$es_finde2 = null;

if($llueve2 || $es_feriado2 || $es_finde2){
    print("me quedo en casa dos");
}else{
    print("me voy al super dos");
}