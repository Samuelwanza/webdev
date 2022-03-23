<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HEROES</title>
    <link rel="stylesheet" type="text/css" href="styles1.css" />
  </head>
  <body>
    <header>
      <ul>

        <ol>
          <a href="registration.php">REGISTRATION</a>
        </ol>

        <ol>
          <a href="users.php">USERS</a>
        </ol>

        <ol>
          <a href="index.php">UPDATE</a>
        </ol>
        <ol>
          <a href="delete.php">DELETE</a>
        </ol>
        <ol>
          <a href="index.php">CREATE</a>
        </ol>
        <ol>
          <a href="logout.php">LOGOUT</a>
        </ol>

      </ul>
      <h1> Heroes</h1>
      <p id="p"> The best place to obtain info about your heroes<p>
    </header>
    <?php
    include "configuration.php";
    $select = 'SELECT id, hero_name, real_name, short_bio, long_bio FROM heroes';
    $result = $conn->query($select); if ($select) { ?>

    <table class="tab">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Real_name</th>
        <th>Short Bio</th>
        <th>Long Bio</th>
      </tr>

      <?php while ($row = $result->fetch_assoc()) { ?>
      <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["hero_name"]; ?></td>
        <td><?php echo $row["real_name"]; ?></td>
        <td><?php echo $row["short_bio"]; ?></td>
        <td><?php echo $row["long_bio"]; ?></td>
      </tr>
      <?php  }
        } 
        else {
            echo "o result";
        }  
        $conn->close(); ?>
    </table>
  </body>
</html>
