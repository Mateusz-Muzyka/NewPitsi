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

        <form method="GET">
            <div id="kontener">
                <h2>Wprowadź nazwe użytkownika by wpisać się do tabeli mistrzów</h2>
                <input name="nick"></input>
            </div>
        </form>

    <?php 

        if(isset($_GET['nick'])){
            if($_GET['nick'] != ""){
                $mysqli = new mysqli("localhost","root","","quiz");
                $tymczas = $_GET['nick'];
                $tymczas2 = $_SESSION['wynik'];
                $tymczas3 = $_SESSION['poprawnie'];
                $sql = "INSERT INTO wyniki (id, gracz , wynik, sorter) VALUES (NULL, '$tymczas','$tymczas2', '$tymczas3')";
                $mysqli->query($sql);
                $_SESSION['poprawnie'] = 0;
                header("Location: leaderboard.php");
            }
        }
    ?>
</body>
</html>