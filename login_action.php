<?php
require("start.php");
//Get user data
$username = $_POST['username'];
$password = md5($_POST['password']);

//Send to server
$authenticate = new Authenticate;
$authenticate->login($username,$password);
?>