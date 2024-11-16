<?php

echo "OPEN SSL";

echo "<br/>";
echo "<br/>";
echo "<br/>";

// ? para verificar se o openssl estava funcionando, precisa habilitar no .ini
// var_dump(openssl_get_cipher_methods());

// openssl permite escolher qual vai ser o algoritmo de criptografia
$cifra = "AES-128-CBC";

// ao gerar chaves pelo menos uma chave do tamanho de 32 bytes
$key = random_bytes(32);

var_dump($key);

$iv = random_bytes(openssl_cipher_iv_length($cifra));

var_dump($iv);

echo "<br/>";
echo "<br/>";
echo "<br/>";


$mensageSecretOriginal = "Mensagem com OpenSSl";

$mensageCriptografada = openssl_encrypt( $mensageSecretOriginal,$cifra, $key, OPENSSL_RAW_DATA, $iv );

$resultado = base64_encode($iv.$mensageCriptografada);

var_dump($mensageCriptografada);

// => Para trafegar os dados é comum mandar o iv no começo junto com a mensagem final criptografadda ,pois o iv semnpre vai ter o mesmo tamanho, entao no final é so tirar essa quantidade que sobra a mensagem

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "bytes";
echo "<br/>";

///////////////////////////////////////////////////////
// Em outro arquivo para descriptografar

$bytes = base64_decode($resultado);
var_dump($bytes);

// para tirar o iv que veio junto com o resultado final, encripta e desencripta
$myIv = mb_substr($bytes, 0 , openssl_cipher_iv_length($cifra), "8bit" );

$finalText = mb_substr($bytes, openssl_cipher_iv_length($cifra), null, "8bit" );


$mensageReal = openssl_decrypt(
    $mensageCriptografada,
    $cifra,
    $key,
    OPENSSL_RAW_DATA,
    $iv
);

var_dump($mensageReal);

echo "<br/>";
echo "<br/>";
echo "<br/>";