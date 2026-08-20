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
      $host = "***";
      $user = "***";
      $password = "***";
      $database = "***";

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
    <ol>
        <li>db (table structure from 25-26 season)</li>
        <li>form </li>
        <li>form 2 update/edit/delete</li>
        <li>account & authentication </li>
        <li>styles</li>
    </ol>

<!--<form action="update.php" method="post">-->


<!-- <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail:
  <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website:
  <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form> -->

  <!--https://www.w3schools.com/PHP/php_form_required.asp-->


<!-- Team: <input type="text" name="team"><br>
Points: <input type="text" name="points"><br> -->

<input type="submit">
</form>



</body>
</html>