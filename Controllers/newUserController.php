<?php
include_once "../DAO/LoginDAO.php";
//array met alle velden die required zijn
$required = ["Email", "Naam", "Pass", "passConfirm", ];

$valid = true;

//array waar alle errors in zullen komen
$errors = [
    "Email" => "",
    "Naam" => "",
    "Pass" => "",
    "passConfirm" => "",

];

//array met alle default values van de input velden
$values = [
    "Email" => "",
    "Naam" => "",
    "Pass" => "",
    "passConfirm" => "",
];

include_once 'validatie.php';

if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    include_once "../Pages/MakeNewUserPage.php";
}
else{
    checkRequired($required);
    checkEmail("newloginName");
    checkNaam("newUserName");
    checkPass("newloginPass");
    checkPassConfirm("newloginPassConfirm");
    foreach($errors as $error) {
        if(!empty($error)) {
            $valid = false;
            break;
        }
    }

    // als formulier niet valid is wordt formulier terug getoond met foutboodschappen
    if(!$valid) {
        include '../Pages/MakeNewUserPage.php';
    } else {
        // anders wordt het resultaat getoond
        echo "succes";
        include "../Pages/MainPage.php";
    }

}
?>
