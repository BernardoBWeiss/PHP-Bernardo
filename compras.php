<?php

$valor = readline("Quanto Você Gastou: ");

if ($valor <= 100)
{
    echo "Você irá pagar 30 R$ de frete \n
    Total: " . ($valor + 30);
}

else if ($valor <= 200)
{
    echo "Você irá pagar 20 R$ de frete \n
    Total: " . ($valor + 20);
}

else if ($valor > 200)
{
    echo "Frete Gratis \n
    Total: " . ($valor);
}

else 
{
    echo "Valor Inválido";
}

?>