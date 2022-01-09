<?php
$NAME = $_POST['first_name'] . ' ' . $_POST['last_name'];
setcookie('first_name', $_POST['first_name'] );
setcookie('last_name', $_POST['last_name'] );
$redirect_url = 'lesson6-1-form.php';
include('lesson6-1-webserver-response.php');
?>
