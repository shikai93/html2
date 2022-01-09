<?php
$line_to_remove = $_POST['line'];
$TODOFILE = fopen("todo.txt", "r+") or die("Unable to open file!");
$new_file_content = '';
$line_number = 0;

$content = trim(file_get_contents("todo.txt"));
$content_arr = explode("\n", $content);
array_push($content_arr,"\n");
unset($content_arr[$line_to_remove]);
file_put_contents("todo.txt", join("\n", $content_arr) );

// while(!feof($TODOFILE)) {
//     $content = trim(fgets($TODOFILE));
//     if (empty($content) || $line_number == $line_to_remove) {
//         $line_number += 1;
//         continue;
//     }
//     $line_number += 1;
//     $new_file_content .= $content . "\n";
// }
// fclose($TODOFILE);
// file_put_contents("todo.txt",$new_file_content);

$redirect_url = 'lesson8-form.php';
header('Location: '.$redirect_url);
?>
