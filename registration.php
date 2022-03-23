
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href ="styles1.css">
    <link rel="stylesheet" href="styles.css" />

    <title>heroes form</title>
  </head>
  <body>
    <header>
        <ul>
          <ol>
            <a href="display.php">MY HEROES</a>
          </ol>
          <ol>
            <a href="delete.php">DELETE</a>
          </ol>
          <ol>
            <a href="logout.php">LOGOUT</a>
          </ol>
        </ul>
    </header>

    <main>
      <h1 class="header">USER REGISTRATION</h1>
      <form method="POST">
        <div class="group">
          <lable for="name">username</lable>
          <input type="text" name="name" id="name" placeholder="enter username" />
        </div>
        <div class="group">
          <label for="realname">password</label>
          <input
            type="text"
            name="realname"
            id="realname"
            placeholder="enter password"
          />
        </div>
        
        <button type="submit" name="submit" id="submit">submit</button>
      </form>
      <?php
      include "configuration.php";
      if (isset($_POST['submit'])) {
        $username = $_POST["name"];
        $password = $_POST["realname"];
        
        // insert data from the users into database
        $insert = "INSERT INTO users (username, passwords) VALUE ('$username','$password')";
        $query = mysqli_query($conn, $insert);
        //if ($query) {
            //echo ("successfull add") . "<br>";
        //} else {
            //echo ("failed to add data") . "<br>";
        }//}
        $conn->close();

      ?>
    </main>
  </body>
</html>
