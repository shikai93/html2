<?php
$TODO = $_POST['to_do'] . "\n";
$TODOFILE = fopen("todo.txt", "a") or die("Unable to open file!");
fwrite($TODOFILE, $TODO);
fclose($TODOFILE);
$redirect_url = 'lesson8-form.php';
header('Location: '.$redirect_url);
?>
