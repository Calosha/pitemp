<?php 

$command = escapeshellcmd('../../ext/Adafruit_Python_DHT/checkTemp/AdafruitDHT.py');
$output = shell_exec($command);
echo $output;

?>