<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 3/04/2018
 * Time: 16:21
 */
?>
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
               <?php include "../Controllers/loginController.php" ?>
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
    Filter op monster type <input name="filterMonsterType" type="text" id="filterOpMonsterType" placeholder="Filter op monster TYPE" onkeyup="filterOpMonsterType()"/>
    <?php
    include  "../Controllers/ShowmonstersMonsterOverzicht.php"
    ?>
    <div id="listSelectetMonsters" class="listSelectetMonsters">
    </div>
    </body>
    <footer>
        <script src="../Js/jquery-3.1.1.min.js"></script>
        <script src ="../Js/script.js"></script>
    </footer>
    </html>
<?php
