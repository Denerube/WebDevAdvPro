<?php

$requiredNewMonster = ["newMonsterName", "newMonsterType", "newMonsterLevenspunten", "newMonsterSchildwaarde"];
$valid=true;

//array waar alle errors in zullen komen
$errorsNewMonster = [
    "newMonsterName" => "",
    "newMonsterType" => "",
    "newMonsterLevenspunten" => "",
    "newMonsterSchildwaarde" => ""


];

//array met alle default values van de input velden
$valuesNewMonster = [
    "newMonsterName" => "",
    "newMonsterType" => "",
    "newMonsterLevenspunten" => "",
    "newMonsterSchildwaarde" => ""



];
include_once "../DAO/MonsterDAO.php";
include_once "Validatie.php";

if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    //include_once "../Pages/MakeNewUserPage.php";

}
else{
    checkRequired($requiredNewMonster);
    checkMonsterNaam("newMonsterName");
    checkMonsterType("newMonsterType");
    checkMonsterLevenspunten("newMonsterLevenspunten");
    checkMonsterSchildwaarde("newMonsterSchildwaarde");


    foreach($errorsNewMonster as $monsterError) {
        if(!empty($monsterError)) {
            $valid = false;
            break;
        }
    }

    if(!$valid) {
        include "../Pages/MakeNewMonsterPage.php";
        var_dump($valid);
    } else {
        echo "succes";
        $MonsterNaam=$_POST["newMonsterName"];
        $MonsterType=$_POST["newMonsterType"];
        $MonsterLevenspunten=$_POST["newMonsterLevenspunten"];
        $MonsterSchildwaarde=$_POST["newMonsterSchildwaarde"];

        if(count($_FILES) > 0) {
            if(is_uploaded_file($_FILES['newMonsterFoto']['tmp_name'])) {

                $MonsterFoto=$_FILES["newMonsterFoto"]["tmp_name"];
                $img=file_get_contents($MonsterFoto);

                $uploadMonster=new Monster(null,$MonsterNaam,$MonsterType,$MonsterLevenspunten,$MonsterSchildwaarde,$img);

                MonsterDAO::insertNewMonster($uploadMonster);
            }
        }else{
            echo "no pic";
        }
        echo "<a href='../Pages/MainPage.php'></a>";



    }

}





?>