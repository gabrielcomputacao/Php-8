<?php

$texto = "Texto para encriptar";

// crypt nao tem como descriptar, o segundo parametro é o salt, quantas vezes ele vai encriptar essa senha, cada vez fica mais sigilosa, mas ela possue somente bytes que existem no teclado
var_dump(crypt($texto, random_bytes(12)));