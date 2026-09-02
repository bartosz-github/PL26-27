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
      $host = "*****";
      $user = "*****";
      $password = "*****";
      $database = "*****";

      $connect = new mysqli($host, $user, $password, $database);
      
      if($connect->error)
        die("Failed to connect with database");
      echo "Database connected";

      $sql = "SELECT id, team, played, points, gd  FROM pltable ORDER BY points DESC, gd DESC, for_goals DESC";
      $result = $connect->query($sql);

      echo "<br>";
      echo "<br>";
      $x = 1;

      if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
              $Y = 30-(strlen($row["team"]));
              echo  $x . " - " . $row["team"] . " ".$Y .  str_repeat("&ensp;", $Y) . "Played:" . $row["played"] .  ("&ensp;") . "Points:" . $row["points"] .  ("&ensp;") . "Gd:" . $row["gd"] ."<br>"; //"" . $row["id"].
              $x = $x + 1;
        }
      } else {
        echo "0 results";
      }


      $connect->close();

      echo "<br>"."<br>"."<br>"."<br>"."<br>";

    ?>

  <br>
  ################################################################################<br>
  ################################################################################<br>
          <h2>Score</h2>
          <form action="insert.php" method="POST">
              <!-- Match Week -->
              Match week
              <input name="match_week" required type="number" min="1" max="38" />
              <br/><br/>

              <!-- Team one -->
              Team 1:
              <input name="team_one" required type="text"/>

              <!-- Team two -->
              Team 2:
              <input name="team_two" required type="text"/>
              <br/><br/>

              <!-- Score -->
              Score:
              <input name="for_team_one" required type="number"/>
              <input name="for_team_two" required type="number"/>
              <br/><br/>

              <br/><br/>

              <!-- Submit button -->
              <input type="submit" value="Submit"/>
          </form>
  <br>
  ################################################################################<br>
  ################################################################################<br>

</body>
</html>