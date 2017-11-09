<?php
include('conectar.php');

$_paramNick = $_POST['paramNickname'];
$_paramNames = $_POST['paramNames'];
$_paramCompany = $_POST['paramCompany'];
$_paramEmail = $_POST['paramEmail'];
$_paramPasswd = $_POST['paramPassword'];
$_paramPasswd1 = $_POST['paramPassword1'];

$con=conex();

$consulta = consulta_sql($con,"SELECT user,mail FROM users WHERE mail='$_paramEmail' OR password ='$_paramNick'");

$row = mysqli_fetch_array($consulta, MYSQLI_NUM);

if($row[0]=="" || $row[1] =="")
{
	if($_paramPasswd == $_paramPasswd1)
	{
		$_timeStamp = "CURRENT_TIMESTAMP";
		$_crypt = md5($_paramPasswd);
		$_query = insertData($con,"INSERT INTO users VALUES(NULL,$_timeStamp,'$_paramNick','$_crypt','$_paramEmail','$_paramNames','$_paramCompany','jose.jpg')");
		if($_query)
		{
			shell_exec("./createUser.sh $_paramNick $_paramPasswd");
			header("location: index.php");

		}else{
			header("location: /pages/examples/register.php");
		     }
		}
}else{
	header("location: /pages/examples/register.php");
     }
?>
