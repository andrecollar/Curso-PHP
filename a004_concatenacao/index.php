<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenação</title>
</head>
<body>
    <?php 
        $nome = 'André';
        $cor = 'preto';
        $idade = 27;
        $atividade_preferida = 'jogar videogames';



        //operador . de concatenação
        echo 'Olá '. $nome .', vi que sua cor preferida é '. $cor .', estou vendo tambem que você possui '. $idade .' anos e que gosta de '. $atividade_preferida .'';

        //aspas duplas ""
        echo '<br>';
        echo "Olá $nome, vi que sua cor preferida é $cor, estou vendo tambem que você possui $idade anos e que gosta de $atividade_preferida";
    ?>
</body>
</html>