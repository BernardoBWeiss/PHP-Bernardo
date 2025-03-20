
<?php

echo "Escolha uma opção:\n";
echo "1 - Dar uma mensagem de boas vindas!\n";
echo "2 - Dar uma mensagem motivacional!\n";
echo "3 - Dar um conselho!\n";
echo "4 - Dar tchau!\n";


for (;;)
{

    $opcao = readline("Digite o Número da Opção: ");

    if ($opcao == 1) 
    {
        echo "Boa Noite \n";
    } 

    else if ($opcao == 2) 
    {
        echo "Toma Jack, Toma Jack \n";
    } 
    else if ($opcao == 3) 
    {
        echo "Quem ignora buraco é prefeitura \n";
    } 
    
    else if ($opcao == 4) 
    {
        echo "Valeu \n";
        break;
    } 

    else 
    {
        echo "Escolha outra opção BURRO \n";
    }
}
?>
