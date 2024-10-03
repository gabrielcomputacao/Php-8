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


    
    echo 'test<br/>';
    
    //  Operadores de execução
    $result = `dir`;

    $oem = sapi_windows_cp_get('oem');

    echo $oem;
    // ? 65001 é o codigo do UTF-8, com isso passou o codigo oem que é do windows de codigo 850 para o utf-8, fazendo a conversao da variavel result
    $result = sapi_windows_cp_conv($oem, 65001, $result);


    echo "<pre> $result </pre>";
    
    
    
    // Operadores de controle de erro -- @ (evita que o erro seja mostrado)
    
        
        // $resultado = file('testando');
    
        // $resultado = @file('testando') or die ('deu erro') ;

    // Operators decrement/increment

    $antes= 10;

    echo --$antes + 10;

    echo '<br/>';

    $depois = 20;

    echo $depois++ * 10;

    echo $depois;

    // Operadores string

    $textoPequeno = "gabriel" . $depois . "  " . "fim";
    echo $textoPequeno;

    $textoMedio = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit?';

    $textoMedio .= '. Animi aspernatur possimus assumenda ';

    $textoMedio .= 'nisi hic voluptatem, quidem libero, quam';

    echo '<br />';

    echo $textoMedio;

    $textoGrande = <<<HCODE
    caso precise formatar usar a tag pre <pre>
    tudo que eu colocar para baixo desse comando vira texto 
    independente do que for
    tambem le variavek $textoMedio
    para finalizar nao pode ter indentação
    <pre/>
HCODE;

    echo '<br />';
    echo $textoGrande;


    // Operadores de Array
$comidas = ['sal', 'pimenta', 'pao'];
$bixos = ['cachorro', 'gato' , 'peixe', 'macaco', 'elefante'];

// cada posicao foi declarada dentro do array no caso, 2 => 200, na posicao 2 vai ter 200
$arrayMisturado = [ 2 => 200, 1 => 100, 0 => 50 ];

var_dump($arrayMisturado);
var_dump($arrayMisturado[1]);

$juncaoArray = $comidas + $bixos;

// erro ao tentar imprimir array  echo $juncaoArray;

/* 
    ! Tomar Cuidado!
    ? Ao tentar fazer a juncao com o + ele sobrescreve as posicoes do segundo array com as do primeira, vindo somente
    ? as posicoes que nao batem o index
*/

var_dump($juncaoArray);

var_dump($comidas !== $bixos);
var_dump($comidas == $bixos);
var_dump($comidas <> $bixos);



