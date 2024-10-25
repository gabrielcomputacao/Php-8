<?php

// ? base 64 codifica um texto para nao ter acentos nem espaços, sem caracteres especiais


$msg = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores modi harum, tempore culpa ratione quasi quo omnis quam non quis. Excepturi a reiciendis ut aperiam in unde, dolore quidem deleniti!.";

// retira os caracteres especiais, para uma padrao mais facil de ser transportados, emails so trafegam texto, ate mesmo arquivos sao transformados em texto em base 64

echo base64_encode($msg);

$nome = base64_encode('gabriel');


echo '<br>';
echo '<br>';
echo '<br>';

echo base64_decode($nome);

// -----------------------------------------------

echo '<br>';
echo '<br>';
echo '<br>';

// TODO : get_headers pegar os parametros que vao no header da requisicao

// faz a requisicao nesse link e traz os headers dela , se chamada dentro do get_headers

$link = "https://hcode.com.br";

var_dump(get_headers($link));

echo '<br>';
echo '<br>';
echo '<br>';

//  TODO: get_meta_tags pegar as metas tags de um site

var_dump(get_meta_tags($link));


echo '<br>';
echo '<br>';
echo '<br>';

$linkGoogle= "https://www.google.com.br";

echo '<br>';
echo '<br>';
echo '<br>';

// TODO : http_build_query transforma objeto ou array em uma query stirng pronta, o segundo parametro é para se caso for um array numerico ele coloca antes para nao dar problema

$arrayQuery = [
    "nome" => "gabriel",
    "age" => 17

];


// segundo parametro é para array numericos, no caso do exemplo é um array associativo
echo http_build_query($arrayQuery, "_");

// TODo: parse_url pega os elementos separados da url

$url = "https://hcode.com.br/blog" ;

var_dump( parse_url($url) );

echo '<br>';
echo '<br>';

$utils = parse_url($url);

echo $utils["host"]  ;

$url1 = "https://joao:1223@hcode.com.br/blog?teste=1#home" ;

$utils1 = parse_url($url1);
echo '<br>';
echo '<br>';

var_dump($utils1);

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

// TODO: rawurldecode / rawurlencode --> Usa o padrao RFC 3986 que se tiver espaço ele coloca com %20 vai usar sempre quando encontrar um caracteres especial menos -, ~, _

$msg = "João Rangel";

echo rawurlencode($msg ) . "\n";
echo rawurldecode("Jo%C3%A3o%20Rangel");

echo '<br>';
echo '<br>';
echo '<br>';

// TODO: urldecode / urlencode --> Usa o padrao RFC 3986 que se tiver espaço ele coloca com %20 vai usar sempre quando encontrar um caracteres especial menos -, ~, _
// TODO: mais moderna que a anterior

echo urlencode($msg ) . "\n";
echo urldecode("Jo%C3%A3o+Rangel");

