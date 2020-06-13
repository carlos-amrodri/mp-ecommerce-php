<?php 
$post_data = $_POST['data'];

if (!empty($post_data)) {
    error_log("===========  Vacio el post  ============== ".print_r("Vacio", true));
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


    switch($_POST["type"]) {
        case "payment":
            $data = MercadoPago\Payment::find_by_id($_POST["id"]);
            error_log("===========  Payment  ============== ".print_r($data, true));
            break;
        case "plan":
            $data = MercadoPago\Plan::find_by_id($_POST["id"]);
            error_log("===========  Plan  ============== ".print_r($data, true));
            break;
        case "subscription":
            $data = MercadoPago\Subscription::find_by_id($_POST["id"]);
            error_log("===========  Suscription  ============== ".print_r($data, true));
            break;
        case "invoice":
            $data = MercadoPago\Invoice::find_by_id($_POST["id"]);
            error_log("===========  Invoice  ============== ".print_r($data, true));
            break;
    }



?>
