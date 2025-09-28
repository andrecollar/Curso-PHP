<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando Foreach</title>
</head>
<body>
    <?php
        $funcionarios = [
            ['nome' => 'joao', 'salario' => '2500', 'data_nascimento' => '11/11/1111'],
            ['nome' => 'maria', 'salario' => '3500'],
            ['nome' => 'josé', 'salario' => '4500']
        ];
        
        print_r($funcionarios);
        echo '<br>';

        foreach($funcionarios as $idx => $funcionario){
            foreach($funcionario as $idx2 => $valor) {
                echo "$idx2 - $valor <br>";
            };
            echo '<hr>';
        }
    
    
    ?>
</body>
</html>