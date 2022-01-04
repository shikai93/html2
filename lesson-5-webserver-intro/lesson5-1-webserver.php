<?php
// var_dump($_POST);
$NAME = $_POST['first_name'] . ' ' . $_POST['last_name'];
$redirect_url = 'lesson5-1-form.html';
include('lesson5-1-webserver-response.php');
?>
