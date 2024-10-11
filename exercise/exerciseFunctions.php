<?php


    function calcularImpostos(float $salario, int $dependentes)  {

        $aliquota = 0;
        $deducao = 0;

        if ($salario < 1903) {
            $aliquota = 0;
            $deducao = 0;
        } elseif ($salario > 1903 && $salario < 2826) {
            $aliquota = 7.5;
            $deducao = 142.8;
        }elseif ($salario > 2826 && 3751) {
            $aliquota = 15;
            $deducao = 354;
        }elseif ($salario > 3751 && $salario < 4604) {
            $aliquota = 22.5;
            $deducao = 636;
        }elseif ($salario > 4664) {
            $aliquota = 27.5 ;
            $deducao = 869;
        }


        $dependentesTotal =  $dependentes * 189.5;
        $salarioTOtal = $salario - $dependentesTotal;
        $salarioMaisAliquota = $salarioTOtal * ($aliquota/100);
        $salarioMaisAliquotaFinal = $salarioMaisAliquota - $deducao;

        echo $dependentesTotal;
        echo "<br/>";
        echo $salarioTOtal;
        echo "<br/>";
        echo $salarioMaisAliquota;
        echo "<br/>";
        echo $salarioMaisAliquotaFinal;
        echo "<br/>";
       

    }

    calcularImpostos(3000, 2);

    echo "<br/>";
    echo "-------------";
    echo "<br/>";

    $arrowFunction = fn($url, $texto) => "<a href=$url> $texto <a/>";

    $link = $arrowFunction("www.google.com", "clique aqui");

    echo $link;


