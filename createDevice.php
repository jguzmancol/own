<?php
include('conectar.php');

session_start();

if($_SESSION['mail'] == true)
{
	$_paramEmail = $_SESSION['mail'];
}

$_paramDeviceId = $_POST['paramDeviceId'];
$_paramDeviceDescription = $_POST['paramDescription'];
$_paramDevicePassword = $_POST['paramToken'];

$con=conex();

$_timeStamp = "CURRENT_TIMESTAMP";

$consulta0 = consulta_sql($con,"SELECT usersid,user FROM users WHERE mail='$_paramEmail'");

$row_1 = mysqli_fetch_array($consulta0, MYSQLI_NUM);
$_valor = $row_1[0];
$_valor1 = $row_1[1];

#$consulta = consulta_sql($con,"SELECT device FROM devices WHERE device='$_paramDeviceId'");

$consulta= consulta_sql($con,"SELECT devices.device FROM devices, users WHERE devices.usersid=users.usersid AND users.mail='".$_paramEmail."' AND devices.device='".$_paramDeviceId."'");

$row = mysqli_fetch_array($consulta, MYSQLI_NUM);

if($row[0] != $_paramDeviceId)
{
$_query = insertData($con,"INSERT INTO devices VALUES(NULL,$_valor,'$_paramDeviceId','$_paramDeviceDescription','$_paramDevicePassword',$_timeStamp)");

$consulta1 = consulta_sql($con,"SELECT password FROM devices WHERE device='$_paramDeviceId'");

$row_2 = mysqli_fetch_array($consulta1, MYSQLI_NUM);
$_passwd = $row_2[0];
shell_exec("./createInstanceMosquitto.sh $_valor1 $_paramDevicePassword $_paramDeviceId");
$ok="Dispositivo Creado Correctamente";
echo $ok;
}else{
	if($_paramDeviceId=="")
	{
		$error="Device ID: El Nombre del Dispositivo no puede ser un dato vacio";
		echo $error;
	}else{
		$error="Nombre de Dispositivo ya Creado";
		echo $error;
	     }
}

#$conn = new SAMConnection();


?>
