<?php 
include("conectar.php"); 
include("messages.php"); 

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
		header("location: blank.php");
	}
}else{
	header("location: register.php");
     }
?>

<html>
<head>
<script>

function error(){
	alertify.error("Usuario o constraseña incorrecto/a."); 
	return false; 
}

function calculaHash()
{
		 //var parametros = {"valorCaja1" : valorCaja1,
                 // "valorCaja2" : valorCaja2
                 //};
                 $.ajax({
                 data:  parametros,
                 data:  ""
	         url:   'createHash.php',
	         type:  'post',
	         beforeSend: function ()
	         {
        	       alerta();
         	       $("#Hash").html("Procesando, espere por favor...");
	         },
	              	success:  function (response)
	       		{
			       $("#Hash").html(response);
	       		       $("#Hash").val(response);
	       		}
	       		});
}
</script>
</head>
<body>
</body>
</html>
