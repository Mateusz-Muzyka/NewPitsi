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
        $mysqli = new mysqli("localhost","root","","quiz");
        $headers = array("id","gracz","wynik");
        echo "<form method='GET'>";
        echo '<div id="kontener">';
        echo "TWÓJ WYNIK TO: ".$_SESSION['wynik'];
        echo "<br>";
        echo "<table border=3>";
        $sql = "SELECT * FROM wyniki ORDER BY sorter DESC";
        $reasult = $mysqli->query($sql);
        $PlayerCounter = "SELECT COUNT(*) FROM wyniki";
        $reasultPC = $mysqli->query($PlayerCounter);
        $row10 = $reasultPC->fetch_row();
        
        for($i=0;$i<$row10[0]+1;$i++){
            if($i != 0)
                $row = $reasult->fetch_row();
            echo "<tr>";
            for($j=0;$j<3;$j++){
                if($i==0){
                    echo "<td class='jolo'>".$headers[$j]."</td>";
                }else{
                    echo "<td class='jolo'>".$row[$j]."</td>";
        }}
            echo "</tr>";
        }
        echo "</table>";
        echo '<button name="reset" value="R">ZACZNIJ OD NOWA</button>';
        echo '</div>';
        echo '</form>';

        if(isset($_GET['reset'])){
            if($_GET['reset'] == true){
                header("Location: index.php");
            }
        }
    ?>
</body>
</html>