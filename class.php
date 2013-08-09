<?php
	function anchor($path, $text){
		echo "<a href=".$path.">".$text."</a>";
	}
	class Authenticate{
		function signup($name,$username,$email,$password,$emailme){
			$error = new Error;
			//Errors
			if(!$name){$error->signup("Name");}
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
			header("Location:/signup.php?error=".$type." is required.");
		}
		function login(){
			header("Location:/login.php?error=Whoops! Your username or password is incorrect. FORGOT LINK - SIGN UP LINK");
		}
	}
?>