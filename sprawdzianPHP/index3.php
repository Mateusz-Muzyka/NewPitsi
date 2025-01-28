<!-- Wybór rodzaju ubezpieczenia -->

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
        <div id="cont2">
            <label for="Rodzaj">Rodzaj Ubezpieczenia</label>
            <select name="Rodzaj">
            <option value="Standard">Standard</option>
            <option value="Premium">Premium</option>
            </select>
            <input id="dalej" type="submit" name="sub">
        </div>
    </form>

    <?php
        $checker = 0; // dodatkowe sprawdzenie czy wartość została przypisana sesji
        if(isset($_POST['Rodzaj'])){
            if($_POST['Rodzaj'] != null){
                $_SESSION['Rodzaj'] = $_POST['Rodzaj'];
                $checker += 1;
            }
        }
        if(isset($_POST['sub'])){
            if($_POST['sub'] == True && $checker == 1){
                header('location: index4.php');
            }
        }

    ?>
</body>
</html>