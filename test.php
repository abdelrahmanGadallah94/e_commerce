<?php 

include './connect.php';
$table = "users";
// $name = filterRequest("namerequest");
$data = array( 
"users_name" => "abdelrahman",
"users_email" => "abhg94@yahoo.com",
"users_phone" => "123456789",
"users_verify_code" => "11111",       
);
$count = insertData($table , $data);