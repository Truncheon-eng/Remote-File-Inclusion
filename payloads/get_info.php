<?php
$content = file_get_contents($_GET['file']);
$base64Content = base64_encode($content);
echo $base64Content;
?>
