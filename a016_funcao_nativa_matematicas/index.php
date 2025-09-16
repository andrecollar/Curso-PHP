<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas para tarefas matemáticas</title>
</head>
<body>
    <?php
        echo 'ceil($numero) - Arredonda o valor para cima <br>';
        echo 'floor($numero) - Arredonda o valor para baixo <br>';
        echo 'round($numero) - Arredonda o valor com base nas casas decimais <br>';
        echo 'rand() - Gera um inteiro aleatório <br>';
        echo 'sqrt($numero) - Retorna a raiz quadrada <br>';
        echo '<hr>';

        echo '<h1> Praticando as funções natias para tarefas matemáticas</h1> <br>';

        echo ceil(25.4) . '<br>';
        echo floor(25.4) . '<br>';
        echo round(24.6) . '<br>';
        echo rand(0, 250) .'<br>';
        echo sqrt(100) . '<br>'
    
    ?>
</body>
</html>