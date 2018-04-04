<?php
include_once "../DAO/MonsterDAO.php";
?>

<?php
for ($i=1;$i<=4;$i++) {
    $random = rand(1, 4);
    $vorignummer
    ?>
    <p>
        <?php
            echo MonsterDAO::getMonsterById($random)->getNaam();
        ?>
    </p>
<?php
}
?>
<p>
<?php
echo "de 5 laatste Monsters";
?>
</p>
<?php
    for ($y=MonsterDAO::getLatestMonsterID();$y>=MonsterDAO::getLatestMonsterID()-3;$y--) {

    ?>
    <p>
        <?php
       echo MonsterDAO::getMonsterById($y)->getNaam();
        ?>
    </p>
    <?php
}
?>



