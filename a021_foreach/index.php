<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <?php
        $itens = ['sofa', 'mesa', 'cadeira', 'fogão', 'geladeira'];
        print_r($itens);
        echo '<br>';

        foreach($itens as $item) {
            echo "$item <br>";

            if ($item == 'mesa') {
                echo '(*Compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras)';
            }
        }
    ?>







</body>
</html>