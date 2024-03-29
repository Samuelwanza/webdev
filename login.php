<?php
if($_POST){
    include "configuration.php";
    $username=$_POST["username"];
    $password=$_POST["password"];


    //$conn =new mysqli($servername, $user, $pass, $database);
    $query="SELECT* From users where username='$username' and password='$password'";
	
    $result=mysqli_query($conn,$query);
    if (mysqli_num_rows($result)==1){
        session_start();
        $_SESSION["heroes_database"]="true";
        header("location:heroes.php");}
    else{
        echo 'wrong username or password';}
    }
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Login </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="form/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Have an account?</h3>
						<form method="POST" class="login-form">
		      		<div class="form-group">
		      			<input type="text" name="username" class="form-control rounded-left" placeholder="username">
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" name="password" class="form-control rounded-left" placeholder="password">
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
	            		<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#">Forgot Password</a>
								</div>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5" value="Login">Login</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>
	


	<script src="form/js/jquery.min.js"></script>
  <script src="form/js/popper.js"></script>
  <script src="form/js/bootstrap.min.js"></script>
  <script src="form/js/main.js"></script>

	</body>
</html>

