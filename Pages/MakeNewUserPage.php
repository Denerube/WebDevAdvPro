<!DOCTYPE html>
<html lang="en">
<?php
include_once "../Controllers/newUserController.php";
?>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<header>
    <div id="nav">
        <a href="MainPage.php">Main page</a>
        <a href="MonsterOverzicht.php">Overzicht monsters</a>
        <a href="EncounterPage.php">encounter</a>
    </div>



</header>
<body>
<div id="login">
    <h6>Maak een nieuwe gebruiker aan</h6>
    <form name="login" action="../Controllers/newUserController.php" method="POST">
        Email: <input name="newloginName" type="email"/>
        <div> <?php echo $errors["Email"]; ?></div>
        Name:   <input name="newUserName" type="text" />
        <div> <?php echo $errors["Naam"]; ?></div>
        Password: <input name="newloginPass" type="password" />
        <div> <?php echo $errors["Pass"]; ?></div>
        confirm Passwoord <input name="newloginPassConfirm" type="password" />
        <div> <?php echo $errors["passConfirm"]; ?></div>
        <input type="submit" value="Maak nieuwe gebruiker aan">
    </form>
</div>
</body>
<footer>
    <script src="../Js/jquery-3.1.1.min.js"></script>
    <script src ="../Js/script.js"></script>
</footer>
</html>

