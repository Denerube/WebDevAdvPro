
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<header>
    <div id="nav">
        <a href="MainPage.php">Main page</a>
        <a href="MonsterOverzicht.php">Overzicht monsters</a>
        <a href="EncounterPage.php">encounter</a>
        <a href="LoginPage.php">Login</a>
    </div>
    <div id="login">
        <?php
        session_start();
        if (!isset($_SESSION["User"]) ){
            ?>
            <div id="login">
                <h6>Login</h6>
                <form name="login" action="../Controllers/loginController.php" method="POST">
                    Email: <input name="loginName" required>
                    Password: <input name="loginPass" required>
                    <input type="submit">
                   Aangemeld blijven?: <input type="checkbox"  name="keepLoggedIn" value="aangemeldBlijven">
                </form>
                <h6>Maak account aan</h6>
                <a href="MakeNewUserPage.php">Maak een nieuw account aan</a>

            </div>
            <?php
        }
        elseif (isset($_SESSION["User"]) ){

            ?>
            <a href="../Controllers/Logout.php">Log out</a>
            <?php
        }
        ?>

    </div>

</header>
<body>
test
</body>
</html>
<?php

?>
