<?php
if($_POST){
    include "configuration.php";
    $username=$_POST["username"];
    $password=$_POST["password"];


    //$conn =new mysqli($servername, $user, $pass, $database);
    $query="SELECT* From users where username='$username' and passwords='$password'";
    $result=mysqli_query($conn,$query);
    if (mysqli_num_rows($result)==1){
        session_start();
        $_SESSION["heroes_database"]="true";
        header("location:display.php");}
    else{
        echo 'wrong username or password';}
    }
?>

<!--h1>Login</h1>
<form method="POST">
    Username:<br><input type="text" name="username"><br>
    Password:<br><input type="password" name="password"><br>
    <input type="submit" value="Login">
</form-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="styles1.css" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
    
    
  </head>
  <body>
      <h1 class="header">ADMINISTRATOR</h1>

  <form method="POST">
    Username:<br><input type="text" name="username"><br>
    Password:<br><input type="password" name="password"><br>
    <button type="submit" value="Login">LOGIN</button>
</form>


  </body>
</html>


