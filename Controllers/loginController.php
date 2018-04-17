<?php
include_once "../DAO/LoginDAO.php";
?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    setcookie("isLoggedIn",false);
    $loginpersoon = LoginDAO::login($_POST["loginName"],$_POST["loginPass"]);

    if ($loginpersoon == false){
        setcookie("isLoggedIn",false);
        header("location:../Pages/MainPage.php");
    }
    else{

        setcookie("isLoggedIn",true);
        setcookie("loginName",$loginpersoon->getNaam());
        setcookie("userID",$loginpersoon->getID());
         header("location:../Pages/MainPage.php");



    }
}
?>
