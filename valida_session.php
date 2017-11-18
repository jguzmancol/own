<?php
if($_SESSION['mail'] == true){

}else{
	header("Location: index.php");
	exit();
}

$now = time();

if($now > $_SESSION['expire']){
	session_destroy();
	header("Location: lockscreen.php");
	exit();
}
?>
