<?php

include('./variables.php');

// ? quando abre o arquivo , o ponteiro vai para o final
$arquivo = fopen(filename,"a+");

echo "abriu o arquivo";
echo "<br/>";
echo "<br/>";

//  \r\n serve para dar espaço no windowns
$textoComum = "alfredo;www.teste.com;30\r\n" ;

fwrite($arquivo,$textoComum);
// No momento de inserção o ponteiro esta no final, por isso nao leu nada, precisa voltar o ponteiro para o começo para o fread conseguir ler


// rewind volta o cursor para o começo do arquivo
rewind($arquivo);

// fseek() move o cursor quantas casas voce quiser dentro do arquivo



var_dump(fread($arquivo, filesize(filename) ));

echo "<br/>";
echo "<br/>";
fclose($arquivo);
echo "fechou o arquivo";


echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

echo "file_exists -------";

// retorna booleano caso exista, ele recebe um filename em string
var_dump(file_exists(filename));


echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

echo "file_get_contents AND file_put_contents -------";

// file_get_contents traz o conteudo de um arquivo (pega o conteudo de um arquivo) 
// file_put_contents coloca o conteudo em um arquivo (coloca o conteudo em um arquivo) 

echo "<br/>";
echo "<br/>";

var_dump(file_get_contents(filename));

echo "<br/>";
echo "<br/>";

// fazendo com o put ele sobrescreve o que tem no arquivo e manda o que mandamos agora
var_dump(file_put_contents(filename, date("d/M/Y")));

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

echo "filesize AND filetype -------";

    // ? mostra o tamanho de bytes que tem no arquivo
    echo filesize(filename);

    // ? no linux como tudo é arquivo, essa funcao diferencia se é um arquivo ou um diretorio
    var_dump( filetype(filename) );

    // ? mostra mais detalhado qual tipo de extensao tem o arquivo
    var_dump( mime_content_type(filename) );
    echo "<br/>";

    var_dump(stat(filename));

echo "<br/>";
echo "<br/>";




