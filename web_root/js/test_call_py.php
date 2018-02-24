<?php 
$command = escapeshellcmd('../../ext/Adafruit_Python_DHT/examples/AdafruitDHT.py');
var_dump("executing");
$output = shell_exec($command);
var_dump('executed');
var_dump($output) ;

?>