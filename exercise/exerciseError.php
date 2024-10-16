
<?php


    //  TODO: utilizando o try,catch,trhow, catch, criei uma condicao para a variavel $cpf, retire os sinais de pontos (.) e traços da variavel, verifique
    // TODO: se i cibteydi da varuavek e nebir qye 11 caracteres e se for lance uma execao, CPF invalido.

    $cpf = "129.144.026-78";
    $formatedCpfWithoutDot = str_replace('.',"", $cpf); 

    echo $formatedCpfWithoutDot;

    $formatedCpf = str_replace('-', '',$formatedCpfWithoutDot);

    echo "<br/>";
    echo "<br/>";

    try{

    echo mb_strlen($formatedCpf);

    echo "<br/>";
    echo "<br/>";

        if( mb_strlen($formatedCpf) === 11 ){

            echo "CPF Válido";

        }else{
            throw new Exception('Cpf inválido');
        }


    }catch( Exception $e ){
        echo "<br/>";

        var_dump($e);

    }
