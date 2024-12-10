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
                <h2>Chcesz dodać nowe Pytanie czy zedytować istniejące?</h2>
                <button name="Add" value="Dodaj" type="submit">Dodaj</button>
                <button name="Edit" value="Edytuj" type="submit">Edytuj</button>
            </div>
            
        </form>

    <?php 

        if(isset($_GET['Add'])){
            if($_GET['Add'] != ""){
                header("Location: editor.php");
            }
        }
        
        if(isset($_GET['Edit'])){
            if($_GET['Edit'] != ""){
                header("Location: zmiana.php");
            }
        }
    ?>
</body>
</html>