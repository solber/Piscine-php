<?php
	if (session_status() == PHP_SESSION_NONE) { session_start(); }
	if (isset($_SESSION['auth']->id)) 
	{
		$_SESSION['flash']['danger'] = "You cannot acces this page.";
		header('Location: index.php');
		exit();
	}
	if (!empty($_POST))
	{
		//register
		//verif field not empty
		if (empty($_POST['regusername']) || empty($_POST['regpsw']) || empty($_POST['regpswr']))
		{
			$_SESSION['flash']['danger'] = "Please fill all fields.";
			header('Location: register.php');
			exit();
		}

		//verif format username field
		if (!preg_match('/^[a-zA-Z0-9]+$/', $_POST['regusername']))
		{ 
			$_SESSION['flash']['danger'] = "Invalid username. Allowed char : a-z A-Z 0-9";
			header('Location: register.php');
			exit();
		}

		//verif psw are the same
		if ($_POST['regpsw'] != $_POST['regpswr'])
		{
			$_SESSION['flash']['danger'] = "Password must be the same.";
			header('Location: register.php');
			exit();
		}

		//verif psw size
		if (strlen($_POST['regpsw']) < 6 || strlen($_POST['regpsw']) > 10)
		{
			$_SESSION['flash']['danger'] = "Invalid password size. Minimum 6 Maximum 10.";
			header('Location: register.php');
			exit();
		}

		//Verify user exists
		require_once 'required/database.php';
        $pusername = mysqli_real_escape_string($mysqli, $_POST['regusername']);
        $req = mysqli_query($mysqli, "SELECT id FROM users WHERE username='" .$pusername ."'");
        $user = mysqli_fetch_assoc($req);
        if($user)
        {
        	$_SESSION['flash']['danger'] = "Username already taken.";
			header('Location: register.php');
			exit();
        }

        //register user
        require_once 'required/database.php';
        require_once 'required/functions.php';
        try
        {
        	$password = mysqli_real_escape_string($mysqli, password_hash($_POST['regpsw'], PASSWORD_BCRYPT));
	        $req = mysqli_query($mysqli, "INSERT INTO users SET username ='" .$pusername ."', password ='" .$password ."'");

           	$user_id = mysqli_insert_id($mysqli);
           	$_SESSION['flash']['success'] = "SUCCESS - Account created, please connect !";
           	header('Location: login.php');
            exit();
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<title>Register</title>
</head>
<body>
	<div class="content">
		<a style="top: 8px; left: 16px;" href="index.php">< Go back to index</a>
		<a style="top: 8px; right: 16px;" href="login.php">Have an account ? Click here</a>
		<img class="logo" src="img/TamagoSHOP.png">
		<?php require_once 'required/flash.php'; ?>

		<form method="POST">
			<center><input style="margin-top: 10%;" type="text" name="regusername" placeholder="Login"></center>
			<br>
			<center><input type="password" name="regpsw" placeholder="Password"/></center>
			<br>
			<center><input type="password" name="regpswr" placeholder="Password Repeat"/></center>
			<br>
			<center><button class="btn" name="login" value="login">REGISTER</button></center>
		</form>
	</div>

</body>
</html>