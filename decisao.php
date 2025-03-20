<?php

$nome = readline("Estimado(a) usuário(a), digite vosso nome: ");
$idade = readline("Agora, por obséquio, digite vossa idade: ");

echo "Seja bem vindo(a), sr(a) $nome! \n";

//voto obrigatorio
if ($idade >= 18 && $idade <= 64) {
    echo "Você tem que votar! \n";

//opcional    
} else if ($idade >=16 && $idade <18 || $idade >= 65){
    echo "Votar não é obrigatório. \n";
}else{
    echo "Você não pode votar!";
}
