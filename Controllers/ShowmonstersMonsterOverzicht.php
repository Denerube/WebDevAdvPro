<?php
    include_once "../DAO/MonsterDAO.php";
?>
<?php
    $lijstMonsters = MonsterDAO::getAll();
    ?>
    <?php
     for ($i=0;$i<count($lijstMonsters);$i++){
         ?>
<ul id="MonsterLijstOverzicht">
        <li id="MonsterNaam">
                <?php
                echo $lijstMonsters[$i]->getNaam();
                ?>
            </li>
             <li id="MonsterType">
             <?php
             echo $lijstMonsters[$i]->getType();
             ?>
             </li>
             <li id="MonsterLevenspunten">
             <?php
             echo $lijstMonsters[$i]->GetLevenspunten();
             ?>
         </li>
         <li id="MonsterSchildwaarde">
             <?php
             echo $lijstMonsters[$i]->getSchildwaarde();
             ?>
         </li>
         <li id="MonsterFoto">
             <?php
             echo "hier moet foto";
             ?>
         </li>
</ul>

         <?php
     }
     ?>

