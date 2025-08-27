<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <h1>Introdução</h1>
    <?php
       function exibirBoasVindas() {
        echo "Bem-vindo ao curso de PHP<br>";
       };
       
    
       function calcularAreaTerreno($largura, $comprimento) {
            $area = $largura * $comprimento;
            return $area;
       }

       exibirBoasVindas();
       echo calcularAreaTerreno(10, 20);
    ?>

    
</body>
</html>