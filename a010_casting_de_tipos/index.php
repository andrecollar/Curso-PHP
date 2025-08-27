<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting de tipos</title>
</head>
<body>
    <?php

        //gettype() => retonar o tipo da variavel
        $valor = 10;
        $valor2 = (double) $valor; //casting de tipos


        echo gettype($valor);
        echo '<br>';
        echo gettype($valor2);
    
    ?>
</body>
</html>