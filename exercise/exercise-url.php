<?php


/* 
    TODO: Crie uma variavel $q e armazene um string que sera usada poara realizar uma busca: EX: Curso de php 8
    TODO: Crie uma arrrow function chamada $busca que recebera um parametro de busca e retornara um link para buscar no google. $busca($q) deve retornar:

    https:// www.google.com/search?q=curso+php+8
*/

$q = "aprendendo PHP 8";

$arrayParameters = [ "q" => "aprendendo PHP 8" ];

$busca = fn($q) => "wwww.google.com/search?" . http_build_query($q);

$busca1 = fn($q) => "wwww.google.com/search?q=" . urlencode($q);

echo $busca($arrayParameters);

echo "<br>";
echo "<br>";
echo "<br>";

echo $busca1($q);
echo "<br>";
echo "<br>";
echo "<br>";

$busca2 = fn($q) => "<a  href='https://wwww.google.com/search?q=". urlencode($q) . "' target='_blank'> Acessar busca </a> ";

echo $busca2($q);