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

echo '<br>';
echo '<br>';
echo '<br>';

// ? percentage é uma varialve passada por referencia ela vai dentro da funcao recebe o valor e ai sim da para ser usada aqui fora no escopo global
echo similar_text('gabriel teste', 'ganriel testando', $percentage);

echo $percentage;

echo '<br>';
echo '<br>';
echo '<br>';

// TODO: soundex

// ? verifica a similaridade de sons de duas palavras, funcoes foneticas

$originalWord = "Michael Jacson";
$twoWord = "Maicael Jecksom";

var_dump(soundex($originalWord) === soundex($twoWord));

echo '<br>';
echo '<br>';
echo '<br>';
echo '-----------------------------------';
echo '<br>';

// TODO: str_contains, ajuda na busca em strings

$msgContains = "gabriel henrique";

// ? str_contains é casa sensitive 

var_dump( str_contains($msgContains, "gabriel") );

echo '<br>';
echo '<br>';
echo '<br>';
echo '-----------------------------------';
echo '<br>';

$responseStartsWith = str_starts_with($msgContains, "gabriel22");

// observa se começa com determinado termo
var_dump(str_starts_with($msgContains, "gabriel"));
// observa se termina com um determinado termo
var_dump(str_ends_with($msgContains, "que"));


echo $responseStartsWith;

echo '<br>';
echo '<br>';
echo '<br>';
echo '-----------------------------------';
echo '<br>';


// TODO: str_pad, colocar espaços na strings, completar com algo para que fique com detemrinado tamanho

$nomePad = "gabriel henrique";

echo str_pad($nomePad, 30 , ".");

echo '<br>';
echo '<br>';
echo '<br>';
echo '-----------------------------------';
echo '<br>';

//  TODO: repete algum numero de vezes uma string

echo str_repeat("$nomePad " , 3);

echo '<br>';
echo '<br>';
echo '<br>';
echo '-----------------------------------';
echo '<br>';

// = INGLES => replace === substituir

// TODO: substitui parte da string por outra coisa

$wordReplace = "thauany duarte diniz";

echo str_replace(" ", ".", $wordReplace, $totalChanged);

// ? variavel passada por referencia dentro da funcao e assim conseguimos pegar ela no escopo global, ela é alterada dentro da funcao
echo $totalChanged;


echo '<br>';
echo '<br>';
echo '<br>';
echo '-----------------------------------';
echo '<br>';

// = INGLES => shuffle === embaralhar

// TODO: embaralhar strings

$wordShuffle = "matematica";

echo str_shuffle($wordShuffle);

echo '<br>';
echo '<br>';
echo '<br>';
echo '-----------------------------------';
echo '<br>';

// TODO: str_word_count/strlen contagem de letras e palavras em strings

$wordLength = "gabriel henrique";
$wordLength1 = "nâo";

// ? conta o total de letras e espaços, caracteres
// ! Obs: conta os acentos tambem
echo strlen($wordLength1);

// ? se quiser saber quantas palavras tem tambem pega os acentos

echo str_word_count($wordLength);


echo str_word_count($wordLength1);

echo "\n usando funcao mb, nao pega os acentos \n";
echo mb_strlen($wordLength1);

echo '<br>';
echo '<br>';
echo '<br>';
echo '-----------------------------------';
echo '<br>';


// TODO: strip_tags retirada de tags de strings

$comment = " <strong> Olá  </strong> <a>gabriel</a> ";


// ? coolocar como parametros as tags que serao permitidas
echo strip_tags($comment, "<strong>");

echo '<br>';
echo '<br>';
echo '<br>';
echo '-----------------------------------';
echo '<br>';


// TODO: strpos stripos -- retorna o numero da posicao do index dentro da string

$nomeTest = "gabriel henrique da silveira santos";

//  ? strpos -- case sensitive
echo strpos($nomeTest, "el");

//  ? stripos -- nao é case sensitive

echo stripos($nomeTest, "silveira");

echo '<br>';
echo '<br>';
echo '<br>';
echo '-----------------------------------';
echo '<br>';

// TODO: colocar em maiusculo minusculo

$nomeCaseUpperAndLower = "João henrique";

echo strtolower($nomeCaseUpperAndLower) . " \n";
echo strtoUpper($nomeCaseUpperAndLower) . " \n";
// ? para lidar com a questao do acento usar a biblioteca mb

echo mb_strtoupper($nomeCaseUpperAndLower) . "\n";

//  ? torna maiuscula a primeira letra de toda a string
echo ucfirst($nomeCaseUpperAndLower) . "\n";

//  ? torna maiuscula a primeira letra depois de um espaço, a funcao permite colocar um delemitador para assumir o papel do espaço
echo ucwords($nomeCaseUpperAndLower) . "\n" ;

$nomeCaseUpperAndLowerDiff = "João;henrique";
echo ucwords($nomeCaseUpperAndLowerDiff, ';') . "\n" ;


echo '<br>';
echo '<br>';
echo '<br>';
echo '-----------------------------------';
echo '<br>';

// TODO: substr -  dividir strings

$variavelHcode = "https://hcode.com.br";


// ? substr pega partes da string passando os index de começo até quantos index a frente ela deve cortar a string
// ? exemplo: começa do index 8 e anda 12 vezes ate cortar , dentro da string
echo substr( $variavelHcode, 8, 12 );

