<?php
session_start();
require("config.php");
<<<<<<< HEAD
require("class.php");

if($_SESSION['admin']=="admin"){$admin=TRUE;}
=======
//require("class.php");
>>>>>>> master

//Database Connection
$con = mysql_connect(DB_HOSTNAME,DB_USER,DB_PASSWORD);
$db = mysql_select_db(DB_NAME);
?>