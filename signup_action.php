<?php
require("start.php");
//Get user data
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$emailme = $_POST['emailme'];

//Send to server
$authenticate = new Authenticate;
$authenticate->signup($name,$username,$email,$password,$emailme);
?>