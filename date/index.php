<?php

// ? time mostra o timestamp atual, desde de 1 de janeiro de 1970
echo "TIME AND DATE------------------------------";
echo '<br>';
echo '<br>';

var_dump(time());

echo "<br/>";
echo "<br/>";
echo "<br/>";

// mostra a data atual
var_dump(date("Y-m-d h:i:s"));

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo "CHECKDATE------------------------------";

echo '<br>';
echo '<br>';

// ? checkdate verifica se uma data é valida ou nao

$dataNascimento = "29/02/1975";

$numbersDate =  explode("/",$dataNascimento);

var_dump($numbersDate);

$dia = (int) $numbersDate[0];
$mes = (int) $numbersDate[1];
$ano = (int) $numbersDate[2];

//  ? verifica se é uma data valida
var_dump( checkdate($mes,$dia,$ano));

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo "STRTOTIME------------------------------";

echo '<br>';
echo '<br>';


$text = "+26 day";
var_dump(strtotime($text));
echo '<br>';
var_dump(date("d/m/Y",strtotime($text) ));
echo '<br>';

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo "DATE_PARSE AND DATE_PARSE_FORM_FORMAT ------------------------------";

echo '<br>';
echo '<br>';

    var_dump( date_parse("2020-11-26 12:15"));
    echo '<br>';

    $data = "26/11/2020";

    var_dump( date_parse_from_format("d/m/y",$data) );


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo "CONFIG REGIONAL SETLOCALE ------------------------------";

echo '<br>';
echo '<br>';

    setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8","portuguese");
    echo '<br>';
    var_dump(date_default_timezone_get());
    echo '<br>';
    var_dump(date_default_timezone_set("America/Sao_Paulo"));
    var_dump(date_default_timezone_get());
    echo '<br>';
    // ? mostra o mes
    var_dump(strftime("%B"));
    //  ?? mostra a hora
    var_dump(strftime("%H"));

    // = SETLOCALE tem como configurar direto no php.ini, para que nao seja preciso alterar dentro do codigo

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo "STRFTIME ------------------------------";

echo '<br>';
echo '<br>';

// ? STRFTIME leva em consideracao o padrao atualizado dentro do setlocale

$dateTime = "%A, %d de %B de %Y" ;

var_dump(strftime($dateTime, strtotime("today")));
