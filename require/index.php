<?php

    echo "A";

    // ? O require se caso chamar o mesmo arquivo duas vezes ele da erro
    //require ('require.php') ;

    
    echo "B";
    
    // ? o require_once ele nao permite incluir duas vezes o mesmo arquivo, ele nao da erro por isso
    require_once "require.php";


    // ! Diferença do include e require, é que o include nao para o projeto quando der erro, ele somente mostra o warning


    include_once ('./includeTest.php');
    echo $test;

echo "<br/>";

//  GOTO

var_dump('test');

goto destino;

echo "testando";

destino:

echo "acabou";