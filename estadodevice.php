<?php
$_user 		= $_POST['paramUser'];
$_password 	= $_POST['paramPassword'];
$_device 	= $_POST['paramDevice'];
$_signal 	= $_POST['ParamMessage'];
shell_exec("./estadodevice.sh $_user $_password $_device $_signal");
?>
