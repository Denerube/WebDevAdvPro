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
        <li style="list-style: none">
            <div id="MonsterID" style="visibility:hidden " >
                <?php
                echo $lijstMonsters[$i]->getID();
                ?>
            </div>
                <div id="MonsterNaam" >
                <?php
                echo $lijstMonsters[$i]->getNaam();
                ?>
                </div>
                 <div id="MonsterType">
                 <a href="#" style="text-decoration: none;color: black">
                <?php
                echo $lijstMonsters[$i]->getType();
                ?>
                </a>
                 </div>
            <div id="MonsterLevenspunten">
                <?php
                echo $lijstMonsters[$i]->GetLevenspunten();
                ?>
            </div>
            <div id="MonsterSchildwaarde">
                <?php
                echo $lijstMonsters[$i]->getSchildwaarde();
                ?>
            </div>
            <div id="MonsterFoto">
                <?php
                echo '<img src="data:image/jpeg;base64,'.base64_encode( $lijstMonsters[$i]->getFoto() ).'"/>';
                ?>
            </div>
            <button id="EncounterMonsterToevoegen" class="EncounterMonsterToevoegen"> toevoegen</button>
            <form action="">
                <input type="submit" value="
                <?php
                echo $lijstMonsters[$i]->getID();
                ?>"

                >
            </form>
        </li>

        <?php
    }
    ?>
</ul>