<?php
   
// exercise 1 26/09/2024

  $gabriel = 'gabriel';
  $idade = 27;
  $esporte = 'xadrez';
  
  $tec = ['python', 'php8', 'java'] ;


echo get_debug_type($idade);
echo '<br/>';
var_dump($idade);
echo '<br/>';
echo '--------------------------------';
settype($idade, 'string');
echo '<br/>';
echo get_debug_type($idade);
echo '<br/>';
var_dump($idade);
echo '<br/>';


function print_variaveis(){

    global $esporte;
    global $idade;
    global $gabriel;

    echo $esporte;
    echo $idade;
    echo $gabriel;
}


print_variaveis();

