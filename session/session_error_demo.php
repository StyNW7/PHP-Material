<?php
session_start();
$_SESSION['error'] = "This is a session-based error!";
header("Location: ../form-upload/upload_form.php");
?>
