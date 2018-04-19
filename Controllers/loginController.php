<?php
include_once "../DAO/LoginDAO.php";
?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $loginEmail=$_POST["loginName"];
    $loginPass=$_POST["loginPass"];

    $loginpersoon = LoginDAO::login($loginEmail,$loginPass);

    if ($loginpersoon != false){
        if (isset($_POST["keepLoggedIn"])){
            ini_set("session.cookie_lifetime","31622400");
        }else{
            ini_set("session.cookie_lifetime",0);
        }
        session_start();
        $_SESSION['User']=$loginpersoon;
        $_SESSION['Encounter']=array();

        header("location:../Pages/MainPage.php");
    }
    else{



        header("location:../Pages/LoginPage.php");





    }
}
?>
