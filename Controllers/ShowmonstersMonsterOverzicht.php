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

                <?php
                echo $lijstMonsters[$i]->getNaam();
                ?>
                <br>
            <a href="#" style="text-decoration: none;color: black">
                <?php
                echo $lijstMonsters[$i]->getType();
                ?>
            </a>
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

            <?php
            echo '<img src="data:image/jpeg;base64,'.base64_encode( $lijstMonsters[$i]->getFoto() ).'"/>';
            ?>
            <br>
            <button id="EncounterMonsterToevoegen" class="EncounterMonsterToevoegen"> toevoegen</button>

        </li>


        <?php
    }
    ?>
</ul>