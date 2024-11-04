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
        $qqq = 1;
        if ($mysqli -> connect_error){
            echo "Failed: " .$mysqli -> connect_error; 
            exit();
        } else {
            echo "Congratulation ";
            $sql = "SELECT DATABASE()";
            $sql2 = "SELECT * FROM towary";
            $result = $mysqli -> query($sql2);
            $row = $result->fetch_row();
            echo "<br>";
        //     for($i = 0;$i<10;$i++){
        //     echo "<b>", $i+1 ," ", "info o towarach </b>= ",$row[$qqq]," ",$row[$qqq+1]," ",$row[$qqq+2];
        //     $row = $result->fetch_row();
        //     echo "<br>";
        // }
        $fieldcount = mysqli_num_rows($result);

            for($i = 0;$i<9;$i++){
                $row = $result->fetch_row();
                echo "<br>";
                echo "<b>",$row[$qqq] ," ", " </b>= ",$row[$qqq+1], "Zł";
            }
            echo "<br>";
            echo "<br>";
            echo "<br>";
            $sql2 = "SELECT * FROM dostawcy";
            $result = $mysqli -> query($sql2);
            $row = $result->fetch_row();
            for($i = 0;$i<3;$i++){
                echo "<b>",$i+1 ," ", "info o dostawcach </b> = ",$row[$qqq]," ",$row[$qqq+1];
                $row = $result->fetch_row();
                echo "<br>";
            }
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<b>info</b> = ",$fieldcount;
    }
    ?>
</body>
</html>