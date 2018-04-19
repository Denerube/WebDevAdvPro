
<!DOCTYPE html>
<html lang="en" >

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
    <?php
    session_start();
    if (!isset($_SESSION["User"]) ){
        ?>
        <?php
        echo "u bent niet  ingelogd log u aub in";
        ?>
        <a href="../Pages/MainPage.php">Terug naar de hoofdpagina</a>
        <a href="../Pages/LoginPage.php">Login</a>
        <?php
    }
    else{
        ?>
        <?php
        echo "u bent al ingelogd";?>

         <a href="../Controllers/Logout.php">Log out</a>;
        </header>
        <body>
        <h1>Maak een nieuwe encounter</h1>
        <h2>Deze monsters zitte er al in jouw encounter</h2>
        <?php
        include "../Controllers/EncounterController.php";
    }
    ?>



</body>
<footer>
    <script src="../Js/jquery-3.1.1.min.js"></script>
    <script src ="../Js/script.js"></script>
</footer>
</html>

