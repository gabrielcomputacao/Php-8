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


