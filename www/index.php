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
        if ($mysqli -> connect_error){
            echo "Failed: " .$mysqli -> connect_error; 
            exit();
        } else {
            echo "Congratulation ";
            $sql = "SELECT DATABASE()";
            $result = $mysqli -> query($sql);
            $row = $result->fetch_row();
            echo "<br>";
            echo "database = ",$row[0];
            echo "<br>";
            $mysqli->select_db("lepszy_sklep");
            if($mysqli->select_db("lepszy_sklep")){
                echo "zmieniamy sklep";
                $sql = "SELECT DATABASE()";
                $result = $mysqli -> query($sql);
                $row = $result->fetch_row();
                echo "<br>";
                echo "database = ",$row[0];
                echo "<br>";
                exit();
            }           
        }
    ?>
</body>
</html>