<?php

    //  nao para o codigo, cai no catch captura o erro e continua o codigo

    try {
        
        throw new Exception('deu erro aqui!');

    } catch (\Exception $e) {  

        var_dump($e->getMessage());

    }
