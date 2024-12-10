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
            <h2>Proszę podać Pytanie</h2>
            <input name="Question"></input>

            <div id="Gerwazy">
                <h2>Prosze podać odpowiedzi błędne</h2>
                <input name="lab1"/></label>
                <input name="lab2"/></label>
                <input name="lab3"/></label>
                <h2>Proszę podać poprawną odpowiedź</h2>
                <input name="labY"/></label>
            </div>

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