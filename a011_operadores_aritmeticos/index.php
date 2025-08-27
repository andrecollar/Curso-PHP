<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>
<body>
    <?php
        echo 'Adicção (+) <br>';
        echo 'Subtração (-) <br>';
        echo 'Multiplicação (*) <br>';
        echo 'Divisão (/) <br>';
        echo 'Módulo (%) - Resto da divisão <br>';

        //Praticando operadores aritméticos
        echo '<br><hr>';
        echo '<h1>Praticando operadores aritméticos</h1><br>';

        $num1 = 13;
        $num2 = 4;

        echo "A soma entre $num1 e $num2 é = " . ($num1 + $num2);
        echo '<br>';
        echo "A subtração entre $num1 e $num2 é = " . ($num1 - $num2);
        echo "<br>";
        echo "A multiplicação entre $num1 e $num2 é = " . ($num1 * $num2);
        echo "<br>";
        echo "A divisão entre $num1 e $num2 é = " . ($num1 / $num2);
        echo "<br>";
        echo "O módulo entre $num1 e $num2 é = " . ($num1 % $num2);

        echo "<br><hr>";
        echo '<h1> Operações aritméticas na atribuição de valores</h1><br>';

        $x = 10;
        $x = $x + 5; //15
        echo "O valor de x é = $x";

        $y = 10;
        $y += 10; //20
        echo "<br>O valor de y é = $y";
        

    
    ?>
</body>
</html>