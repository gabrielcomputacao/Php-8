
<?php

// TODO: Cria uma funcao chamada formatMoeda ( (float) $valor ) : string. Devolvendo o valor formatado em reais e com casas decimais

// = INGLES ==> receber === receive

function formatCoin(float $valor){
    
    echo $valor;

    $receiveValue =  number_format($valor, 3, ',' , '.');

    return "R$ $receiveValue";


}

echo '<br>';
echo formatCoin(23.878);



// TODO: cria uma string $aerea com 5 companhias, transforme em um array de 2 indices, e exiba com var_dump

    $aeres = ['azul', 'gol','latam', 'american airline', 'sky'];
    $aeresString = 'azul,gol,latam,american,airline,sky';

    $resultAeres = explode(',', $aeresString, 2);

    var_dump($resultAeres);


    $site = "www.google.com.br/teste";

    $google =  strpos($site,"/") ;
    echo '<br>';
    echo '<br>';

    $siteArray = explode('.', $site);

    echo $siteArray[1];


