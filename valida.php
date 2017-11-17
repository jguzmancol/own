<?php 
include ("conectar.php"); 

$correo = $_POST["email"]; 
$password = md5($_POST["password"]);

$con = conex();

$consulta = consulta_sql($con,"SELECT mail,password FROM users WHERE mail='$correo' AND password ='$password'");

$row = mysqli_fetch_array($consulta, MYSQLI_NUM);

if($row[0]!="" && $row[1]!="")
{
	if($row[0] == $correo && $row[1] == $password)
	{
		session_start();
		$_SESSION["mail"]= $correo;
		$_SESSION['start'] = time();
		$_SESSION['expire'] = $_SESSION['start'] + (50 * 60);
		header("location: blank1.php");
	}
}else{
	header("location: register.php");
     }
?>
