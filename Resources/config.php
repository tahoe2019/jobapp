<?php 

//// this is the encription functioin all the database 

function encryptor($action, $string) {
    $output = false;
    $encrypt_method = "AES-256-CBC";
    
    $secret_key = 'tahoe';
    $secret_iv = 'tahoe@12345678';

   
    $key = hash('sha256', $secret_key);
    
   
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    
    if( $action == 'encrypt' ) 
    {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    }
    else if( $action == 'decrypt' )
    {
    	
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0,      $iv);
    }

    return $output;
}







ob_start();
session_start();


defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "Templates/front");
defined("TEMPLATE_BACKEND") ? null : define("TEMPLATE_BACKEND", __DIR__ . DS . "Templates/backend");




defined("DB_HOST") ? null : define("DB_HOST", "localhost");

defined("DB_USER") ? null : define("DB_USER", "root");

defined("DB_PASS") ? null : define("DB_PASS", "");
defined("DB_NAME") ? null : define("DB_NAME", "jobApp");

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
require_once("function.php");













 ?>


