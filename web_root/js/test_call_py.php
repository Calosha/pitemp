<?php 
bool set_time_limit (30);
$command = escapeshellcmd('../../ext/Adafruit_Python_DHT/examples/AdafruitDHT.py');
$output = shell_exec($command);
echo $output;

?>