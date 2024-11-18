<?php

ini_set('session.save_path', '../tmp');
session_start();

//  = Os dois fazem reset nas variaveis de session, abort faz na hora, reset tem algum tempo
session_abort();
// session_reset();

echo $_SESSION["empresa"];