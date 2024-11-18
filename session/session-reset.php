<?php

ini_set('session.save_path', '../tmp');
session_start();

echo $_SESSION["empresa"];

$_SESSION["empresa"] = "treinamentos";

// Quando é feito no commit é feito o checkpoint da ultima alteracao, caso reset ou abort vai volta rpara o ultimo commit feito
session_commit();

echo "<br>";

echo $_SESSION["empresa"];





