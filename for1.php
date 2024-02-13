<!doctype html>
<html>
<head>
    <title>Multiplicacion</title>
</head>
<body>
    <?php
    for($x = 1 ; $x <= 10 ; $x++){
        for($y = 1 ; $y <= 10 ; $y++){
            print("<br>$x * $y =".($x * $y));
        }
        print("<hr>");
    }
    ?>
</body>
</html>