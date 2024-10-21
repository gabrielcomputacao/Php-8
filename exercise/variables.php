<?php


//  Todo: Cria um cookie armazenando o produto="curso php8"
//  TODO: recupere os dados do cookie gravado e verifique se o usuaririo ainda possui o cookie, exiba: "Ganha 5% de desconto"

var_dump($_COOKIE);

setcookie( name: "produto", value: "martelo", expires_or_options: 4000 );


$produto = $_COOKIE['produto'];

if($_COOKIE['produto']){
    echo ($_COOKIE['produto']);
    echo 'Ganha 5% de desconto';
}else{
    echo 'expirou';
}
