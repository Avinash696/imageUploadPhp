<?php 
include 'db_connection.php';
global $connection ;

$upload_path  = 'uploads/';
$server_ip = gethostbyname(gethostname());
$upload_url = 'http://'.$server_ip .'/imgWeb /'.$upload_path ;

$responce = array();

?>