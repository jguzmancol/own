<?php
//Under the string $Caracteres you write all the characters you want to be used to randomly generate the code.
<<<<<<< HEAD
$Caracteres = 'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789abcd3fghijklmnopqrstuvwxyz';
=======
$Caracteres = 'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789!"#$%&/()=*[]:;abcd3fghijklmnopqrstuvwxyz';
>>>>>>> 154326970ee5ee9eba0e7db85c6de9142ade8c6c
$QuantidadeCaracteres = strlen($Caracteres);
$QuantidadeCaracteres--;

$Hash=NULL;
<<<<<<< HEAD
for($x=1;$x<=20;$x++){
=======
for($x=1;$x<=12;$x++){
>>>>>>> 154326970ee5ee9eba0e7db85c6de9142ade8c6c
$Posicao = rand(0,$QuantidadeCaracteres);
$Hash .= substr($Caracteres,$Posicao,1);
}
echo $Hash;
?>
