<!-- Podanie danych kontaktowych usera -->

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
            <label for="Ulica">Ulica</label>
            <input name="Ulica">
            <label for="nrDomu">Numer domu</label>
            <input name="nrDomu">
            <label for="kod">Kod pocztowy</label>
            <input name="kod">
            <input id="dalej" type="submit" name="sub">
        </div>
    </form>

    <?php
        $checker = 0; // dodatkowe sprawdzenie czy wartość została przypisana sesji
        if(isset($_POST['Ulica'])){
            if($_POST['Ulica'] != null){
                $_SESSION['Ulica'] = $_POST['Ulica'];
                $checker += 1;
            }
        }
        if(isset($_POST['nrDomu'])){
            if($_POST['nrDomu'] != null){
                $_SESSION['nrDomu'] = $_POST['nrDomu'];
                $checker += 1;
            }
        }
        if(isset($_POST['kod'])){
            if($_POST['kod'] != null){
                $_SESSION['kod'] = $_POST['kod'];
                $checker += 1;
            }
        }
        if(isset($_POST['sub'])){
            if($_POST['sub'] == True && $checker == 3){
                header('location: index3.php');
            }
        }

    ?>
</body>
</html>