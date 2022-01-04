<!-- this version is for integration with router -->
<?php
function handle_name_submission() {
    $NAME = $_POST['first_name'] . ' ' . $_POST['last_name'];
    // requires going to parent if entry point is index.php
    $redirect_url = '../lesson5-1-form.html';
    include('lesson5-1-webserver-response.php');
}
?>