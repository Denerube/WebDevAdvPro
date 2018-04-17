<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<header>

<div id="login">
    <h6>Login</h6>
    <form name="login" action="../Controllers/loginController.php" method="POST">
        Email: <input name="loginName" required>
        Password: <input name="loginPass" required>
        <input type="submit">
    </form>
    <h6>Maak account aan</h6>
    <a href="MakeNewUserPage.php"
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
