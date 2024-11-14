<?php

echo "scandir AND mkdir -------";

echo "<br>";
echo "<br>";

// ? lista todos os arquivos que estao dentro desse diretorio
var_dump( scandir("./") );

echo "<br>";
echo "<br>";

if(file_exists('./uploads')){
    var_dump("arquivo existe ");
}else{
    // ? cria um diretorio (mkdir igual no linux)
    mkdir("./uploads");
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "unlink (is_file) AND rmdir (is_dir) -------";

// ! Depois de deletar , somente com backup para voltar esses arquivos, ele nao desfaz a operacao de exclusao de arquivo e diretorio

if(file_exists('./text.txt')){
    // ? deleta um arquivo
    unlink("./text.txt");
}


if(file_exists('./uploads')){
    // ? deleta um diretorio
    rmdir('./uploads');
}


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";