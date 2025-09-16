<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        //sequenciais (numéricos)
       /* $lista_frutas = array('banana', 'maça', 'morango', 'uva');
        $lista_frutas[] = 'abacaxi';
        var_dump($lista_frutas);
        echo '<br>';
        print_r($lista_frutas);

        echo '<br>';
        echo $lista_frutas[2]; */

        //associativos
        /* $lista_frutas = array('ba' =>'banana', 'ma' => 'maça', 'mo' => 'morango', 'u' => 'uva');
        echo $lista_frutas[2]; */

        //multidimensional
        /*
        $lista_coisas = [];

        $lista_coisas['frutas'] = ['banana', 'maça', 'morango', 'uva', 'abacaxi'];
        $lista_coisas['pessoas'] = ['joão', 'maria', 'josé'];

        echo '<pre>';
        var_dump( $lista_coisas);
        echo '</pre> <br>';

        echo $lista_coisas['pessoas'][2]; */

        //pesquisa no array

        //in_array() -> true ou false para a existencia do que está sendo procurado
        //array_search() -> retorna o INDICE do valor pesquisado caso ele exista (se caso nao exista, retorna NULL)

        $lista_frutas = array('banana', 'maça', 'morango', 'uva');
        print_r($lista_frutas);

        echo in_array('maça',$lista_frutas);
        echo '<br>';
        echo array_search('morango',$lista_frutas);

    ?>
</body>
</html>