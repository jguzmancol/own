<?php
include("conectar.php");
$_ID_User = $_POST['paramId'];

$_FindText_On="On";
$_Coincidence_On=strstr($_ID_User,$_FindText_On);
//echo $_Coincidence_On;

$_FindText_Off="Off";
$_Coincidence_Off=strstr($_ID_User,$_FindText_Off);
//echo $_Coincidence_Off;

$con = conex();

$consulta = consulta_sql($con,"SELECT 
				users.user, 
				devices.password, 
				devices.device 
			      FROM devices, users where users.usersid=devices.usersid AND devices.devicesid='".$_ID_User."'");

$row = mysqli_fetch_array($consulta, MYSQLI_NUM);

$_user = $row[0];
$_password = $row[1];
$_device = $row[2];
$_ON = "On";
$_OFF= "Off";

if($_Coincidence_On==$_FindText_On){
	if(shell_exec("./estadodevice.sh $_user $_password $_device $_ON")){
		$ok="Dispositivo Prendido";
		echo $ok;
	}else{
		$error="No Hubo Conexion con el Dispositivo";
		echo $error;}}

if($_Coincidence_Off==$_FindText_Off){
	if(shell_exec("./estadodevice.sh $_user $_password $_device $_OFF")){
		$ok="Dispositivo Apagado";
		echo $ok;
	}else{
		$error="No Hubo Conexion con el Dispositivo";
		echo $error;}}
?>
