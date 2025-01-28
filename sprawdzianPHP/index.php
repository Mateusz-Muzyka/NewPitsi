<!-- Podanie danych personalncyh usera -->

<?php
session_start();
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
    <form method="POST">
        <div id="cont">
            <label for="imie">Imię</label>
            <input name="imie">
            <label for="nazwisko">Nazwisko</label>
            <input name="nazwisko">
            <label for="wiek">Wiek</label>
            <input name="wiek">
            <input id="dalej" type="submit" name="sub">
        </div>
    </form>

    <?php
        $checker = 0; // dodatkowe sprawdzenie czy wartość została przypisana sesji
        if(isset($_POST['imie'])){
            if($_POST['imie'] != null){
                $_SESSION['imie'] = $_POST['imie'];
                $checker += 1;
            }
        }
        if(isset($_POST['nazwisko'])){
            if($_POST['nazwisko'] != null){
                $_SESSION['nazwisko'] = $_POST['nazwisko'];
                $checker += 1;
            }
        }
        if(isset($_POST['wiek'])){
            if($_POST['wiek'] != null){
                $_SESSION['wiek'] = $_POST['wiek'];
                $checker += 1;
            }
        }
        if(isset($_POST['sub'])){
            if($_POST['sub'] == True && $checker == 3){
                header('location: index2.php');
            }
        }

    ?>
</body>
</html>