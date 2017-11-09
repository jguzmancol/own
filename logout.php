<?php
session_start();
unset ($SESSION['mail']);
session_destroy();
header('Location: ../../../index.php');
?>
