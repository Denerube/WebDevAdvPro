<?php
include_once "../DAO/LoginDAO.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $loginpersoon= LoginDAO::login($_POST["loginName"],$_POST["loginPass"]);
    if ($loginpersoon == false){
        setcookie("isLoggedIn",false);
        echo "<p>Fout probeer aub opnieuw</p>";
    }
    else{
        setcookie("isLoggedIn",true);
        setcookie("loginCheck",$loginpersoon);
    }
}
?>
