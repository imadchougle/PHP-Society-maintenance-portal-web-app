<?php
require('./instamojo.php');

const API_KEY = "Your apt - key";
const AUTH_TOKEN = "Your_auth-token";


if(isset($_POST['paynow'])){

    $api = new Instamojo\Instamojo(API_KEY, AUTH_TOKEN,'https://test.instamojo.com/api/1.1/');

    try {
        $response = $api->paymentRequestCreate(array(
            'purpose'  => $_POST['amt'].' Maintenance by Room '. $_POST['roono'],
            "amount" => $_POST['amt'],
            "roonum" => $_POST['roono'],
            "mname" => $_POST['mname'],
            "redirect_url" => "http://localhost/apartment_maintenance/updated_payment.php?roomNo=". $_POST['roono']
            //"redirect_url" => "http://localhost/apartment_maintenance/updated_payment3.php?"
            ));
        header('Location:'. $response['longurl']);
    }
    catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }
}
?>
