<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<header>

    <div id="login">
        <h6>Maak een nieuwe gebruiker aan</h6>
        <form name="login" action="../Controllers/loginController.php" method="POST">
            Email: <input name="newloginName" required>
            Name:   <input name="newuserName" required>
            Password: <input name="newloginPass" required>
            confirm Passwoord <input name="newloginPassConfirm" required>
            <input type="submit">
        </form>
    </div>

</header>
<body>
<?php
include "../Controllers/showMonstersMainPage.php";
?>
test
<a href="MonsterOverzicht.php"> Overzicht monsters</a>
</body>
</html>
<?php

?>
