<?php
require("start.php");
//Get user data
$title = $_POST['title'];
$month = $_POST['month'];
$day = $_POST['day'];
$year = $_POST['year'];
$note = $_POST['note'];
$location = $_POST['where'];
$hour = $_POST['hour'];
$minute = $_POST['minute'];

//Send to server
$event = new Event;
$event->create($title, $month, $day, $year, $location, $note, $hour, $minute);
?>