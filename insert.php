<?php

// upd 27/08/2026

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
$matchweek = mysqli_real_escape_string($conn, $_POST['match_week']);
$team1 = mysqli_real_escape_string($conn, $_POST['team_one']);
$team2 = mysqli_real_escape_string($conn, $_POST['team_two']);
$team1score = mysqli_real_escape_string($conn, $_POST['for_team_one']);
$team2score = mysqli_real_escape_string($conn, $_POST['for_team_two']);


switch (true) {
    case $team1 == 'Arsenal' OR $team1 == 'Ars':	$team1_id = 1;
        break;
    case $team1 == 'Aston Villa' OR $team1 == 'Ast':	$team1_id = 2;
        break;
    case $team1 == 'Bournemouth' OR $team1 == 'Bou':	$team1_id = 3;
        break;
    case $team1 == 'Brentford' OR $team1 == 'Bre':	$team1_id = 4;
        break;
    case $team1 == 'Brighton & Hove Albion' OR $team1 == 'Bri':	$team1_id = 5;
        break;
    case $team1 == 'Chelsea' OR $team1 == 'Che':	$team1_id = 6;
        break;
    case $team1 == 'Coventry City' OR $team1 == 'Cov':	$team1_id = 7;
        break;
    case $team1 == 'Crystal Palace' OR $team1 == 'Cry':	$team1_id = 8;
        break;
    case $team1 == 'Everton' OR $team1 == 'Eve':	$team1_id = 9;
        break;
    case $team1 == 'Fulham' OR $team1 == 'Ful':	$team1_id = 10;
        break;
    case $team1 == 'Hull City' OR $team1 == 'Hul':	$team1_id = 11;
        break;
    case $team1 == 'Ipswich Town' OR $team1 == 'Ips':	$team1_id = 12;
        break;
    case $team1 == 'Leeds United' OR $team1 == 'Lee':	$team1_id = 13;
        break;
    case $team1 == 'Liverpool' OR $team1 == 'Liv':	$team1_id = 14;
        break;
    case $team1 == 'Manchester City' OR $team1 == 'ManC':	$team1_id = 15;
        break;
    case $team1 == 'Manchester United' OR $team1 == 'ManU':	$team1_id = 16;
        break;
    case $team1 == 'Newcastle United' OR $team1 == 'New':	$team1_id = 17;
        break;
    case $team1 == 'Nottingham Forest' OR $team1 == 'Not':	$team1_id = 18;
        break;
    case $team1 == 'Sunderland' OR $team1 == 'Sun':	$team1_id = 19;
        break;
    case $team1 == 'Tottenham Hotspur' OR $team1 == 'Tot':	$team1_id = 20;
        break;
    default:
       echo "Error!";
}

switch (true) {
    case $team2 == 'Arsenal' OR $team2 == 'Ars':	$team2_id = 1;
        break;
    case $team2 == 'Aston Villa' OR $team2 == 'Ast':	$team2_id = 2;
        break;
    case $team2 == 'Bournemouth' OR $team2 == 'Bou':	$team2_id = 3;
        break;
    case $team2 == 'Brentford' OR $team2 == 'Bre':	$team2_id = 4;
        break;
    case $team2 == 'Brighton & Hove Albion' OR $team2 == 'Bri':	$team2_id = 5;
        break;
    case $team2 == 'Chelsea' OR $team2 == 'Che':	$team2_id = 6;
        break;
    case $team2 == 'Coventry City' OR $team2 == 'Cov':	$team2_id = 7;
        break;
    case $team2 == 'Crystal Palace' OR $team2 == 'Cry':	$team2_id = 8;
        break;
    case $team2 == 'Everton' OR $team2 == 'Eve':	$team2_id = 9;
        break;
    case $team2 == 'Fulham' OR $team2 == 'Ful':	$team2_id = 10;
        break;
    case $team2 == 'Hull City' OR $team2 == 'Hul':	$team2_id = 11;
        break;
    case $team2 == 'Ipswich Town' OR $team2 == 'Ips':	$team2_id = 12;
        break;
    case $team2 == 'Leeds United' OR $team2 == 'Lee':	$team2_id = 13;
        break;
    case $team2 == 'Liverpool' OR $team2 == 'Liv':	$team2_id = 14;
        break;
    case $team2 == 'Manchester City' OR $team2 == 'ManC':	$team2_id = 15;
        break;
    case $team2 == 'Manchester United' OR $team2 == 'ManU':	$team2_id = 16;
        break;
    case $team2 == 'Newcastle United' OR $team2 == 'New':	$team2_id = 17;
        break;
    case $team2 == 'Nottingham Forest' OR $team2 == 'Not':	$team2_id = 18;
        break;
    case $team2 == 'Sunderland' OR $team2 == 'Sun':	$team2_id = 19;
        break;
    case $team2 == 'Tottenham Hotspur' OR $team2 == 'Tot':	$team2_id = 20;
        break;
    default:
       echo "Error!";
}

$MW_field = 'MW'.$matchweek;


// temp nl2br
if (($team1score==100) AND ($team2score==100)) {
    echo "CLEARING DATA... .<br>\n";

    $sql = "FOR id IN 1..20
            DO
                UPDATE `pltable` SET `MW1` = '';
                UPDATE `pltable` SET `played` = 0;
                UPDATE `pltable` SET `won` = 0;
                UPDATE `pltable` SET `drawn` = 0;
                UPDATE `pltable` SET `lost` = 0;
                UPDATE `pltable` SET `for_goals` = 0;
                UPDATE `pltable` SET `against_goals` = 0;
                UPDATE `pltable` SET `gd` = 0;
                UPDATE `pltable` SET `points` = 0;
            END FOR;
    ";

} elseif ($team1score>$team2score) {
    echo "WINNER - $team1 .<br>\n";
    echo "WINNER - $team1_id .<br>\n";
    echo "LOSER - $team2 .<br>\n";
    echo "LOSER - $team2_id .<br>\n";
    

    $sql = "FOR X IN 1..1
            DO
                UPDATE `pltable` SET `played` = (`played` + 1), `won` = (`won` + 1), `for_goals` = (`for_goals` + $team1score), `against_goals` = (`against_goals` + $team2score), `gd` = (`gd` + ($team1score-$team2score)), `points` = (`points` + 3), $MW_field = 3 WHERE id = $team1_id;
                UPDATE `pltable` SET `played` = (`played` + 1), `lost` = (`lost` + 1), `for_goals` = (`for_goals` + $team2score), `against_goals` = (`against_goals` + $team1score), `gd` = (`gd` + ($team2score-$team1score)), `points` = (`points` + 0), $MW_field = 0  WHERE id = $team2_id;
            END FOR;
    ";
} elseif ($team1score<$team2score) {
    echo "WINNER - $team2 .<br>\n";
    echo "WINNER - $team2_id .<br>\n";
    echo "LOSER - $team1 .<br>\n";
    echo "LOSER - $team1_id .<br>\n";
    
    $sql = "FOR X IN 1..1
            DO
                UPDATE `pltable` SET `played` = (`played` + 1), `lost` = (`lost` + 1), `for_goals` = (`for_goals` + $team1score), `against_goals` = (`against_goals` + $team2score), `gd` = (`gd` + ($team1score-$team2score)), `points` = (`points` + 0), $MW_field = 0 WHERE id = $team1_id;
                UPDATE `pltable` SET `played` = (`played` + 1), `won` = (`won` + 1), `for_goals` = (`for_goals` + $team2score), `against_goals` = (`against_goals` + $team1score), `gd` = (`gd` + ($team2score-$team1score)), `points` = (`points` + 3), $MW_field = 3 WHERE id = $team2_id;
            END FOR;
    ";
} elseif ($team1score==$team2score) {
    echo "DRAW <br>\n";

    $sql = "FOR X IN 1..1
            DO
                UPDATE `pltable` SET `played` = (`played` + 1), `drawn` = (`drawn` + 1), `for_goals` = (`for_goals` + $team1score), `against_goals` = (`against_goals` + $team2score), `gd` = (`gd` + ($team1score-$team2score)), `points` = (`points` + 1), $MW_field = 1 WHERE id = $team1_id;
                UPDATE `pltable` SET `played` = (`played` + 1), `drawn` = (`drawn` + 1), `for_goals` = (`for_goals` + $team2score), `against_goals` = (`against_goals` + $team1score), `gd` = (`gd` + ($team1score-$team2score)), `points` = (`points` + 1), $MW_field = 1 WHERE id = $team2_id;
            END FOR;
    ";
}

// Upd_DB
if ($conn->query($sql) === TRUE) {
    echo "Database updated.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();

// echo "<br>";
// echo '<a href="index.php">Back to table</a>';

?>