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
                <div id="MonsterNaam" > Naam:
                <?php
                echo $lijstMonsters[$i]->getNaam();
                ?>
                </div>
                 <div id="MonsterType"> Type:
                 <a href="#" style="text-decoration: none;color: black">
                <?php
                echo $lijstMonsters[$i]->getType();
                ?>
                </a>
                 </div>
            <div id="MonsterLevenspunten">HP:
                <?php
                echo $lijstMonsters[$i]->GetLevenspunten();
                ?>
            </div>
            <div id="MonsterSchildwaarde">AC:
                <?php
                echo $lijstMonsters[$i]->getSchildwaarde();
                ?>
            </div>
            <div id="MonsterFoto">
                <?php
                echo '<img src="data:image/jpeg;base64,'.base64_encode( $lijstMonsters[$i]->getFoto() ).'"/>';
                ?>
            </div>
            <button id="gaNaarDetails" class="gaNaarDetails">Details monster</button>
            <div id="buttons">
                <form id="AddmonstereToEncounter" class="AddmonstereToEncounter">
                    <input type="hidden" name="passMonsterID" value="<?php echo $lijstMonsters[$i]->getID();?>"/>
                    <button type="submit" >Voeg toe aan encounter</button>
                </form>

            </div>


        </li>

        <?php
    }
    ?>
</ul>