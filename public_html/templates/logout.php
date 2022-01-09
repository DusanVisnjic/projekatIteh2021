<?php
include_once("../database/konstante.php");
if(isset($_SESSION["userid"])){
    session_destroy();
   
}
header("location:".DOMAIN."/index.php");
?>