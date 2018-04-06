<?php
    include_once "../DAO/MonsterDAO.php";
    //https://stackoverflow.com/questions/20556773/php-display-image-blob-from-mysql
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
                    echo '<img src="data:image/jpeg;base64,'.base64_encode( $lijstMonsters[$i]->getFoto() ).'"/>';
                ?>
                    <br>
                </a>
            </li>
         <?php
     }
     ?>
</ul>

>
