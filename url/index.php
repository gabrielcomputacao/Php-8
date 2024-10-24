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


