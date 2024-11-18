<?php

ini_set('session.save_path', '../tmp');

// inicia uma sessao nessa rquivo, se nao utilizar o start nao inicializa a session
session_start();

// session status devolve esses tres padroes que estao dentor do match em caso de disabled,none,active
echo session_status();

echo match (session_status()) {
     PHP_SESSION_DISABLED => 'disabled' ,
     PHP_SESSION_NONE => 'None',
     PHP_SESSION_ACTIVE => 'Active',
};


echo "<br>";
echo "<br>";
echo "<br>";

echo "SESSION_ID ---------------------------------";

echo "<br>";
echo "<br>";

// = É gerado um identificado na maquina do usuario e no servidor , gera um cook nesses dois lugares
// = O PHP amarra o valor que esta no session ID com o valor do cook, sendo assim cada navegador tem seu session id diferente, caso trocar de abas no mesmo nao muda o id

echo session_id();

echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";

echo "SESSION_REGENERATE_ID ---------------------------------";

echo "<br>";
echo "<br>";

// = cria outro id de session mas nao mata a antiga sesion
// session_regenerate_id();
// = cria uma nova session e destroi a antiga
// session_regenerate_id(true);


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "SESSION_DESTROY AND SESSION_UNSET ---------------------------------";

echo "<br>";
echo "<br>";

// = session_unset libera todas as variaveis de session, limpa as variaveis de session sem renovar a session
// session_unset();

// = session_destroy ele destroi as variaveis mas deixa a variavel existindo na primeira pagina como um array local, as outras paginas nao tem acesso as variaveis
// session_destroy();


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
