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
<form method="POST">
    
</form>




    <?php 
       $con = new mysqli("localhost","root","","quiz"); 

        if(isset($_GET['back'])){
            if($_GET['back'] == true){
                header("Location: index.php");
            }
        }
    echo "<form method='GET'>";
    echo "<table border=1>";
    echo "<tr>";
    $Kolumny = ["id","pytanie","Zle1","Zle2","Zle3","Dobrze"]; 
    for($i=0;$i<count($Kolumny);$i++){     
        echo "<th>".$Kolumny[$i]."</th>";
    }
    echo "</tr>";
    $sql2 = "SELECT * FROM pytania";
    $result2 = $con->query($sql2);


    
    while($result2->fetch_row() != null){
        $row2 = $result2->fetch_row();
        echo "<tr>";
        echo "<td>".$row2[0]."</td>";
        echo "<td>".$row2[1]."</td>";
        echo "<td>".$row2[2]."</td>";
        echo "<td>".$row2[3]."</td>";
        echo "<td>".$row2[4]."</td>";
        echo "<td>".$row2[5]."</td>";
        echo "<td>"."<button name='D".$i."' value='".$i."'>Usun</button>"."</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<input type='checkbox' name='zgoda' value='Zgoda'>";
    echo "<label for='zgoda'>Zaznacz jeśli jesteś pewny kasowania danych</label>";
    echo "</form>";

    ?>
    <?php 

            $con = new mysqli("localhost","root","","quiz");

                echo "<div>";
                echo "<pre>";
                print_r($_GET);
                echo "</pre>";
                echo "</div>";

        if(isset($_GET['zgoda'])){
            if($_GET['zgoda'] == true){

                foreach ($_GET as $kliniety => $value) {
                        $wartosc = intval(substr($kliniety, 1));                 
                        echo "Kliknięto przycisk D$wartosc<br>";
                        $sql2 = "SELECT id FROM pytania";
                        $result2 = $con->query($sql2);
                        $wartosc++;
                        for($i=0;$i<$wartosc;$i++){
                            $row2 = $result2->fetch_row();
                        }
                        $sql = "DELETE FROM pytania WHERE id = $row2[0]";
                        if ($con->query($sql)) {
                            echo "Rekord o ID $row2[0] został usunięty.<br>";
                        } else {
                            echo "Błąd przy usuwaniu: " . $con->error . "<br>";
                        }
                    }}}
                
    ?>
</body>
</html>