<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Estática x Dinamica</title>
</head>
<body>
    <?php 
        echo "variavel INT = Armazena numeros inteiros <br>";
        echo "variavel FLOAT - Armazena numeros decimais <br>";
        echo "variavel STRING - Armazena textos <br>";
        echo "variavel BOOL - Armazena valores logicos (true/false) <br>";
        echo "variavel ARRAY - Armazena varios valores em uma unica variavel <br>";
        echo "deve OBRIGATORIAMENTE iniciar com $ <br>";

        //string
        $nome = 'André';

        //int
        $idade = 27;

        //float
        $peso = 85.5;

        //boolean
        $fumante_sn = false; //true=1 ou false=vazio
        
    ?>

    <h1>Ficha cadastral</h1>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p>
</body>
</html>