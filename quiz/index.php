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
            SUPER QUIZ
            <br>
            <button name="Play" value="Playing" type="submit">Zagraj w Quiz</button>
            <button name="Editor" value="Edit" type="submit">Przejdź do edytora</button>
        </div>
    </form>

    <?php 
        if(isset($_GET['Play'])){
            if($_GET['Play'] == true){
                header("Location: pytania/quiz.php");
            }
        }
        if(isset($_GET['Editor'])){
            if($_GET['Editor'] == true){
                header("Location: Wybor.php");
            }
        }

        $_SESSION["poprawnie"] = 0;
        $_SESSION["bledy"] = 0;
        $_SESSION["numer_pytania"] = 0;
    ?>
</body>
</html>