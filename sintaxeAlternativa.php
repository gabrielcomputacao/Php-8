

<?php

/* 

O php oferece uma sintaxe alternativa para algumas estruturas de controle: 
    if,while,switch,foreach

    Em cada caso, basicamente a sintaxe alternativa é trocar a chave de abertura por dois pontos (:)
    e a chave de fechamento por end + comando,

    Exemplo:

    endif, endwhile, endfor, endforeach,endswitch

*/


$a =  100 ;

if($a > 50):

    echo "maior que 50";

endif;

?>

<?php
if($a > 80){
?>
    <strong>Maior que 80</strong>
<?php
}
?>

<p>divisao</p>

<?php

    if($a > 90):
?>
    <p>Maior que 90</p>
<?php
endif;
?>


