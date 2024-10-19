
<?php

// no ambiente da web nao tem variaveis de ambiente
// precisa rodar na linha de comando 
setcookie(name: "gabriel", value:"texto", expires_or_options: time()+86400);


var_dump($_ENV);

// ? COOKIE

echo "<br>";
echo "<br>";




var_dump($_COOKIE);
