<?php
include_once "../DAO/LoginDAO.php";
?>
<?php
        if ((!isset($_COOKIE["loginCheck"]) || $_COOKIE["isLoggedIn"]==false)){
            ?>
            <div id="login">
                <h6>Login</h6>
                <form name="login" action="../Controllers/loginController.php" method="POST">
                    Email: <input name="loginName" required>
                    Password: <input name="loginPass" required>
                    <input type="submit">
                </form>
                <h6>Maak account aan</h6>
                <a href="MakeNewUserPage.php">Maak een nieuw account aan</a>
            </div>
            <?php
        }
        elseif($_COOKIE["isLoggedIn"]==true){
            ?>
            <p> <?php echo "hallo: ".$_COOKIE["loginName"]."you are already logged in"; ?> </p>
            <?php
        }
        ?>


<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $loginEmail=$_POST["loginName"];
    $loginPass=$_POST["loginPass"];

    $loginpersoon = LoginDAO::login($loginEmail,$loginPass);

    if ($loginpersoon == false){
        setcookie("isLoggedIn",false);
        echo "fail";
        //header("location:../Pages/MainPage.php");
    }
    else{

        setcookie("isLoggedIn",true);
        setcookie("loginName",$loginpersoon->getNaam());
        setcookie("userID",$loginpersoon->getID());
        echo "gelukt";
        header("location:../Pages/MainPage.php");



    }
}
?>
