<?php
//Under the string $Caracteres you write all the characters you want to be used to randomly generate the code.
$Caracteres = 'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789!"#$%&/()=*[]:;abcd3fghijklmnopqrstuvwxyz';
$QuantidadeCaracteres = strlen($Caracteres);
$QuantidadeCaracteres--;

$Hash=NULL;
for($x=1;$x<=12;$x++){
$Posicao = rand(0,$QuantidadeCaracteres);
$Hash .= substr($Caracteres,$Posicao,1);
}
echo $Hash;
?>
