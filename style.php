<!doctype html>
<html>
<head>
    <title>Par y Impar</title>
    <style>
        body{
            background-color: black;
        }
        .estilo_par{
            color:purple;
        }
        .estilo_impar{
            color:skyblue;
        }
    </style>
</head>
<body>
    
    <?php
    for($x = 1 ; $x <= 100 ; $x++){
        if($x % 2 == 0){
            echo("<p class= 'estilo_par'> $x </p>");
        }else{
            echo("<p class= 'estilo_impar'> $x </p>");
        }
    }
    ?>
</body>
</html>
