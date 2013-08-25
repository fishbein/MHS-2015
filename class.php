<?php
	function anchor($path, $text){
		echo "<a href=".$path.">".$text."</a>";
	}
	function user($username){
		$query = mysql_query("SELECT * FROM users WHERE username='$username'");
		while($row = mysql_fetch_array($query))
  		{
  			return $row;
  		}
	}
	class Authenticate{
		function signup($name,$username,$email,$password,$emailme){
			$error = new Error;
			//Errors
			$q = mysql_query("SELECT * FROM users WHERE username='$username' OR email='$email'");
			if(mysql_numrows($q)!=0){$error->signup("Exist");}
			else if(!$name){$error->signup("Name");}
			else if(!$username){$error->signup("Username");}
			else if(!$email){$error->signup("Email");}
			else if(!$password){$error->signup("Email");}
			else{
				mysql_query("INSERT INTO users VALUES(
					'',
					'$name',
					'$username',
					'$email',
					'$password',
					'$emailme')
				");
				header("Location:login.php?success=You're all signed up! Log in below.");
			}
		}
		function login($username,$password){
			$error = new Error;
			$query = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password'");
			if(mysql_numrows($query)==0){
				$error->login();
			}
			else{
				$_SESSION['username'] = $username;
				header("Location:index.php");
			}
		}
	}
	class Error{
		function signup($type){
			if($type=="Exist"){
				header("Location:".SITE_PATH."signup.php?error=Your account already exists. <a href='/login'>Log in</a>?");
			}
			header("Location:".SITE_PATH."signup.php?error=".$type." is required.");
		}
		function login(){
			header("Location:/login.php?error=Whoops! Your username or password is incorrect. FORGOT LINK - SIGN UP LINK");
		}
	}
	class Event{
		function view($param){
			if(is_numeric($param)){
				//Individual Event ID
			}
			else{
				$month = date('m', strtotime($param));
				$query = mysql_query("SELECT * FROM events WHERE month='$month'");
				while($row = mysql_fetch_array($query))
  				{
  					return $row;
  				}
			}
		}
	}
?>