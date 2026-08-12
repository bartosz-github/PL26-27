<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>PL 2026-2027</title>
</head>
<body>
    <?php
      $host = "localhost";
      $user = "******";
      $password = "******";
      $database = "******";

      $connect = new mysqli($host, $user, $password, $database);

      if($connect->error)
        die("Failed to connect with database");
      echo "Database connected!";

      $sql = "SELECT id, team, points  FROM statecaps ORDER BY id";
      $result = $connect->query($sql);


      echo "<br>";
      echo "<br>";

      if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
          echo "" . $row["id"]. " - " . $row["team"]." [". $row["points"] ."] ". "<br>";
        }
      } else {
        echo "0 results";
      }

      $connect->close();

      echo "<br>"."<br>"."<br>"."<br>"."<br>";


    <ol>
        <li>db (table from 25-26)</li>
        <li>table</li>
        <li>authentication</li>
        <li>form 2 update/edit/delete</li>
        <li>styles</li>
    </ol>
</body>
</html>