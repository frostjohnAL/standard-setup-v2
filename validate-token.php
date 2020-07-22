<?php
//error_reporting(E_ALL);
$private_key = "INSERT_PRIVATE_KEY";
$session_token = $_GET["fc-token"];//https://example-verify-api.arkoselabs.com/api/v2/verify/
// echo $session_token;
//echo "test";
$fc_api_url = "https://verify-api.arkoselabs.com/api/v2/verify/?private_key=".$private_key."&session_token=".$session_token; 
$response = file_get_contents($fc_api_url);
$fc_results = json_decode($response);

header("Access-Control-Allow-Origin: *");
// echo json_encode($fc_results);
if (isset($fc_results->solved) && $fc_results->solved == true) {
    echo $response;
} else {
    echo $response;
}
?>
