<?php

    $teste2 = "gabriel";
    global $testinho;
    $testinho = 5;


    // funcoes anonimais nao conseguem enxergar o escopo acima
    $fn = function ($c) use ($teste2, $testinho) {
        echo $testinho;
        echo $teste2;
        return $c;
    };

    function somar($a, $b, $callback){
       
        $teste = $callback($a + $b);

        printf($teste);

    }

somar(1,2, $fn);

// ARROW FUNCTION

$arrowFunction = fn($x) => 'testando';

echo $arrowFunction(2);




