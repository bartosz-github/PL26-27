<?php
$servername = "*****";
$username = "*****;
$password = "*****";
$dbname = "*****";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect and sanitize form data
$team1 = mysqli_real_escape_string($conn, $_POST['team_one']);
$team2 = mysqli_real_escape_string($conn, $_POST['team_two']);
// $result = mysqli_real_escape_string($conn, $_POST['result']);
$team1score = mysqli_real_escape_string($conn, $_POST['for_team_one']);
$team2score = mysqli_real_escape_string($conn, $_POST['for_team_two']);





switch ($team1) {
    case 'Arsenal':
	$team1_id = 1;
        break;
    case 'Aston Villa':
	$team1_id = 2;
        break;
    case 'Bournemouth':
	$team1_id = 3;
        break;
    case 'Brentford':
	$team1_id = 4;
        break;
    case 'Brighton & Hove Albion':
	$team1_id = 5;
        break;
    case 'Chelsea':
	$team1_id = 6;
        break;
    case 'Coventry City':
	$team1_id = 7;
        break;
    case 'Crystal Palace':
	$team1_id = 8;
        break;
    case 'Everton':
	$team1_id = 9;
        break;
    case 'Fulham':
	$team1_id = 10;
        break;
    case 'Hull City':
	$team1_id = 11;
        break;
    case 'Ipswich Town':
	$team1_id = 12;
        break;
    case 'Leeds United':
	$team1_id = 13;
        break;
    case 'Liverpool':
	$team1_id = 14;
        break;
    case 'Manchester City':
	$team1_id = 15;
        break;
    case 'Manchester United':
	$team1_id = 16;
        break;
    case 'Newcastle United':
	$team1_id = 17;
        break;
    case 'Nottingham Forest':
	$team1_id = 18;
        break;
    case 'Sunderland':
	$team1_id = 19;
        break;
    case 'Tottenham Hotspur':
	$team1_id = 20;
        break;
}

switch ($team2) {
    case 'Arsenal':
	$team2_id = 1;
        break;
    case 'Aston Villa':
	$team2_id = 2;
        break;
    case 'Bournemouth':
	$team2_id = 3;
        break;
    case 'Brentford':
	$team2_id = 4;
        break;
    case 'Brighton & Hove Albion':
	$team2_id = 5;
        break;
    case 'Chelsea':
	$team2_id = 6;
        break;
    case 'Coventry City':
	$team2_id = 7;
        break;
    case 'Crystal Palace':
	$team2_id = 8;
        break;
    case 'Everton':
	$team2_id = 9;
        break;
    case 'Fulham':
	$team2_id = 10;
        break;
    case 'Hull City':
	$team2_id = 11;
        break;
    case 'Ipswich Town':
	$team2_id = 12;
        break;
    case 'Leeds United':
	$team2_id = 13;
        break;
    case 'Liverpool':
	$team2_id = 14;
        break;
    case 'Manchester City':
	$team2_id = 15;
        break;
    case 'Manchester United':
	$team2_id = 16;
        break;
    case 'Newcastle United':
	$team2_id = 17;
        break;
    case 'Nottingham Forest':
	$team2_id = 18;
        break;
    case 'Sunderland':
	$team2_id = 19;
        break;
    case 'Tottenham Hotspur':
	$team2_id = 20;
        break;
}

// temp nl2br
if ($team1score==$team2score) {
    echo "DRAW \n";
    //WHERE username = '$user'";
    $sql1 = "UPDATE `pltable` SET `played` = (`played` + 1), `drawn` = (`drawn` + 1), `for_goals` = (`for_goals` + $team1score), `against_goals` = (`against_goals` + $team2score), `gd` = (`gd` + ($team1score-$team2score)), `points` = (`points` + 1) WHERE id = $team1_id";
    $sql2 = "UPDATE `pltable` SET `played` = (`played` + 1), `drawn` = (`drawn` + 1), `for_goals` = (`for_goals` + $team2score), `against_goals` = (`against_goals` + $team1score), `gd` = (`gd` + ($team1score-$team2score)), `points` = (`points` + 1) WHERE id = $team2_id";

} elseif ($team1score>$team2score) {
    echo "TEAM ONE WON \n";
    $sql1 = "UPDATE `pltable` SET `played` = (`played` + 1), `won` = (`won` + 1), `for_goals` = (`for_goals` + $team1score), `against_goals` = (`against_goals` + $team2score), `gd` = (`gd` + ($team1score-$team2score)), `points` = (`points` + 3) WHERE id = $team1_id";
    $sql2 = "UPDATE `pltable` SET `played` = (`played` + 1), `lost` = (`lost` + 1), `for_goals` = (`for_goals` + $team2score), `against_goals` = (`against_goals` + $team1score), `gd` = (`gd` + ($team2score-$team1score)), `points` = (`points` + 0) WHERE id = $team2_id";

} elseif ($team1score<$team2score) {
    echo "TEAM TWO WON \n";
    $sql1 = "UPDATE `pltable` SET `played` = (`played` + 1), `lost` = (`lost` + 1), `for_goals` = (`for_goals` + $team1score), `against_goals` = (`against_goals` + $team2score), `gd` = (`gd` + ($team1score-$team2score)), `points` = (`points` + 0) WHERE id = $team1_id";
    $sql2 = "UPDATE `pltable` SET `played` = (`played` + 1), `won` = (`won` + 1), `for_goals` = (`for_goals` + $team2score), `against_goals` = (`against_goals` + $team1score), `gd` = (`gd` + ($team2score-$team1score)), `points` = (`points` + 3) WHERE id = $team2_id";
}

if ($conn->query($sql1) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}

if ($conn->query($sql2) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}


// Close the connection
$conn->close();
?>