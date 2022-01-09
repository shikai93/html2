<?php
 ob_start();
?>
<div style="width: 100%; text-align: center">
    <h1>Your submission has been received!</h1>
</div>
<?php
$content = ob_get_clean();
echo $content;
header('Refresh: 1; URL='.$redirect_url);
die();
