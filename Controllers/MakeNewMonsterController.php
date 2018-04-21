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


    foreach($errorsNewMonster as $error) {
        if(!empty($errorsNewMonster)) {
            $valid = false;
            break;
        }else{
        }
    }

    if(!$valid) {
        include "../Pages/MakeNewMonsterPage.php";
        var_dump($valid);
    } else {
        echo "succes";
        var_dump($valid);



        $MonsterNaam=$_POST["newMonsterName"];
        $MonsterType=$_POST["newMonsterType"];
        $MonsterLevenspunten=$_POST["newMonsterLevenspunten"];
        $MonsterSchildwaarde=$_POST["newMonsterSchildwaarde"];
        //$MonsterFoto=$_POST["newMonsterFoto"];
        //$MonsterFoto=file_get_contents($_FILES['newMonsterFoto']['tmp_name']);
        //$uploadMonster=new Monster("1",$MonsterNaam,$MonsterType,$MonsterLevenspunten,$MonsterSchildwaarde,$MonsterFoto);

    }

}





?>