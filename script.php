<?php
// $nome_da_variavel = $_array [name_input]
$nome_aluno = $_POST ['nome_aluno'];
$nota01 = $_POST ['nota01'];
$nota02 = $_POST ['nota02'];
$nota03 = $_POST ['nota03'];

//calcula a média das notas
$media = ($nota01+$nota02+$nota03)/3;

//o comando echo exibe o texto, "." é usado para concatenar a variavel no texto a ser exibido

echo "Aluno: ".$nome_aluno;
echo "<br>";
echo "Sua média é: ".$media;

//Faz uma condição para aprovar, reprovar ou deixar de recuperação
if ($media> 5) {

    echo "Aprovado";
}

elseif ($media == 5) {
    echo "Reprovado";

}

else
{
    echo "Recuperação";
}
//
?>