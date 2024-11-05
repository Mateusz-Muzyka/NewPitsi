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
    <button name="back" value="back">Powrót</button>
        <div id="kontq">
            <input name="Question"></input>
        </div>
    </form>


<?php 
        $mysqli = new mysqli("localhost","root","","quiz");
        if(isset($_GET['back'])){
            if($_GET['back'] == true){
                header("Location: index.php");
            }
        }
        if(isset($_GET['Question'])){
            if($_GET['Question'] == true){
                echo $_GET['Question'];
            }
        }
        
    ?>
</body>
</html>