<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style></style>
</head>
<body>
    <form action="lesson8-1-webserver.php" method="POST">
        <label for="to_do">To Do:</label><br>
        <input type="text" name="to_do" required /> <br><br>
        <button type="submit">Add</button>
    </form>
    <div style="padding-top: 1rem">
        Current To Do List :
    </div>
    <ul>
        <?php 
            $to_do_list = fopen("todo.txt", "r");
            $line_number = 0;
            if ($to_do_list != FALSE) {
                // loop until end of file is reached
                while(!feof($to_do_list)) {
                    $content = trim(fgets($to_do_list));
                    if (empty($content)) {
                        continue;
                    }
                    ?> <li> 
                        <div style="display: flex;">
                            <?php echo $content; ?> 
                            <form action="lesson8-1-remove-item.php" method="POST">
                                <input type="hidden" name="line" value=<?php echo $line_number; ?>>
                                <button style="margin-left: 1rem;" type="submit">
                                    Remove
                                </button>
                            </form>
                        </div>
                    </li><?php
                    $line_number = $line_number + 1;
                }
                fclose($to_do_list);
            }
        ?>
    </ul>
</body>
</html>
