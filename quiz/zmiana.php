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

<?php 

if(isset($_GET['back'])){
    if($_GET['back'] == true){
        header("Location: index.php");
    }
}

$con = new mysqli("localhost","root","","quiz"); 
echo "<form method='GET'>";
echo "<table border=1>";
echo "<tr>";
$Kolumny = ["id","pytanie","Zle1","Zle2","Zle3","Dobrze","DEL"]; 
for($i=0;$i<count($Kolumny);$i++){     
    echo "<th>".$Kolumny[$i]."</th>";
}
echo "</tr>";
$sql2 = "SELECT * FROM kontent";
$result2 = $con->query($sql2);


while($row2 = $result2->fetch_row()){
    echo "<tr>";
    echo "<td>".$row2[0]."</td>";
    echo "<td>".$row2[1]."</td>";
    echo "<td>".$row2[2]."</td>";
    echo "<td>".$row2[3]."</td>";
    echo "<td>".$row2[4]."</td>";
    echo "<td>".$row2[5]."</td>";
    echo "<td>"."<button name='delete' value='".$row2[0]."'>Usun</button>"."</td>";
    echo "</tr>";
}
echo "</table>";
echo "<input type='checkbox' name='zgoda' value='Zgoda'>";
echo "<label for='zgoda'>Zaznacz jeśli jesteś pewny kasowania danych</label>";
echo "</form>";
   



?>

<?php 

    if (isset($_GET['zgoda']) && isset($_GET['delete'])) {
        $idToDelete = $_GET['delete'];  
        if ($_GET['zgoda'] == 'Zgoda') {
            $sql22 = "DELETE FROM kontent WHERE id = ?";
            $stmt = $con->prepare($sql22);
            $stmt->bind_param('i', $idToDelete); 
            if ($stmt->execute()) {
                echo "Rekord o ID $idToDelete został usunięty.<br>";
            } else {
                echo "Błąd przy usuwaniu: " . $con->error . "<br>";
            }
        }
    }
?>
</body>
</html>
