<?php

// STRING AND INT

    $nome = "gabriel";

    $sobrenome = 'teste';

    $nomeJunto = "$nome henrique";

    echo $nomeJunto;
    echo '<br/>';

    echo gettype($nomeJunto);

    $idade = 50;
    $peso = 68.75;
    echo '<br/>';
    echo get_debug_type($idade);
    echo '<br/>';

    echo gettype($idade);
    echo '<br/>';
    echo gettype($peso);

// ARRAY

$aereas = [ "Gol", "Latam" , 'azul' ];

echo '<br/>';

echo gettype($aereas);

// CLASS

class Cliente{
    public function __construct( public string $nome){
        echo "$this->nome teste";
    }
}

$joao = new Cliente('joao');

echo '<br/>';

echo gettype($joao);

echo '<br/>';

echo get_debug_type($joao);

// iterable

$linhasAereas =  function(): iterable {
    return ['gabriel', 'igor', 'estela'];
};

echo '<br/>';

/* 
    ? o echo tem dificuldades de mostrar true or false por isso precisa ser o var_dump
*/

var_dump( is_iterable($linhasAereas()));

// iterable -> mostra se a variavel é percorrivel como um array ou objeto

// callable -> mostra se algo é chamavel , como um funcao

// NULL e RESOURCE

$nulo = NULL;
echo '<br/>';
echo gettype($nulo);

$arquivo = fopen('./comandos.txt', 'a+');
echo '<br/>';
echo gettype($arquivo);
echo '<br/>';
echo get_debug_type($arquivo);

// Mixed

function executar( mixed $parametro ): void{
    // mixed pode ser qualquer tipo de dados


    // void é quando a funcao nao retorna nada. vazio
}

