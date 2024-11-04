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
        $sql2 = "ALTER TABLE dostawcy DROP COLUMN informacje";
        $result2 = $mysqli->query($sql2);
        if($mysqli -> connect_error){
            echo "fail" .$mysqli -> connect_error;
        }else{
            echo "congratulations";
            echo "<br>";
            $sql = "SELECT nazwa FROM towary";
            $result = $mysqli->query($sql);
            for($i = 0;$i<9;$i++){
                $row = $result->fetch_row();
                echo "<br>";
                echo "<br>";
                echo "<b>",$row[0];
            }

            for($i = 0;$i<9;$i++){
                echo "<br>";
            }

            $sql2 = "ALTER TABLE dostawcy ADD COLUMN informacje TEXT";
            $result2 = $mysqli->query($sql2);

            $sql3 = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'dostawcy'; ";
         
                $result3 = $mysqli->query($sql3); 
                for($i=0;$i<4;$i++){
                $row3 = $result3->fetch_row();
                echo $row3[0];
                echo "<br>";
                }
            echo "<br>";
            echo "<br>";
            echo "<br>";
            $sql3 = "SELECT * FROM dostawcy as a INNER JOIN towary as b ON a.id=b.id";
            $result3 = $mysqli->query($sql3);

        for($j=0;$j<3;$j++){
            $row3 = $result3->fetch_row();
                for($i=0;$i<2;$i++){
                    echo $row3[$i];
                }
            echo "<br>";
        }
    }
    ?>
</body>
</html>