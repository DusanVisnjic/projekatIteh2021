
<?php
include_once("../database/konstante.php");
include_once("user.php");
//registracija
if(isset($_POST["username"]) AND isset($_POST["email"]) ){
    $user=new User();
    $result=$user->createUserAccount($_POST["username"],$_POST["email"],$_POST["password1"],$_POST["usertype"]);
    echo $result;
}
//login

if(isset($_POST["log_email"]) AND isset($_POST["log_password"]) ){
    $user=new User();
    $result=$user->userLogin($_POST["log_email"],$_POST["log_password"]);
    echo $result;

}



?>
