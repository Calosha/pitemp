<?php 
set_time_limit (30);
$command = escapeshellcmd('../../ext/Adafruit_Python_DHT/examples/AdafruitDHT.py');
var_dump("executing");
$output = exec($command);
var_dump('executed');
var_dump($output) ;

?>