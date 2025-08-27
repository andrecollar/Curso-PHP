<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>
<body>
    <?php
        $idade = 70;
        $peso = 55;

        if(($idade >= 16 AND $idade <= 69) AND $peso >= 50){
            echo 'Atende aos requisitos';
        }
        else {
            echo 'Não atende aos requisitos';
        }
    ?>
</body>
</html>