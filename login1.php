<?php

    $servername = "127.0.0.1:3307";
    $user = "root";
    $pass = "Munguti610.";
    $database="heroes_database";

    $username=$_POST["username"];
    $password=$_POST["password"];


    $conn =new mysqli($servername, $user, $pass, $database);
    $query="SELECT* From users where username='$username' and passwords='$password'";
    $result=mysqli_query($conn,$query);
    if (mysqli_num_rows($result)==1){
        session_start();
        $_SESSION["heroes_database"]="true";
        header("./loging_trial.php");}
    else{
        echo 'wrong username or password';}
    
?>
<h1>Login</h1>
<form method="POST">
    Username:<br><input type="text" name="username"><br>
    Password:<br><input type="password" name="password"><br>
    <input type="submit" value="Login">

    <?php

    $servername = "127.0.0.1:3307";
    $user = "root";
    $pass = "Munguti610.";
    $database="heroes_database";

    $username=$_POST["username"];
    $password=$_POST["password"];


    $conn =new mysqli($servername, $user, $pass, $database);
    $query="SELECT* From users where username='$username' and passwords='$password'";
    $result=mysqli_query($conn,$query);
    if (mysqli_num_rows($result)==1){
        session_start();
        $_SESSION["heroes_database"]="true";
        header("./loging_trial.php");}
    else{
        echo 'wrong username or password';}
    
?>

</form>

