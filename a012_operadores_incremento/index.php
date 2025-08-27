<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Incremento</title>
</head>
<body>
    <?php
        echo 'Pré-incremento (++$a) - Adiciona uma unidade antes de retornar $a <br>';
        echo 'Pós-incremento ($a++) - Retorna $a e depois adiciona uma unidade <br>';
        echo 'Pré-decremento (--$a) - Subtrai uma unidade antes de retornar $a <br>';
        echo 'Pós-decremento ($a--) - Retorna $a e depois diminiu uma unidade <br>';

        echo '<hr><h1>Praticando com Operadores de Incremento</h1><br>;';

        echo '<h2> Pós-incremento </h2><br>';

        $a = 7;
        echo "O valor contido em a é $a <br>";
        echo "O valor contido em a após o incremento é = " . $a++;
        echo "<br> O valor atualizado em a é $a <br><hr>";

        echo '<h2> Pré-incremento </h2><br>';

        $b = 7;
        echo "O valor contido em b é $b <br>";
        echo "O valor contido em b após o incremento é = " . ++$b;
        echo "<br> O valor atualizado em b é $b <br><hr>";

        echo '<h2> Pós-decremento </h2><br>';

        $c = 7;
        echo "O valor contido em c é $c <br>";
        echo "O valor contido em c após o incremento é = " . $c--;
        echo "<br> O valor atualizado em c é $c <br><hr>";

        echo '<h2> Pré-decremento </h2><br>';

        $d = 7;
        echo "O valor contido em d é $d <br>";
        echo "O valor contido em d após o incremento é = " . --$d;
        echo "<br> O valor atualizado em d é $d <br>";



    
    
    ?>
</body>
</html>