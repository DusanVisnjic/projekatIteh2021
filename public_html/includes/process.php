
<?php
include_once("../database/konstante.php");
include_once("user.php");
include_once("DBOperation.php");

//registracija

if(isset($_POST["username"]) AND isset($_POST["email"]) ){
    $user=new User();
    $result=$user->createUserAccount($_POST["username"],$_POST["email"],$_POST["password1"],$_POST["usertype"]);
    echo $result;
    exit();
    
}
//login

if(isset($_POST["log_email"]) AND isset($_POST["log_password"]) ){
   
    
    $user=new User();
    
    $result=$user->userLogin($_POST["log_email"],$_POST["log_password"]);
    echo $result;
    exit();
}

//uzmi kategorije
if(isset($_POST["getCategory"])){
    $obj = new DBOperation();
    $rows=$obj->getAllRecord("categories");
    foreach($rows as $row){
        echo "<option value='".$row["cid"]."'>".$row["category_name"]."</option>";
    }

    exit();
}
//uzmi brend
if(isset($_POST["getBrand"])){
    $obj = new DBOperation();
    $rows=$obj->getAllRecord("brands");
    foreach($rows as $row){
        echo "<option value='".$row["bid"]."'>".$row["brand_name"]."</option>";
    }

    exit();
}
// dodaj kategorije
if(isset($_POST["category_name"]) AND isset($_POST["parent_cat"])){
    $obj = new DBOperation();
    $result=$obj->addCategory($_POST["parent_cat"],$_POST["category_name"]);
    echo $result;
    

    exit();
}
// dodaj brend
if(isset($_POST["brand_name"])){
    $obj = new DBOperation();
    $result=$obj->addBrand($_POST["brand_name"]);
    echo $result;
    

    exit();
}
// dodaj proizvod
if(isset($_POST["added_date"]) AND isset($_POST["product_name"])){
    $obj = new DBOperation();
    $result=$obj->addProduct($_POST["select_cat"],$_POST["select_brand"],$_POST["product_name"],$_POST["product_price"],$_POST["product_qty"],$_POST["added_date"]);
    echo $result;
    

    exit();
}



?>
