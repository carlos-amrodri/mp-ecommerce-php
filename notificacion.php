<?php 
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('Notificaciones');
$log->pushHandler(new StreamHandler('path/to/your.log', Logger::WARNING));

// add records to the log
$log->warning('Medio');
$log->error('Esta es la prueba de notificaciones');

echo "<h1> Probando el log </h1>";

?>