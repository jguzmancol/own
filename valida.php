<?php 
include("conectar.php"); 

error_reporting(E_ALL ^ E_NOTICE);

$correo = $_POST["email"]; 
$password = md5($_POST["password"]);

$con = conex();

$consulta = consulta_sql($con,"SELECT mail,password FROM users WHERE mail='$correo' AND password ='$password'");

$row = mysqli_fetch_array($consulta, MYSQLI_NUM);

if($correo=="" || $password=="")
{
	$error="Usuario o Contrasena Incorrecta";
        echo $error;
}else{
	if($row[0]!="" && $row[1]!="")
	{
		if($row[0] == $correo && $row[1] == $password)
		{
			session_start();
			$_SESSION["mail"]= $correo;
			$_SESSION['start'] = time();
			$_SESSION['expire'] = $_SESSION['start'] + (50 * 60);
			$ok="ok";
			echo $ok;
		}
	}else{
		echo $error;
		}
	}
?>
