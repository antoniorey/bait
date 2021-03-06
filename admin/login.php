<?php
session_start();
require_once 'connection.php';

if (isset($_SESSION['userSession'])!="") {
	header("Location: index.php");
	exit;
}

if (isset($_POST['btn-login'])) {

	$email = strip_tags($_POST['email']);
	$password = strip_tags($_POST['password']);

	$email = $conn->real_escape_string($email);
	$password = $conn->real_escape_string($password);

	$query = $conn->query("SELECT user_id, email, password FROM tbl_users WHERE email='$email'");
	$row=$query->fetch_array();

	$count = $query->num_rows; // if email/password are correct returns must be 1 row

	if (password_verify($password, $row['password']) && $count==1) {
		$_SESSION['userSession'] = $row['user_id'];
		header("Location: index.php");
	} else {
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
				</div>";
	}
	$conn->close();
}
?>


<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title> Login </title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

<div class="signin-form">

	<div class="container">


       <form class="form-signin" method="post" id="login-form">

        <h2 class="form-signin-heading">Sign In.</h2><hr />

        <?php
		if(isset($msg)){
			echo $msg;
		}
		?>

        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="email" required />
        <span id="check-e"></span>
        </div>

        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" required />
        </div>

     	<hr />

        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
			</button>



        </div>



      </form>

    </div>

</div>

</body>
</html>
