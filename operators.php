<?php

$valor = '10';

echo 2 + $valor;

var_dump(+$valor);

$sentence = true;

var_dump(-$sentence);

echo 2**3;

echo 10 % 2;

echo 50 / 2;

// comparison operators 

$a = 2;
$b = 10;
echo '<br/>';
var_dump( $a <=> $b);
var_dump( $a !== $b);

$c = null;

var_dump( $c ?? 'test' );
var_dump( $a >= $b);

// operadores Lógicos

$valor1 = 5 ;
$valor2 = 10;

    if($valor1 && $valor2){
        echo 'tem valores';
    }

    echo '<br/>';

    var_dump( $valor1 > $valor2 && $valor1 > 10 );

    var_dump( !($valor1 > $valor2) || $valor1 > 10 );


    
    //  Operadores de execução
    echo 'test<br/>';
    
    $result = `dir`;

    $oem = sapi_windows_cp_get('oem');

    echo $oem;
    // ? 65001 é o codigo do UTF-8, com isso passou o codigo oem que é do windows de codigo 850 para o utf-8, fazendo a conversao da variavel result
    $result = sapi_windows_cp_conv($oem, 65001, $result);


    echo "<pre> $result </pre>";
    
    
    
    // Operadores de controle de erro -- @ (evita que o erro seja mostrado)
    
        $resultado = file('testando');
    
        $resultado = @file('testando') or die ('deu erro') ;

    // Operators decrement/increment

    $antes= 10;

    echo --$antes + 10;

    echo '<br/>';

    $depois = 20;

    echo $depois++ * 10;

    echo $depois;


