
<?php

// ? isset verifica se a varialve existe ou se esta vazia, se existir e nao estiver vazia retorna true

if(isset($_GET['nome'])){
    echo $_GET["nome"];
}

$fnGet =  fn($id) => isset($_GET[$id]) ? $_GET[$id] : "" ;

$id = (int)$fnGet("id") + 1;

echo '<a  href="?id='.$id.'" > Proximo  </a>';
