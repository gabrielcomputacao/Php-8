<?php

echo '<br>';
echo '<br>';

echo "ARRAY COMPACT ------------------------------";

echo '<br>';
echo '<br>';

$city = "sao paulo";
$state = "SP";
$country = "braisl";


// ? compact procura todas as variaveis que tem na pagina e compacta dentro de um array, se ele nao achar ele da undefined
var_dump( compact("city","state","country") );

echo '<br>';
echo '<br>';

echo "ARRAY EXTRACT ------------------------------";

echo '<br>';
echo '<br>';

$person = [
    "nome" => "gabriel",
    "idade" => 27,
    "pais" => "brasil"
];

// ? extract ele tira as variaveis de dentro de um array e ja cria essas variaveis no php, mesmo elas nao estando na tela

var_dump(extract($person));
var_dump($pais);

echo "ARRAY LIST ------------------------------";
echo '<br>';
echo '<br>';

$carts = ["A","K","1"];

// list retira as ordens do array e vai colocando dentro das variaveis
 list( $firstCart) = $carts;

 var_dump($firstCart);


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo "ARRAY SHUFFLE ------------------------------";
echo '<br>';
echo '<br>';

$arrayShuffle = ["A","K","1","2","3","4","5"];

//  shuffle embaralha um array, muda diretamente na memoria a variavel, shuffle retorna true or false caso consigo ou nao embaralhar

shuffle($arrayShuffle);

var_dump($arrayShuffle);
echo '<br>';
echo '<br>';

// ? array rand traz um numero aleatorio de indice com relacao ao array passado

var_dump( array_rand($arrayShuffle) );

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


echo "ARRAY SORT ------------------------------";
echo '<br>';
echo '<br>';

    // ? sort organiza um array com base na ordem alfabetica, o segundo parametro é um parametro para fazer ordenacao por numero

    $cars = ["palio","gol","fiesa","civic","zafira","Uno"];
    sort($cars);


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo "ARRAY json_encode and json_decode ------------------------------";
echo '<br>';
echo '<br>';

// codifica codigo php e faz virar json

echo json_encode($cars);


// json_decode decodifica um json e transforma em objeto ou array para o php






