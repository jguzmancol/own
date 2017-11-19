<?php
function conex(){

error_reporting(E_ALL ^ E_NOTICE);

$conexion = mysqli_connect("localhost","jguzman","oracle10g578213A","iot");

if (!$conexion) {
	    die('No se pudo conectar: ' . mysql_error());
}else{
	return $conexion;
}}

function cc($con){
mysqli_close($con);
}

function consulta_sql($con,$sql){
$sql_query=$sql;
//echo $sql_query;
$query_r = mysqli_query($con,$sql);
return $query_r;
cc($con);
}

function insertData($con,$sql){
//$query = mysqli_query($con, $sql);
//return $query;
//cc($con);
if(mysqli_query($con, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
}
cc($con);
?>
