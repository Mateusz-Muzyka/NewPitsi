<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form>
        <button name="edytowanie" value="editON">EDYTUJ</button>
        <button name="back" value="back">WRÓĆ</button>
    </form>

<?php
    $mysqli = new mysqli("localhost","root","","plan_lekcji_marek");
    $Kolumny_Tabeli = array("godzina lekcyjna","Poniedziałek","Wtorek","Środa","Czwartek","Piątek");
    $qwe = 0;
    $sql55 = "SELECT przedmiot FROM przedmioty";
    
    if(isset($_GET['edytowanie']) == true || isset($_POST['zapisz']) == "save" ){
        if($_GET['edytowanie'] == true || $_POST['zapisz'] == "save"){
            echo "<form method='POST'>";
            echo "<table border=1>";
            echo "<tr>";
            for($i=0;$i<count($Kolumny_Tabeli);$i++){     
                echo "<th>".$Kolumny_Tabeli[$i]."</th>";
            }
            echo "</tr>";
            $sql = "SELECT godzina_lekcyjna FROM plan_lekcji";
            $result = $mysqli->query($sql);
            $row = $result->fetch_row();
            for($i=0;$i<8;$i++){
                echo "<tr>";
                echo "<td>".$row[0]."</td>";
                $row = $result->fetch_row();
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
        }}else if(isset($_GET['back']) == true)
            if($_GET['back'] == true){
                echo "<table border=1>";
                echo "<tr>";
                for($i=0;$i<count($Kolumny_Tabeli);$i++){     
                    echo "<th>".$Kolumny_Tabeli[$i]."</th>";
                }
                echo "</tr>";
                $sql = "SELECT godzina_lekcyjna FROM plan_lekcji";
                $result = $mysqli->query($sql);
                $row = $result->fetch_row();
                
                $sql2 = "SELECT Pn,Wt,Sr,Czw,Pt FROM plan_lekcji";
                $result2 = $mysqli->query($sql2);

                for($i=0;$i<7;$i++){
                    $row2 = $result2->fetch_row();
                    echo "<tr>";
                    echo "<td>".$row[0]."</td>";
                    echo "<td>".$row2[0]."</td>";
                    echo "<td>".$row2[1]."</td>";
                    echo "<td>".$row2[2]."</td>";
                    echo "<td>".$row2[3]."</td>";
                    echo "<td>".$row2[4]."</td>";
                    echo "</tr>";
                    $row = $result->fetch_row();
                }
                echo "</table>";
         }

?>


<?php 
        $mysqli = new mysqli("localhost","root","","plan_lekcji_marek");
        echo "<div>";
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        echo "</div>";

        if(isset($_POST['zapisz']) == true){
            if($_POST['zapisz'] == true){
                for($i=0;$i<8;$i++){
                    if($i == 0){
                        $base = $i;
                        $THEid = $i+1;
                    }
                    $idk = $base;
                    $idk2 = $base+1;
                    $idk3 = $base+2;
                    $idk4 = $base+3;
                    $idk5 = $base+4;
                    $Pn = $_POST["delir{$idk}"];
                    $Wt = $_POST["delir{$idk2}"];
                    $Sr = $_POST["delir{$idk3}"];
                    $Czw = $_POST["delir{$idk4}"];
                    $Pt = $_POST["delir{$idk5}"];
                    
                    
                    $sql3 = "UPDATE plan_lekcji SET Pn = '{$Pn}',Wt = '{$Wt}',Sr = '{$Sr}',Czw = '{$Czw}',Pt = '{$Pt}' WHERE id={$THEid}";
                    $THEid++;
                    $base += 5; 
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