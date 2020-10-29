<?php
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
if (!empty($email)){
if (!empty($phone)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Bot";
// Creating connections
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
}
else{
$sql = "INSERT INTO UserInfo (Email, Phone) values ('$email','$phone')";
}
?>
