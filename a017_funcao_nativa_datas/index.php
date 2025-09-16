<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcões nativas para manipular datas</title>
</head>
<body>
    <?php
        echo 'date(formato) - Recuperar a data atual <br>';
        echo 'date_default_timezone_get(timezone) - Recuperar o timezone default da aplicação <br>';
        echo 'date_default_timezone_set(timezone) - Atualziar o timezone default da aplicação <br>';
        echo 'strtotime(data) - Transformar datas textuais em segundos <br>';

        echo date('d/m/Y H:i') . ' <br>';
        echo date_default_timezone_get() . ' <br>';
        echo date_default_timezone_set('America/Sao_paulo');
        echo date_default_timezone_get() . ' <br>';
        echo date('d/m/Y H:i') . ' <br>';  
        
        $data_inicial = '2018-04-24';
        $data_final = '2018-05-15';

        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);

        echo $data_inicial . ' -> ' . $time_inicial . '<br>';
        echo $data_final . ' -> ' . $time_final . '<br>';

       $diferenca_times = $time_final - $time_inicial;
       echo ''. $diferenca_times .'<br>';
    
    ?>
</body>
</html>