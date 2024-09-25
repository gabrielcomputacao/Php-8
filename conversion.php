
<?php

// ? todos os tipos de variaveis do php sao do tipo variant

$valor = "1";

var_dump( get_debug_type($valor));

$newValue = (int) $valor;

echo '<br/>';

var_dump( get_debug_type($newValue));

settype($valor, 'float');


var_dump( get_debug_type($valor));

// REFERENCIAS

$a = 50;

$b = &$a;

$c = $a;
echo '<br/>';

var_dump('a', $a );

echo '<br/>';
var_dump('b', $b );

echo '<br/>';
var_dump('c', $c );

echo '<br/>';

$a = 250;


var_dump('a', $a );

echo '<br/>';
var_dump('b', $b );

echo '<br/>';
var_dump('c', $c );

echo '<br/><br/><br/>';

$b = 30;

// ? quando se muda o valor de A tambem muda o valor de B
// ? quando se muda o valor de B tambem muda o valor de A
// ? porque b é a referencia de A, por isso ao mudar afetar os dois

var_dump('a', $a );

echo '<br/>';
var_dump('b', $b );

echo '<br/>';
var_dump('c', $c );


