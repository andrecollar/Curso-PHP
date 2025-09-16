<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas para manipular string</title>
</head>
<body>
    <?php
        echo 'strtolower($texto) - Transforma todos os caracteres da string em minusculas <br>';
        echo 'strtoupper($texto) - Transforma todos os caracteres da string em maiusculas <br>';
        echo 'ucfirst($texto) - Transforma o primeiro caractere da string em maiusculo <br>';
        echo 'strlen($texto) - Conta a quantidade de caracteres de uma string <br>';
        echo 'str_replace(< procura por >, < substitui por >, $texto) - Substitui uma cadeia de caracteres por outra dentro de uma string <br>';
        echo 'substr($texto, < posicao inicial >, < qtde caracteres >) - Retorna parte de uma string <br>';

        echo '<hr>';
        echo '<h1>Testando as funções</h1><br>';
        
        $texto = 'Curso Completo de PHP';
        echo $texto . '<br>';
        echo strtolower($texto) . '<br>';
        echo strtoupper($texto) . '<br>';
        echo ucfirst($texto) . '<br>';
        echo strlen($texto) .'<br>';
        echo str_replace('PHP','php', $texto) .'<br>';
        echo substr($texto, 0, 5);

    ?>
</body>
</html>