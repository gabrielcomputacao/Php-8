<?php

    $preco =  1000.00 ;
    $desconto = 10 ;
    $frete = 35.49 ;

    $valorDesconto = ( $preco /100 ) * $desconto;

    $newPreco = $preco - $valorDesconto;

    $total = $newPreco + $frete ;

    $compra =  ($total <= $preco)  && ( $total < 1020 );

  
    var_dump($total);
    var_dump($compra);




