<?php
session_start();
$NAME = $_POST['first_name'] . ' ' . $_POST['last_name'];
$_SESSION["first_name"] = $_POST['first_name'];
$_SESSION["last_name"] = $_POST['last_name'];
$redirect_url = 'lesson6-2-form.php';
include('lesson6-1-webserver-response.php');
exit();
?>
