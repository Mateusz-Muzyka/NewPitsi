<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form>
        <button name="edycja" value="tak">EDYTUJ</button>
        <button name="powrot" value="back">WRÓĆ</button>
    </form>

<?php
    $mysqli = new mysqli("localhost","root","","plan_lekcji");
    $colum = array("godz.","Poniedziałek","Wtorek","Środa","Czwartek","Piątek");
    $qwe = 0;
    $sql55 = "SELECT przedmioty FROM przedmioty";
    
    if(isset($_GET['edycja']) == true || isset($_POST['zapisz']) == "save" ){
        if($_GET['edycja'] == true || $_POST['zapisz'] == "save"){
            echo "<form method='POST'>";
            echo "<table border=1>";
            echo "<tr>";
            for($i=0;$i<count($colum);$i++){     
                echo "<th>".$colum[$i]."</th>";
            }
            echo "</tr>";
            $sql = "SELECT godziny FROM przedmioty";
            $result = $mysqli->query($sql);
            $row = $result->fetch_row();
            for($i=0;$i<5;$i++){
                echo "<tr>";
                $row = $result->fetch_row();
                echo "<td>".$row[0]."</td>";
                for($h=0;$h<5;$h++){
                    $result55 = $mysqli->query($sql55);
                    echo "<td>";
                    $p = "delir{$qwe}";
                    echo "<select name='{$p}'>";
                    $qwe += 1;
                    for($j=0;$j<6;$j++){
                       $przedmiot = $result55->fetch_row();
                       echo "<option value=".$przedmiot[0].">".$przedmiot[0]."</option>";
                    }
                    echo "</select>"."</td>";
            }
                echo "</tr>";
            }
            echo "</table>";
            echo '<button name="zapisz" type="submit" value="save">'."ZAPISZ".'</button>';
            echo "</form>";
        }}else if(isset($_GET['powrot']) == true)
            if($_GET['powrot'] == true){
                echo "<table border=1>";
                echo "<tr>";
                for($i=0;$i<count($colum);$i++){     
                    echo "<th>".$colum[$i]."</th>";
                }
                echo "</tr>";
                $sql = "SELECT godziny FROM przedmioty";
                $result = $mysqli->query($sql);
                $row = $result->fetch_row();

                $sql2 = "SELECT poniedzialek,wtorek,sroda,czwartek,piatek FROM plan";
                $result2 = $mysqli->query($sql2);

                for($i=0;$i<5;$i++){
                    $row = $result->fetch_row();
                    $row2 = $result2->fetch_row();
                    echo "<tr>";
                    echo "<td>".$row[0]."</td>";
                    echo "<td>".$row2[0]."</td>";
                    echo "<td>".$row2[1]."</td>";
                    echo "<td>".$row2[2]."</td>";
                    echo "<td>".$row2[3]."</td>";
                    echo "<td>".$row2[4]."</td>";
                    echo "</tr>";
                }
                echo "</table>";
         }

?>


<?php 
        $mysqli = new mysqli("localhost","root","","plan_lekcji");
        echo "<div>";
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        echo "</div>";

        if(isset($_POST['zapisz']) == true){
            if($_POST['zapisz'] == true){
                for($i=0;$i<6;$i++){
                    $a = $i+1;
                    $b = $i+2;
                    $c = $i+3;
                    $d = $i+4;
                    $Pn = $_POST["delir{$i}"];
                    $Wt = $_POST["delir{$a}"];
                    $Sr = $_POST["delir{$b}"];
                    $Czw = $_POST["delir{$c}"];
                    $Pt = $_POST["delir{$d}"];
                     $sql3 = "UPDATE plan SET Poniedzialek = '{$Pn}',Wtorek = '{$Wt}',Sroda = '{$Sr}',Czwartek = '{$Czw}',Piatek = '{$Pt}' WHERE id={$i}";
                    
                    if ($mysqli->query($sql3) === TRUE) {
                        echo "Record updated successfully";
                        echo "<br>";
                      } else {
                        echo "Error updating record: " . $mysqli->error;
                      }
                }
            }
    
        }
        ?>
</body>
</html>