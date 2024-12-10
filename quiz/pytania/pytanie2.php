<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='../styles.css'>
</head>
<body>
    

<form method="GET">
    <button name="back" value="back">Powrót</button>
    </form>


<?php 
        $mysqli = new mysqli("localhost","root","","quiz");
        if(isset($_GET['back'])){
            if($_GET['back'] == true){
                header("Location: ../index.php");
            }
        }
        if(isset($_GET['Question'])){
            if($_GET['Question'] == true){
                echo $_GET['Question'];
            }
        }
        $sql = "SELECT * FROM kontent";
        $result = $mysqli->query($sql);
        for($i=0;$i<$_SESSION["numer_pytania"];$i++)
            $row = $result->fetch_row(); 

            echo "<form method='GET'>";
            echo "<div id='kontq'>";
            echo "<h3>".$row[1]."</h3>";
            echo "<h3>".$_SESSION["numer_pytania"]."</h3>"; 
            echo "<div>";
            echo "<img src='pic_trulli.jpg' alt='Italian Trulli'>";
            echo "<input type='radio' id='p1' name='odp' value='{$row[2]}'>";
            echo "<label for='{$row[2]}'>".$row[2]."</label>";
            echo "<input type='radio' id='p4' name='odp' value='{$row[5]}'>";
            echo "<label for='{$row[5]}'>".$row[5]."</label>";
            echo "<input type='radio' id='p2' name='odp' value='{$row[3]}'>";
            echo "<label for='{$row[3]}'>".$row[3]."</label>";
            echo "</div>";
            echo "<div>";
            echo "<br>";
            echo "<input type='radio' id='p3' name='odp' value='{$row[4]}'>";
            echo "<label for='{$row[4]}'>".$row[4]."</label>";
            echo "</div>";
            echo "<div>";
            echo "<button name='next' type='submit' value='sub'>"."DALEJ"."</button>";
            echo "</div>";
            echo "</div>";

        echo $_GET['odp'];
        echo "<br>";
        if(isset($_GET['next'])){
            if($_GET['next'] == true){

                    $sql = "SELECT odpG FROM kontent";
                    $result = $mysqli->query($sql);
                    for($i=0;$i<$_SESSION["numer_pytania"];$i++)
                    $row = $result->fetch_row(); 
                    echo $row[0];
                    if(isset($_GET['odp'])){
                        if($row[0] == $_GET['odp']){
                            echo "POPRAWNIE";
                            $_SESSION["poprawnie"] = $_SESSION["poprawnie"] + 1;
                        }else{
                            
                            $_SESSION["bledy"] = $_SESSION["bledy"] + 1; 
                        }
                    }else{
                     
                        $_SESSION["bledy"] = $_SESSION["bledy"] + 1; 
                    }
                    $_SESSION["numer_pytania"] += 1;
                    header("Location: pytanie3.php");
            }
        }

        
    ?>
</body>
</html>