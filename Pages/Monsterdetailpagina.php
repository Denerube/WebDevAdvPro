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
    <div id="login">
        <?php
        if ((!isset($_COOKIE["loginCheck"]) || $_COOKIE["isLoggedIn"]==false)){
            ?>
            <div id="login">
                <h6>Login</h6>
                <form name="login" action="../Controllers/loginController.php" method="POST">
                    Email: <input name="loginName" required>
                    Password: <input name="loginPass" required>
                    <input type="submit">
                </form>
                <h6>Maak account aan</h6>
                <a href="MakeNewUserPage.php">Maak een nieuw account aan</a>
            </div>
            <?php
        }
        else{
            ?>
            <p> <?php echo "hallo: ".$_COOKIE["loginName"]; ?> </p>
            <?php
        }
        ?>
    </div>
</header>
<body>
<?php
include "../Controllers/ShowMonsterDetail.php";
?>

</body>
<footer>
    <script src="../Js/jquery-3.1.1.min.js"></script>
    <script src ="../Js/script.js"></script>
</footer>
</html>
