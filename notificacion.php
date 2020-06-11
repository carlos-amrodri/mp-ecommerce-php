
<?php 
$post_data = $_POST['data'];

if (!empty($post_data)) {
    $filename = 'log.json';
    $handle = fopen($filename, "w");
    fwrite($handle, $post_data);
    fclose($handle);
    echo $file;
}

require_once './vendor/autoload.php';
                                    
MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398"); 
MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");



?>
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
error_log("===========  TODO  otra vez ============== ".print_r($post_data, true));
?>


<?php


    switch($_POST["type"]) {
        case "payment":
            $data = MercadoPago\Payment::find_by_id($_POST["id"]);
            break;
        case "plan":
            $data = MercadoPago\Plan::find_by_id($_POST["id"]);
            break;
        case "subscription":
            $data = MercadoPago\Subscription::find_by_id($_POST["id"]);
            break;
        case "invoice":
            $data = MercadoPago\Invoice::find_by_id($_POST["id"]);
            break;
    }



?>

