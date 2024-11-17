<?php

// serve para fazer requisicoes sincronas para outros servidores

// ! OBS: O ajax tambem faz requisicoes para outros servidores mas em modo assincrono


// ? inicializa o curl para preparar para acessar essa url
$curl = curl_init("http://localhost/curl/apiCurl.php");

// ? agora relmente ele executa essa busca em outro servidor 
$response = curl_exec($curl);

// ? Para liberar a memoria é importante fechar o curl
curl_close($curl);

var_dump($response);