<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style></style>
</head>
<body>
    <form action="lesson6-2-webserver.php" method="POST">
        <label for="first_name">First name:</label><br>
        <input type="text" id="first_name" name="first_name" value="<?php echo $_SESSION['first_name'];?>"><br>
        <label for="last_name">Last name:</label><br>
        <input type="text" id="last_name" name="last_name" value="<?php echo $_SESSION['last_name'];?>">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
