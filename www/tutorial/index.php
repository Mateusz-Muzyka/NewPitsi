<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 
        $mysqli = new mysqli("localhost","root","","classicmodels");
        if($mysqli -> connect_error){
            echo "fail" .$mysqli -> connect_error;
        }else{
            $sql = "SELECT DATABASE()";
            $result = $mysqli -> query($sql);
            $row = $result->fetch_row();
            echo "Connected to ".$row[0];



            $sql2 = "SELECT DISTINCT lastName FROM employees ORDER BY lastName ";
            $result2 = $mysqli ->query($sql2);
            echo "<br>";
            for($i=0;$i<19;$i++){
                $row2 = $result2->fetch_row();
                echo "<br>";
                echo "nazwisko numer ".$i." : ".$row2[0];
                
        }
    }
        ?>


</body>
</html>