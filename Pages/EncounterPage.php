
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
    if ((!isset($_COOKIE["loginCheck"]) && !isset($_COOKIE["isLoggedIn"]))  ){
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
    elseif($_COOKIE["isLoggedIn"] == true){

        ?>
        <p> <?php echo $_COOKIE["loginName"];; ?></p>
        <?php
    }
    ?>




</header>
<body>
<?php include_once "../Controllers/loginController.php"?>
<h1>Maak een nieuwe encounter</h1>
<h2>Deze monsters zitte er al in jouw encounter</h2>

<div id="encounterAfdruk" class="encounterAfdruk" onload="printList()" >
</div>

<button onclick="printList()"></button>
</body>
<footer>
    <script src="../Js/jquery-3.1.1.min.js"></script>
    <script src ="../Js/script.js"></script>
</footer>
</html>

