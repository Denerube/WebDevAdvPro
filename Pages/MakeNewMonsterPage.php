<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<header>
    <div id="nav">
        <a href="../Pages/MainPage.php">Main page</a>
        <a href="../Pages/MonsterOverzicht.php">Overzicht monsters</a>
        <a href="../Pages/EncounterPage.php">encounter</a>
        <a href="../Pages/LoginPage.php">Login</a>
    </div>

    <div id="login">
        <?php
        include_once "../MODELS/Gebruiker.php";
        include_once "../Controllers/MakeNewMonsterController.php";
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
            $checkRechten=unserialize($_SESSION['User']);
            if ($checkRechten->getIsAdmin()==true){
                //Doe niets :D
            }else{
                header("location:../Pages/Maingpage.php");
            }

        }
        ?>
    </div>
</header>
<body>
<a href="../Pages/MonsterOverzicht.php"> Overzicht monsters</a>
<form action="../Controllers/MakeNewMonsterController.php" method="post">
    Naam van het monster:<input type="text" name="newMonsterName" value="<?php echo $valuesNewMonster["newMonsterName"];?>">
    <div><?php echo $errorsNewMonster["newMonsterName"];?></div>
    Type van het monster:<input type="text"name="newMonsterType" value="<?php echo $valuesNewMonster["newMonsterType"];?>">
    <div><?php echo $errorsNewMonster["newMonsterType"];?></div>
    Levenspunten van het monster <input type="text"name="newMonsterLevenspunten" value="<?php echo $valuesNewMonster["newMonsterLevenspunten"];?>">
    <div><?php echo $errorsNewMonster["newMonsterLevenspunten"];?></div>
    Schildwaarde van het monster <input type="text"name="newMonsterSchildwaarde" value="<?php echo $valuesNewMonster["newMonsterSchildwaarde"];?>">
    <div><?php echo $errorsNewMonster["newMonsterSchildwaarde"];?></div>
    //Foto van het monster <input type="file"name="newMonsterFoto" >
    <div><?php //echo $errorsNewMonster["newMonsterFoto"];?></div>
    <input type="submit">
</form>
</body>
</html>
<?php
?>
