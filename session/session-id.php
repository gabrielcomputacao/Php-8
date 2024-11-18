<?php

    ini_set('session.save_path', '../tmp');
    session_start();

    var_dump(isset($_SESSION["dev"]));

    if(isset($_SESSION["dev"])){
        echo $_SESSION["dev"];
    }