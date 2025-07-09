<?php 

ini_set('session.use_only_cookies',1);
ini_set('session.use_strict_mode',1);

session_set_cookies_params([
    'lifetime' => 1800, 
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true
]);
session_start();

if(!isset($_SESSION['last_regeneration'])){
   session_regenerate_id(true);
   session_create_id(true);
   $_SESSION['last_generation'] = time();
}else {
    $interval = 60*30;
    if(time() - $_SESSION['last_generation'] >= $interval) {
        session_regenerate_id(true);
        $_SESSION['last_generation'] = time();
    }
}