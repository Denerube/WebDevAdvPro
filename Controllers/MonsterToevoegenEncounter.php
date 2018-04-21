<?php
session_start();

if (!isset($_POST["passMonsterID"])){
    echo "niet set";
}
if (isset($_SESSION['User'])){
    var_dump($_POST["passMonsterID"]);
    //$id=$_POST["passMonsterID"];
    //array_push($_SESSION['Encounter'],$id);
}else{
    header('location:../Pages/LoginPage.php');
}

?>