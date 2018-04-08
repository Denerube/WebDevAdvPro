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

    </header>
    <body>
    Filter op monster type <input name="filterMonsterType" type="text" id="filterOpMonsterType" placeholder="Filter op monster TYPE" onkeyup="filterOpMonsterType()"/>
    <?php
    include  "../Controllers/ShowmonstersMonsterOverzicht.php"
    ?>
    test
    </body>
    <footer>
        <script src="../Js/jquery-3.1.1.min.js"></script>
        <script src ="../Js/script.js"></script>
    </footer>
    </html>
<?php
