<?php


    // Sodium precisa ser habilitado nas extensoes do php.ini em .dll vai ter uma linha que esta comentada sendo o sodium
    var_dump(SODIUM_LIBRARY_VERSION);

    echo "<br>";
    echo "<br>";
    echo "<br>";

    $mensagem = "Mensagem criptografada com sodium";

    // = Chave é gerada com essa funcao , mas depois é criada uma dentro de um arquivo que é guardado em seguranca no servidor, por isso nao gera essa chave toda hora
    // essa funcao gera bytes aleatorios, e colocando a variavel do sodium fica mais segura a senha
    // $chave= random_bytes(SODIUM_CRYPTO_SECRETBOX_KEYBYTES);

    // noune é uma attributo que é gerada para garantir que as senhas criptografadas seja 50% diferente da ultima senha criptografada
    $iv = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);

    $keysecret = file_get_contents("./keysecret.key") ;

    // ? usado uma vez para colocar a chave dentro de um arquivo, esse arquivo nao pode estar em pastas que o servidor da acesso ao usuario externo, aqui foi um exemplo
    // file_put_contents("keysecret.key", $chave);

    // pegadno a chave para criptografar que é guardada em seguranca no servidor
    $mensagemCifrada =  sodium_crypto_secretbox($mensagem,$iv,$keysecret) ;

    var_dump($keysecret);

    echo "<br>";
    echo "<br>";

    var_dump($mensagemCifrada);

    // se quiser trafegar essa mensagem via post ou web, tem a funcao base_64_encode para nao perder os bytes, e mesmo que tirem o base64 ainda vai estar cirptografada

    $mensagemDecifrada = sodium_crypto_secretbox_open($mensagemCifrada,$iv,$keysecret) ;

    var_dump($mensagemDecifrada);

    echo "<br>";
    echo "<br>";




