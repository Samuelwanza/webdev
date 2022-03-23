<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="styles1.css" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
  </head>
  <body>
    <header>
      <ul>
        <ol>
          <a href="logout.php">LOGOUT</a>
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
          <a href="registration.php">REGISTRATION</a>
        </ol>

      </ul>
      <h1> Users</h1>
      <p id="p"> These are the authorized users<p>
    </header>1
    <?php
    include "configuration.php";
    $select = 'SELECT id, username,passwords FROM users';
    $result = $conn->query($select); if ($select) { ?>

    <table class="tab">
      <tr>
        <th>Id</th>
        <th>Username</th>
        <th>password</th>
      </tr>

      <?php while ($row = $result->fetch_assoc()) { ?>
      <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["username"]; ?></td>
        <td><?php echo $row["passwords"]; ?></td>
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
