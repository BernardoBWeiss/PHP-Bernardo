
<?php
echo "Escolha uma opção:\n";
echo "1 - Dar uma mensagem de boas vindas!\n";
echo "2 - Dar uma mensagem motivacional!\n";
echo "3 - Dar um conselho!\n";
echo "4 - Dar tchau!\n";

$opcao = readline("Digite o número da opção: ");

if ($opcao == 1) {
    echo "Bem-vindo!\n";
} else if ($opcao == 2) {
    echo "Relacionamento é igual peido... Só gosto qundo é o meu.\n";
} else if ($opcao == 3) {
    echo "Coração partido não bombeia sangue para o pi#%@*.\n";
} else if ($opcao == 4) {
    echo "Tchau!\n";
} else {
    echo "Opção inválida! Por favor, escolha uma opção de 1 a 4.\n";
}
?>
