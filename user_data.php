<?php 
// post user information
$user_information = $_POST;

// save user information into csv file format
$file = "./userdata.csv";
$userdata = fopen($file, 'a'); 
fputcsv($userdata, $user_information);
fclose($userdata);

// display user information
print_r($user_information);
