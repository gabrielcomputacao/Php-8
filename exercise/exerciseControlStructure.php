<?php

/**
 * * Estrutura de Controles
 * * IF, Switch, Match
 * TODO: Crie três variáveis, $autorizado, $admin e  $nome. Avalie se a variável $autorizado for igual a verdadeiro e $admin igual a verdadeiro escreva na tela se for verdadeiro: "Área Administrativa, $nome, Bem vindo!"  
 *  
 * TODO: Crie quatro variáveis, $quantidade, $valorUnitario, $subtotal e $frete.A variável $subtotal receberá $quantidade multiplicado por $valorUnitario. Se o cliente comprar acima de 3 unidades aplique um desconto em $subtotal de 10% do valor da compra, caso contrário aplique um desconto de 5%. Em seguida será somado o valor de frete em subtotal Para a massa de teste utilize: $quantidade= 2; $valorUnitario = 1200.00; $frete = 40.00 
 * TODO: Exibir com var_dump no final o Valor total cobrado.
 * 
 * * Loops e Contadores
 * TODO: Crie um Contador para ir de 1920 a 2022.
 * TODO: Este contador precisa armazenar uma instrução HTML dentro de uma variável string $option com a seguinte estrutura: '<option value="$valor">$valor</option>'.
 * TODO: Crie uma condição dentro deste contador, se o $ano for igual a 2021 imprima o atributo selected conforme a estrutura a seguir: <option value="$valor" selected="selected">$valor</option>
 * *require e include
 * TODO: Crie um arquivo chamado exercicio-03-a.php declarando duas constantes IDIOMA = "pt_BR"; LOCALE = "America/Sao_Paulo";
 * TODO: Crie um arquivo chamado exercicio-03-b.php incluindo de forma obrigatório o arquivo anterior, e crie uma condição, para caso o IDIOMA seja "pt_BR" e o LOCALE seja "America/Sao_Paulo" Imprima na tela: Idioma: Português, Fuso Horário: -3:00
 * 
 */




 $autorizado = true;
 $admin = true;
 $nome = 'gabriel';

 if($admin === true && $autorizado === true){
    echo "Área administrativa, $nome, Bem vindo!";
 }


 $quantidade = 2;
 $valorUnitario = 1200.00;
 $frete = 40.00;
 
 $subtotal = $quantidade * $valorUnitario; 

 if($quantidade > 3){
    $desconto =  $subtotal * 0.1  ; 
    $subtotal = $subtotal - $desconto;
 }else{
    $desconto =  $subtotal * 0.05  ; 
    $subtotal = $subtotal - $desconto;
 }

 $subtotal += $frete;

 echo '<br/>';

 echo $subtotal;

 echo '<br/>';
 echo '<br/>';

$cont = 1920;

while ( $cont <= 2022 ) {
    
    $option = '<option value="$valor">$valor</option>';

    if($cont == 2021){
        echo "<option value=$cont selected=selected>$cont</option>";
    }

    $cont++;
}

echo $cont;

?>