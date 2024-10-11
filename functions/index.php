<?php

    function somar(){
        echo 2 + 2;
    }

    somar();

// Valor padrao deve ir para a direita, nao pode ser o primeiro parametro

function somar1( $b,$a = 10){
    echo "$a , $b";
}


somar1(10);

// ? Novidade no php 8 parametros passados por nome

function somar2($resultado1, $resultado2){

    echo $resultado1;

}

somar2( resultado2: 30, resultado1: 40 );

//  com atribuição de tipo no parametro

function somar3( int $a){
    echo "$a";
}

somar3(55);

// Função sempre retorna alguma coisa
// Subrotina somente executa algo e não retorna nada

//  PHP converte o resultado para o tipo do retorno que foi setado
function somar4( $a): float{
    return $a;
}

// converte o resultado para float
var_dump( somar4(10) );

// VARIAVEIS FUNCOES


function desenhar(){
    echo "----";
}

$e = 'desenhar';
$e();



