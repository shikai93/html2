<?php
 ob_start();
?>
<div >
    <div style="color: red;"> <?php echo "Today is ".date("Y/m/d"); ?></div>
</div>
<?php
$content = ob_get_clean();
echo $content;
