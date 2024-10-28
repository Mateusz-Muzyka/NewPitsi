<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 
        $mysqli = new mysqli("localhost","root","","sklep");
        if($mysqli -> connect_error){
            echo "fail" .$mysqli -> connect_error;
        }else{
            echo "<br>";
            $sql = "SELECT * FROM dostawcy";
            echo "Baza danych dostawców";
            $result = $mysqli->query($sql);
            for($i = 0;$i<3;$i++){
                echo "<br>";
                echo "<br>";
                $row = $result->fetch_row();
                for($j = 0;$j<4;$j++){
                echo "<b> | ",$row[$j];
                }
            }
        }
        ?>


</body>
</html>