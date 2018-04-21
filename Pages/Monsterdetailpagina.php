<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="../css/stylesheet.css" rel="stylesheet" type="text/css">
</head>
<header>
    <div id="nav">
        <a href="MainPage.php">Main page</a>
        <a href="MonsterOverzicht.php">Overzicht monsters</a>
        <a href="EncounterPage.php">encounter</a>
    </div>

</header>
<body>
<?php
include_once "../MODELS/Gebruiker.php";
session_start();
if (isset($_SESSION['User'])) {
    $checkRechten=unserialize($_SESSION['User']);

    if ($checkRechten->getIsAdmin() == true) {
        ?>
        <a href="MakeNewMonsterPage.php">Maak een nieuw monster</a>
    <?php
        } else {
           //doe helemaal niets
    }
}
include "../Controllers/ShowMonsterDetail.php";
?>

</body>
<footer>
    <script src="../Js/jquery-3.1.1.min.js"></script>
    <script src ="../Js/script.js"></script>
</footer>
</html>
