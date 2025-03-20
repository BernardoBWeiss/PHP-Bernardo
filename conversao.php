<?php

function menu() 
{
    echo "Escolha uma Opção: \n";
    echo "1 - Real para Dolar \n";
    echo "2 - Dolar para Real \n";
    echo "3 - Fechar";
}

function converter($valor, $cota, $tipo) 
{
    if ($tipo == 1) 
    {
        return $valor / $cota;
    }

    else if ($tipo == 2) 
    {
        return $valor * $cota;
    }
}

echo "Cotação do Dolar: ";
$cota = readline();

do 
{
    menu();

    $opcao = readline();

    if ($opcao == 1) 
    {
        echo "Digite o Valor em Reais: ";
        $valor = readline();
        $total = converter($valor, $cota, 1);
        echo "R$ " . number_format($valor, 2, ",", ",") . "é " . number_format();
    }
}

?>