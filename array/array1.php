<?php

echo "ARRAY COUNT VALUES------------------------------";


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

// conta quantas vezes um valor se repete dentro do array, e retorna um array de chave valor informando o campo e quantas vezes repetiu

$values = ["banana","watermelon",'melon','limon','banana'];

var_dump(array_count_values($values));

$count_values = array_count_values($values);
echo $count_values['banana'];

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo "ARRAY UNIQUE------------------------------";

echo '<br>';
echo '<br>';

    $arrayNotas = [1,2,2,3,3,4,4,4,4,5,6,7,8,9];

// ? array unique tira as partes repetidas do array

    var_dump(array_unique($arrayNotas, SORT_NUMERIC));

    $numeric = array_unique($arrayNotas, SORT_NUMERIC);
    echo $numeric[1];


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo "ARRAY MERGE------------------------------";

echo '<br>';
echo '<br>';

    // ? array merge mescla dois array, mescla (junta) dois arrays em um so, se encontrar a mesma chave ele subscreve e deixa so uma
    // ? array com indices numericos sempre sao reordenados, mesmo setando um indice na mao, ao mesclar os indices sao reajustados

    $array1 = [1,2,3,4];
    $array2= [10,11,12,13,14];

    var_dump( array_merge($array1, $array2) );




echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo "ARRAY COMBINE------------------------------";

echo '<br>';
echo '<br>';

// ? tendo dois arrays ao usar o combine um vira as chaves outro os values e devolve um terceiro com a juncao chave e valor
//  ? as quantidades de indices tem que ser igual dos dois, se nao da erro

$array11 = ['value1', 'value2', 'value3'];
$array12 = [1,2,3];

var_dump( array_combine($array11, $array12) );

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo "ARRAY DIFF------------------------------";

echo '<br>';
echo '<br>';

// ? podemos verificar a diferenca de um array para outro

$array13= ['red',1,2,3,4];

var_dump( array_diff($array13, $array12) );

//  ? a comparacao é do ´primeiro array para o segundo, a ordem importa, compara se todos os valores do primeiro estao contidos no segundo ou mais


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';