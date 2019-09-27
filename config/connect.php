<?php

$db_name = "rush";
$db_password = 'HboYfcqdt2tg1MQP';
$db_username = 'dev-rc';
$db_address =   'localhost';

$conn = mysqli_connect($db_address,$db_username,$db_password,$db_name);

if(!$conn){
    echo 'error'. mysqli_connect_error();
}


?>