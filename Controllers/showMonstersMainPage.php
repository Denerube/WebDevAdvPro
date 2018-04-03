<?php
include_once "DAO/MonsterDAO.php";

for ($i=1;$i<=4;$i++) {
    $random = rand(1, 4);
    ?>
    <p>
        <?php
       echo MonsterDAO::getMonsterById($random)->getNaam();
        ?>
    </p>
    <?php
}
    ?>
