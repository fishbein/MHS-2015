<?php
	include("start.php");
	$email = strip_tags(mysql_real_escape_string($_POST['email']));
	$check = mysql_query("SELECT * FROM emails WHERE email='$email'");
	if(mysql_num_rows($check)==0){
		$query = mysql_query("INSERT INTO emails VALUES('','$email')");
		header("Location:index.php?error=nope");
	}
	else{
		header("Location:index.php?error=true");
	}
?>