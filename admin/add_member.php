<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
	header("Location: index.php");
}
require_once 'connection.php';

if(isset($_POST['btn-signup'])) {

	$uname = strip_tags($_POST['username']);
	$email = strip_tags($_POST['email']);
	$upass = strip_tags($_POST['password']);
  $fname = strip_tags($_POST['fname']);
  $lname = strip_tags($_POST['lname']);
  $tel = strip_tags($_POST['tel']);

	$uname = $conn->real_escape_string($uname);
	$email = $conn->real_escape_string($email);
	$upass = $conn->real_escape_string($upass);
  $fname = $conn->real_escape_string($fname);
  $lname = $conn->real_escape_string($lname);
  $tel = $conn->real_escape_string($tel);

	$hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version

	$check_email = $conn->query("SELECT email FROM tbl_users WHERE email='$email'");
	$count=$check_email->num_rows;

	if ($count==0) {

		$query = "INSERT INTO tbl_users(username,email,password,fname,lname,tel) VALUES('$uname','$email','$hashed_password','$fname','$lname','$tel')";

		if ($conn->query($query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
					</div>";
		}else {
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
					</div>";
		}

	} else {


		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
				</div>";

	}

	$conn->close();
}
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title> Registration System</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="style.css" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Core CSS RTL-->
    <!-- <link href="css/bootstrap-rtl.min.css" rel="stylesheet"> -->

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/sb-admin-rtl.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>


<div class="signin-form">

	<div class="container">




        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <center><h2 class="form-signin-heading">
                            สมัครสมาชิก

                        </h2></center>


                        <div class="row">
                            <div class="col-lg-12">

                                <form class="form-signin" method="post" id="register-form">

                                  <?php
                              if (isset($msg)) {
                                echo $msg;
                              }
                              ?>

                                    <div class="form-group">
                                        <label></label>
                                      <input type="text" class="form-control" placeholder="ชื่อ" name="fname" required  />
                                    </div>
                                    <div class="form-group">
                                        <label></label>
                                        <input type="text" class="form-control" placeholder="นามสกุล" name="lname" required  />
                                    </div>
                                    <div class="form-group">
                                        <label></label>
                                        <input type="text" class="form-control" placeholder="E-mail" name="email" required  />
                                    </div>
                                    <div class="form-group">
                                        <label></label>
                                        <input type="text" class="form-control" placeholder="Password" name="password" required  />
                                    </div>
                                    <div class="form-group">
                                        <label></label>
                                        <input type="text" class="form-control" placeholder="เบอร์โทรศัพท์" name="tel" required  />
                                    </div>
                                    <div class="form-group">
                                        <label></label>
                                        <input type="text" class="form-control" placeholder="status" name="username" required  />
                                    </div>




                                    <button type="submit" class="btn btn-default" name="btn-signup"> ตกลง </button>

                                    <button type="reset" class="btn btn-default">Reset </button>

                          </form>
                      </div>
                        </div>
                        <!-- /.row -->

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->


          </div>

          </div>

          </body>
          </html>


<?php include 'include/footer.php'; ?>
