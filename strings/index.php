<?php

    $msg = "caixa d'água";

    echo $msg;

    echo addcslashes($msg, "'");
    // ? coloca contra barra na string selecionada, dentro de uma string maior passada
    $msg= addcslashes($msg, "'");
    echo $msg;

    echo '<br>';
    //  ? retira as barras que tiverem na string passada como parametro
    echo stripcslashes($msg);


// -------------------------------------------------------- 21/10/2024

echo '<br>';
echo '<br>';
echo '<br>';

// TODO: Explode e implode

$fruits = "orange|apple|banana|limon";

// ? separa uma string em varias posicoes de um array
var_dump(explode('|',$fruits));
$fruits = explode('|',$fruits);

echo $fruits[0];

echo '<br>';
echo '<br>';
echo '<br>';


$fruits1 = ["orange","watermelon","melon"];
// ? junta array em string unica
var_dump(implode('|',$fruits1));

echo '<br>';
echo '<br>';
echo '<br>';

$tagA = '<a href="www.google.com">Google</a> ';

echo $tagA;

// = INGLES => Quotes == 'aspas'

echo htmlentities($tagA,ENT_NOQUOTES);

$tagA1 = "&lt;a href=&quot;www.google.com&quot;&gt;Google&lt;/a&gt;";

echo html_entity_decode($tagA1);

echo '<br>';
echo '<br>';
echo '<br>';

// ? TRIM tira os espaços das strings, LTRIM = left , RTRIM = right

echo "     testando trim agora      ";
var_dump("     testando trim agora      ");
echo trim("     testando trim agora      ");
var_dump(trim("     testando trim agora      "));


echo '<br>';
echo '<br>';
echo '<br>';


//  ? number format = formata um numerico e retorna uma string

echo number_format(3248.17, 3, ',','.');

echo '<br>';
echo '<br>';
echo '<br>';

// ? print and printf => 

print("exibe algo na tela \n\n");

$formatoStringPrintF =  "\n Existem %d animais no %s";

printf($formatoStringPrintF, 30000, "Brasil");

// ? similar_text, calculo de similaridade conforme o algoritmo de oliver



