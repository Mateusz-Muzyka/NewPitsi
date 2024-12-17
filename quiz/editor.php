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
    <button name="back" value="qqq">Powrót</button>
        <div id="kontq">
            <h2>Proszę podać Pytanie</h2>
            <input name="pytanie"></input>

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
        $con = new mysqli("localhost","root","","quiz");
        if(isset($_GET['pytanie'])){
            if($_GET['pytanie'] == true){
                $pytanie = $_GET['pytanie'];
                $Z1 = $_GET['lab1'];    
                $Z2 = $_GET['lab2'];   
                $Z3 = $_GET['lab3'];
                $G = $_GET['labY'];  
                $sql = "INSERT INTO kontent (pytanie,odpZ,odpZ2,odpZ3,odpG) VALUES ('$pytanie','$Z1','$Z2','$Z3','$G')";
                $result = $con->query($sql);
                
                
            }
        }
        
        ?>
        <?php 
    echo "<div>";
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    echo "</div>";
    if(isset($_GET['back'])){
        if($_GET['back'] == true){
            header("Location: index.php");
        }
    }
    ?>
</body>
</html>