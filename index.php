
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
      <h1 class="header">Heroes form</h1>
      <form method="POST">
        <div class="group">
          <lable for="name">name</lable>
          <input type="text" name="name" id="name" placeholder="enter name" />
        </div>
        <div class="group">
          <label for="realname">real name</label>
          <input
            type="text"
            name="realname"
            id="realname"
            placeholder="enter real name"
          />
        </div>
        <div class="group">
          <label for="shortbio">short bio</label>
          <textarea
            class="shorts"
            name="shortbio"
            id="shortbio"
            placeholder="enter a short bio about hero"
          ></textarea>
        </div>
        <div class="group">
          <label for="longbio">long bio</label>
          <textarea
            class="longs"
            name="longbio"
            id="longbio"
            placeholder="long bio about hero story"
          ></textarea>
        </div>

        <button type="submit" name="submit" id="submit">submit</button>
      </form>
      <?php
      include "configuration.php";
      if (isset($_POST['submit'])) {
        $name = $_POST["name"];
        $real_name = $_POST["realname"];
        $shortBio = $_POST["shortbio"];
        $longBio = $_POST["longbio"];

        // insert data from the users into database
        $insert = "INSERT INTO heroes (hero_name, real_name, short_bio, long_bio) VALUE ('$name','$real_name','$shortBio','$longBio')";
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
