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
        $sql = "SELECT * FROM kontent";
        $result = $mysqli->query($sql);
        $row = $result->fetch_row(); 

        echo "<form method='GET'>";
        echo "<div id='kontq'>";
        echo "<h3>"."PYTANIE=".$row[1]."</h3>";
        echo "<div>";
        echo "<input type='radio' id='p1' name='odp' value='{$row[2]}'>";
        echo "<label for='{$row[2]}'>".$row[2]."</label>";
        for($i=0;$i<11;$i++)
          echo "&nbsp";
        echo "<input type='radio' id='p2' name='odp' value='{$row[3]}'>";
        echo "<label for='{$row[3]}'>".$row[3]."</label>";
        echo "<br>";
        echo "<input type='radio' id='p3' name='odp' value='{$row[4]}'>";
        echo "<label for='{$row[4]}'>".$row[4]."</label>";
        echo "<input type='radio' id='p4' name='odp' value='{$row[5]}'>";
        echo "<label for='{$row[5]}'>".$row[5]."</label>";
        echo "</div>";
        echo "<button name='next' type='submit' value='sub'>"."DALEJ"."</button>";
        echo "</div>";


        if(isset($_GET['next'])){
            if($_GET['next'] == true){
                    echo $_GET['odp'];
                    $sql = "SELECT odpG FROM kontent";
                    $result = $mysqli->query($sql);
                    $row = $result->fetch_row();
                    if($row[0] == $_GET['odp']){
                        echo "POPRAWNIE";
                        $_SESSION["poprawnie"] = $_SESSION["poprawnie"] + 1;
                    }else{
                        echo "ZLE";
                        $_SESSION["bledy"] = $_SESSION["bledy"] + 1; 
                    }
            }
        }

        
    ?>
</body>
</html>