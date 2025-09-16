<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <h1>WHILE</h1>


    <?php

        $num = 1;

        //operadores comparação / lógicos
        echo '-- Inicio do Loop -- <br>';
        while($num < 10) {
            echo "$num <br>";
           $num++;

        };
        echo '-- Fim do loop --'
    
    ?>
    <br><hr>
    <h1>DO WHILE</h1>

    <?php
        $x = 10;
        
        do {
            echo 'Entrou no do while';
            break;
        } while ($x > 9);
    
    ?>

    <br><hr>
    <h1>FOR</h1>

    <?php
        /* while (condição) {
        
        };

        do {
        
        } while(condição);
        
        */

        //VARIAVEL; CONDIÇÃO; INCREMENTO
        for($y = 1; $y <= 10; $y++) {
            echo "$y <br>";


        }
    
    ?>
</body>
</html>