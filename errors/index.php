
<?php

    echo E_USER_ERROR;
    echo "<br/>";
    echo E_ERROR;

    echo "<br/>";

    /* 
        ---------
    */


    // ? mostra os erros nesta pagina, memso que tenha desabilitado no php.ini 
    error_reporting(E_ALL);

    //  ? função ini_set seta valores la dentro do arquivo php.ini em tempo de execução , se der um fatal error ele nao executa nada , ele para o programa
    ini_set( "display_errors", 1 );

    /* 
        ! Diferença de incluse e require
        TODO:  o require vai dar erro fatal caso nao tenha o arquivo e para a aplicação

        TODO: o include ele nao da erro fatal, ele da erro de warning e nao para a aplicacao

    */


    include("hcode");


    //  --------------------------

    