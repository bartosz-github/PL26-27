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
      echo "Database connected!";

      $sql = "SELECT id, team, points  FROM pltable ORDER BY id";
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


      
    ?>

        <h2>Results & Scores</h2>
        <form action="insert.php" method="POST">
            <!-- Team one -->
            Team 1:
            <input name="team_one" required type="text"/>
            <br/><br/>

            <!-- Team two -->
            Team 2:
            <input name="team_two" required type="text"/>
            <br/><br/>

            <!-- Result -->
            Result:
            <input name="result" required type="radio" value="team_1_won"/> Team One Won
            <input name="result" required type="radio" value="team_2_won"/> Team Two Won
            <input name="result" required type="radio" value="teams_draw"/> Draw
            <br/><br/>

            <!-- Score -->
            Score:
            <input name="for_team_one" required type="text"/>
            <input name="for_team_two" required type="text"/>
            <br/><br/>

            <br/><br/>

            <!-- Submit button -->
            <input type="submit" value="Submit"/>
        </form>



    <!--<form action="update.php" method="post">-->



  <!--https://www.w3schools.com/PHP/php_form_required.asp-->

<!-- Team: <input type="text" name="team"><br>
Points: <input type="text" name="points"><br> -->

<!-- <input type="submit"> -->
</form>



</body>
</html>