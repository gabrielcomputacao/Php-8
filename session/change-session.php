
<?php


/*
    = Quando a ultima solicitacao de pagina é aberta ela se torna a original para comandar a session entao a ultima aberta vai ser a original em relacao a proxima

*/

ini_set('session.save_path', '../tmp');
session_start();

$_SESSION["empresa"] = "Hcode";

echo $_SESSION["empresa"];
