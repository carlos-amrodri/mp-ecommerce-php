<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <h1>Titulo de prueba</h1>
   <h2> Add monolog </h2>
</body>
</html>

<?php 
// use Monolog\Logger;
// // use Monolog\Logger;
// // use Monolog\Handler\StreamHandler;
// use Monolog\Handler\StreamHandler;

// // create a log channel
// $log = new Logger('Notificaciones');
// $log->pushHandler(new StreamHandler('path/to/your.log', Logger::WARNING));

// // add records to the log
// $log->warning('Medio');
// $log->error('Esta es la prueba de notificaciones');

$cartel = "Maxi";

error_log("*******Post********".print_r($cartel,true));
error_log("===========  POST  ============== ".print_r($_POST, true));
error_log("===========  REQUEST  ============== ".print_r($_REQUEST, true));
$entityBody = file_get_contents('php://input');
error_log("===========  TODO  ============== ".print_r($entityBody, true));
?>

