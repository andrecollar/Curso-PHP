<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador Ternário</title>
</head>
<body>
    <?php 
        echo 'OPERADOR TERNÁRIO <br><br>';
        echo 'O operador ternário é uma forma abreviada de escrever uma estrutura condicional if-else. <br>';
        echo 'A sintaxe do operador ternário é: condição ? valor_se_verdadeiro : valor_se_falso; <br><br>';

        //variaveis
        $usuario_possui_cartao_loja = true;
        $valor_compra = 500;
        $valor_frete = 50;
        $recebeu_desconto_frete = false;

        //lógica
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
        <!-- <condição> ? true : false -->
      <h2>Detalhes do pedido</h2>
      <p>
        Possui cartão da loja: <?= $usuario_possui_cartao_loja ? 'SIM' : 'NÃO'; ?>  
      </p>

      <p>Valor da compra: <?= $valor_compra ?></p>

      <p>
        Recebeu desconto no frete? <?= $recebeu_desconto_frete ? 'SIM' : 'NÃO' ?>
      </p>

      <p>Valor do frete: <?= $valor_frete ?></p>
        
    
</body>
</html>