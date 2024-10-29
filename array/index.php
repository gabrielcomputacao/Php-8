<?php

// TODO: Arrays - range forma um array passando o começo , o final e de quanto em quanto a diferenca de cada um

// TODO Arrays - count conta quantos dados tem no array

$array1 = ["gabriel", "igor", "estela"];

$array0 = array('pedra', 'papel', 'tesoura');

echo "ARRAY COUNT AND ARRAY RANGE ------------------------------";
echo '<br>';

var_dump(count($array1), $array0);

echo '<br>';
echo '<br>';
echo '<br>';

$arrayRange = range(0,10,1);

var_dump($arrayRange);

echo '<br>';
echo '<br>';
echo '<br>';

// TODO: Array keys and array values - array keys traz somente as chaves e tem como fazer buscas, values traz os valores e nao tem como fazer buscas pela funcao

echo "ARRAY KEYS AND ARRAY VALUES ------------------------------";
echo '<br>';

$frutas = ["tropical" => 'pineapple', 'apple', 'graves', 'pear'];

var_dump(array_keys($frutas));

echo '<br>';
echo '<br>';

var_dump(array_keys($frutas, 'tropical'));

echo '<br>';
echo '<br>';

var_dump(array_values($frutas));


//  TODO: Array Reverse, reverte os dados do array

echo "ARRAY REVERSE ------------------------------";
echo '<br>';

echo '<br>';
echo '<br>';
echo '<br>';

$browser = ['chrome', 'firefox','opera'] ;

// ? o segundo parametro mantem os indices que foram criados originalmente, mesmo invertendo os valores

var_dump( array_reverse($browser) );

echo '<br>';
echo '<br>';
echo '<br>';

// TODO: Array adicionando e removendo valores do array

echo "ARRAY PUSH, ARRAY POP AND ARRAY UNSHIFT, ARRAY SHIFT ------------------------------";
echo '<br>';

$cores = ["red","black","yellow"] ;

var_dump($cores);


echo '<br>';
echo '<br>';

// ? array_push precisa receber o array e o elemento a ser adicionado no array, ele retorna tambem o length do tamanho do array depois da adicao do elemento
// retorna o tamanho dos elementos depois de adicionado o dado, o array_push adiciona ao final
var_dump(array_push($cores, "white", "blue"));


var_dump($cores);

echo '<br>';
echo '<br>';

// para removver do final usar array_pop
// ele retorna o ultimo valor que foi removido do array
array_pop($cores);

var_dump($cores);

echo '<br>';
echo '<br>';

// ? adiciona no começo do array
array_unshift( $cores ,'orange');

var_dump($cores);

//  remove da primeira colocacao do array
array_shift($cores);

var_dump($cores);
echo '<br>';
echo '<br>';
echo '<br>';

echo "ARRAY ------------------------------";


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';