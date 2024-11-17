<?php

// prepara o curl
$curl = curl_init();

$cep = "35501169";

// configura o curl para fazer a solicitacao para essa url , api de cep
curl_setopt($curl,CURLOPT_URL, "https://viacep.com.br/ws/{$cep}/json/");

curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);


// com essa configuracao a resposta do curl é jogada dentro da variavel e nao exibida na tela
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// curl por padrao joga na tela, o resultado é se deu certo ou nao fazer a requisicao, mas podemos mudar essa padrao
$resposta = curl_exec($curl);

// ! OBS: Sempre que é um recurso externo como curl, banco de dados , arquivos depois de executar temos que fecha-lo
curl_close($curl);

// o resultado do curl se nao tiver a varaivel  CURLOPT_RETURNTRANSFER, true so mostra se a requisicao deu certo ou nao
var_dump($resposta);

// ? quando o json_decode recebe true , ele passa para o php que foi convertido e podera ser acessar como array associativo
$data = json_decode($resposta, true) ;

echo "<br>";
echo "<br>";
echo "<br>";

echo $data["logradouro"];


