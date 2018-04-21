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
        <a href="../Pages/MainPage.php">Main page</a>
        <a href="../Pages/MonsterOverzicht.php">Overzicht monsters</a>
        <a href="../Pages/EncounterPage.php">encounter</a>
    </div>



</header>
<body>
<div id="makeNewUser">
    <form action="../Controllers/newUserController.php" method="post">
        Email:<input type="email" name="newloginMail" value="<?php $values["newloginMail"];?>">
        <div> <?php $errors["newloginMail"];?></div>
        Name:<input type="text" name="newUserName"value="<?php $values["newUserName"];?>">
        <div> <?php $errors["newUserName"];?></div>
        Pass:<input type="password" name="newloginPass">
        <div> <?php $errors["newloginPass"];?></div>
        Confirm pass:<input type="password" name="newloginPassConfirm">
        <div> <?php $errors["newloginPassConfirm"];?></div>
        <div> <?php $errors["nietOvereen"];?></div>
        <input type="submit">
    </form>

</div>
</body>
<footer>
    <script src="../Js/jquery-3.1.1.min.js"></script>
    <script src ="../Js/script.js"></script>
</footer>
</html>

