<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='styles.css'>
</head>
<body>
    <?php 

        echo "<form method='GET'>";
        echo '<div id="kontener">';
        $liczba = $_SESSION["poprawnie"]+$_SESSION["bledy"];
        $_SESSION['wynik'] = $_SESSION["poprawnie"]."/".$liczba;
        echo "TWÓJ WYNIK TO: ".$_SESSION['wynik']  ;
        echo "<br>";
        echo '<button name="Leaderboard" value="LB">TABLICA WYNIKÓW</button>';
        echo '<button name="reset" value="R">ZACZNIJ OD NOWA</button>';
        echo '</div>';
        echo '</form>';

        if(isset($_GET['Leaderboard'])){
            if($_GET['Leaderboard'] == true){
                header("Location: leaderboard.php");
                $_SESSION['poprawnie'] = 0;
                $_SESSION['bledy'] = 0;
            }
        }
        if(isset($_GET['reset'])){
            if($_GET['reset'] == true){
                header("Location: index.php");
            }
        }

    ?>
</body>
</html>