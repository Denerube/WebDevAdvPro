<?php
    include_once "../DAO/MonsterDAO.php";
?>
<?php
    $lijstMonsters = MonsterDAO::getAll();
    ?>
<ul id="MonsterLijstOverzicht" >
    <?php
     for ($i=0;$i<count($lijstMonsters);$i++){
         ?>
            <br>
        <li id="MonsterNaam">
            <a href="#" style="text-decoration: none;color: black">
                <?php
                echo $lijstMonsters[$i]->getNaam();
                ?>
                <br>
                <?php
                echo $lijstMonsters[$i]->getType();
                ?>
                <br>
                <?php
                echo $lijstMonsters[$i]->GetLevenspunten();
                ?>
                <br>
                <?php
                echo $lijstMonsters[$i]->getSchildwaarde();
                ?>
                <br>
                <?php
                echo "hier moet foto";
                ?>
                <br>
                </a>
            </li>


         <?php
     }
     ?>
</ul>


