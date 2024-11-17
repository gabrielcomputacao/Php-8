<?php

$senha = "123456";

//  ? Melhor jeito de guardar senhas é por essa padrao hash junto com a variavel default do php

var_dump(password_hash($senha,PASSWORD_DEFAULT));

// depois de criptografada é assim que é guardada a senha da pessoa no banco, depois é so comparar com o que ela vai mandar no login com essa senha que esta no banco com o verify
$banco_de_dados = '$2y$10$CI1DaOGSkeKxZmnGeGiQ5eM2ibE0rMjR9IsUGpjx3Q/IxC.uhrKrG';

echo "<br/>";

var_dump( password_verify($senha,$banco_de_dados) );
