<!-- ogólne podsumowanie wyborów usera i przedstawienie należności za ubezpieczenie -->

<?php
session_start();

$temp = explode("-",$_SESSION['kod']); // dzielimy kod pocztowy na array
$warunek = $temp[0];
if($warunek == "40"){
    $znizka = 10; //Katokarta bonus
    //wyliczenie zniżki dla poszczególnych stawek
    $stawkaPremium = 1000000 * ((100-$znizka) / 100); 
    $stawkaStandard = 100000 * ((100-$znizka) / 100);
}else{
    $stawkaPremium = 1000000;
    $stawkaStandard = 100000;
}
if($_SESSION['Rodzaj'] == "Premium"){
// Wyliczanie stawek dla wersji Premium
    // {

        

        $calosc = (int)$_SESSION['wiek'];
        $calosc = $calosc * $stawkaPremium;
        $calosc = $calosc / 20;
        
        $roczna = $calosc/100;
        // }
}else{
    // Wyliczanie stawek dla standardowej wersji
    // {
$calosc = (int)$_SESSION['wiek'];
$calosc = $calosc * $stawkaStandard;
$calosc = $calosc / 20;

$roczna = $calosc/100;
// }
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

        <div id="cont3">
        <p>Ubezpieczenie dla:</p>
        <hr>


    <?php
        echo "<p>";
        echo $_SESSION['imie']." ".$_SESSION['nazwisko']; // Wypisywanie imienia i nazwiska
        echo "</p>";
        echo "<p>";
        echo $_SESSION['wiek']." lat"; // Wypisywanie wieku ubezpieczającego sie
        echo "</p>";
        echo "<p>";
        echo $_SESSION['Ulica']." ".$_SESSION['nrDomu'].", ".$_SESSION['kod']; // Adress ubezpieczającego się
        echo "</p>";
        echo "<p>";
        echo "UBEZPIECZENIE ".$_SESSION['Rodzaj']; // Rodzaj ubezpieczenia
        echo "</p>"; // Kwoty ubezpieczeń {
        echo "<hr>";
        echo '<table>';
        echo '<tr>';
        echo '<td>';
        echo "Wartość ubezpieczenia:";
        echo '</td>';
        echo '<td>';
        echo $calosc." zł";
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>';
        echo "Stawka ubezpieczenia (roczna):";
        echo '</td>';
        echo '<td>';
        echo $roczna." zł";
        echo '</td>';
        echo '</tr>';
        
        echo "</table>"; // }
    ?>

</div>
</body>
</html>