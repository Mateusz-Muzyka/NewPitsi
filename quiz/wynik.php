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
        $liczba = $_SESSION["dobrze"]+$_SESSION["zle"];
        $_SESSION['wynik'] = $_SESSION["dobrze"]."/".$liczba;
        echo "TWÓJ WYNIK TO: ".$_SESSION['wynik']  ;
        echo "<br>";
        echo '<button name="TblWynikow" value="LB">TABLICA WYNIKÓW</button>';
        echo '<button name="reset" value="R">ZACZNIJ OD NOWA</button>';
        echo '</div>';
        echo '</form>';

        if(isset($_GET['TblWynikow'])){
            if($_GET['TblWynikow'] == true){
                header("Location: pre-leaderboard.php");
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