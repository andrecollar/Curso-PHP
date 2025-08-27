<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF - ELSE</title>
</head>
<body>
    <?php 
        echo 'OPERADORES DE COMPARAÇÃO (CONDICIONAIS) <br> <br>';
        echo 'Igual (==) - Verifica se os valores comparados são iguais. <br>';
        echo 'Identico (===) - Verifica se os valor comparados são iguais e do mesmo tipo. <br>';
        echo 'Diferente (!=) - Verifica se os valores comparados são diferentes. <br>';
        echo 'Diferente (<>) - Verifica se os valores comparados são diferentes. <br>';
        echo 'Não identico (!==) - Verifica se os valores comparados são diferentes e de tipos diferentes. <br>';
        echo 'Menor (<) - Verifica se o valor da esquerda é menor que o da direita. <br>';
        echo 'Maior (>) - Verifica se o valor da esquerda é maior que o da direita. <br>';
        echo 'Menor ou igual (<=) - Verifica se o valor da esquerda é menor ou igual ao da direita. <br>';
        echo 'Maior ou igual (>=) - Verifica se o valor da esquerda é maior ou igual ao da direita. <br><br>';
        
        //praticando os operadores de comparação


        if(7 != 2) {
            echo 'verdadeiro';

        }

        else {
            echo 'falso';
        }

        echo '<br><br><hr>';
        echo 'OPERADORES LÓGICOS <br><br>';
        echo 'E (AND ou &&) - Verdadeiro se todas as expressões forem verdadeiras. <br>';
        echo 'OU (OR ou ||) - Verdadeiro se uma ou mais expressões forem verdadeiras. <br>';
        echo 'XOR - Verdadeiro se uma das expressões forem verdadeiras, mas não ambas. <br>';
        echo 'NÂO (!) - inverte o resultado da expressão. <br><br>';

        //praticando os operadores lógicos
        if(5 == 3 AND 10 > 3) {
            echo 'Verdadeiro';
        }
        else {
            echo 'Falso';
        }

        echo '<br>';

        if(5 == 3 OR 10 > 3) {
            echo 'Verdadeiro';
        }
        else {
            echo 'Falso';
        }

        echo '<br>';

        if(5 == 3 XOR 10 > 3) {
            echo 'Verdadeiro';
        }
        else {
            echo 'Falso';
        }

        echo '<br>';

        if(!(5 == 3 XOR 10 < 3)) {
            echo 'Verdadeiro';
        }
        else {
            echo 'Falso';
        }

        echo '<br><br><hr>';
        echo 'EXEMPLO PRÁTICO <br><br>';

        //
        $usuario_possui_cartao_loja = true;
        $valor_compra = 500;
        $valor_frete = 50;

        $recebeu_desconto_frete = false;

        if($usuario_possui_cartao_loja AND $valor_compra >= 100) {
            $valor_frete = 0; 
            $recebeu_desconto_frete = true;
        }
      ?>

      <h1>Detalhes do pedido</h1>
      <p>Possui cartão da loja:
            <?php
            if($usuario_possui_cartao_loja) {
                echo 'Sim';
            }
            else {
                echo 'Não';
            }
            ?>  
      </p>

      <p>Valor da compra: <?= $valor_compra ?></p>

      <p>Recebeu desconto no frete?
        <?php
            if($recebeu_desconto_frete) {
                echo 'Sim';
            }
            else {
                echo 'Não';
            }
        ?>
      </p>

      <p>Valor do frete: <?= $valor_frete ?></p>

      <hr>
      <h1>Condições encadeadas</h1>
      <?php 
        
        if($usuario_possui_cartao_loja AND $valor_compra >= 400) {
            $valor_frete = 0;            
        }

        else if($usuario_possui_cartao_loja AND $valor_compra >= 300) {
            $valor_frete = 10;            
        }

        else if($usuario_possui_cartao_loja AND $valor_compra >= 100) {
            $valor_frete = 25;             
        }
        
        else {
            $recebeu_desconto_frete = false;
        }

      ?>

      <h2>Detalhes do pedido</h2>
      <p>Possui cartão da loja:
            <?php
            if($usuario_possui_cartao_loja) {
                echo 'Sim';
            }
            else {
                echo 'Não';
            }
            ?>  
      </p>

      <p>Valor da compra: <?= $valor_compra ?></p>

      <p>Recebeu desconto no frete?
        <?php
            if($recebeu_desconto_frete) {
                echo 'Sim';
            }
            else {
                echo 'Não';
            }
        ?>
      </p>

      <p>Valor do frete: <?= $valor_frete ?></p>
</body>
</html>