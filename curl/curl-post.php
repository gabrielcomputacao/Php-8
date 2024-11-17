<?php

$curl = curl_init();

$data = [
    "nome" =>"gabriel",
    "email" => "gabriel@hotmail.combr",
    "idade" => 27
];

curl_setopt($curl, CURLOPT_URL, "http://localhost/testPostCurl.php");

curl_setopt($curl, CURLOPT_POST, true);

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

curl_exec($curl);

curl_close($curl);

echo "curl funcionando";
