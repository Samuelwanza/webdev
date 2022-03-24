<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles1.css" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
  </head>
  <body>
    <header>
      <ul>
        <ol>
          <a href="login.php">LOGIN</a>
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
