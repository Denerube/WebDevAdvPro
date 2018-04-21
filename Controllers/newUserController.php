<?php
include_once "../DAO/LoginDAO.php";
//array met alle velden die required zijn
$required = ["Email", "Naam", "Pass", "passConfirm", ];

$valid = true;

//array waar alle errors in zullen komen
$errors = [
    "newloginMail" => "",
    "newUserName" => "",
    "newloginPass" => "",
    "newloginPassConfirm" => "",
    "nietOvereen"=>""

];

//array met alle default values van de input velden
$values = [
    "newloginMail" => "",
    "newUserName" => "",
    "newloginPass" => "",
    "newloginPassConfirm" => ""

];

include_once 'validatie.php';

if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    //include_once "../Pages/MakeNewUserPage.php";

}
else{
    checkRequired($required);
    checkEmail("newloginMail");
    checkNaam("newUserName");
    checkPass("newloginPass");
    checkPassConfirm("newloginPassConfirm");
    //checkPassOvereenKomst();

    foreach($errors as $error) {
        if(!empty($error)) {
            $valid = false;
            break;
        }
    }

    if(!$valid) {

        include '../Pages/MakeNewUserPage.php';
    } else {
        echo "succes";
        //header("location:../Pages/Maingpage.php");

    }

}
?>
