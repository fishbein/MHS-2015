<?php
session_start();
require("config.php");
require("class.php");

//Database Connection
$con = mysql_connect(DB_HOSTNAME,DB_USER,DB_PASSWORD);
$db = mysql_select_db(DB_NAME);
?>