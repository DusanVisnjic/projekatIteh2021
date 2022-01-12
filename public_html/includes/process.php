
<?php
include_once("../database/konstante.php");
include_once("user.php");
include_once("DBOperation.php");
include_once("manage.php");

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
//Upravljaj kategorijama
if(isset($_POST["manageCategory"])){
    $m = new Manage();
    $result=$m->manageRecord("categories");
    $rows=$result["rows"];
    if(count($rows)>0){
        $n=0;
        foreach($rows as $row){
            ?>
            
            <tr>
                <td><?php echo ++$n; ?></td>
                <td><?php echo $row["category"]; ?></td>
                <td><?php echo $row["parent"]; ?></td>
                <td><a href="#" class="btn btn-success btn-sm">Aktivno</a></td>
                <td>
                <a href="#" did="<?php echo $row["cid"]; ?>" class="btn btn-danger btn-sm del_cat">Obrisi</a>
                <a href="#" eid="<?php echo $row["cid"]; ?>" class="btn btn-info btn-sm edit_cat" data-bs-toggle="modal" data-bs-target="#category">Promeni</a>
                <!--a href="#" did="<?php echo $row['cid']; ?>" class="btn btn-danger btn-sm del_cat">Obrisi</a>
               <a href="#" eid="<?php echo $row['cid']; ?>" class="btn btn-info btn-sm edit_cat">Promeni</a-->
                </td>
          </tr>
            <?php
        }
    }
}
//Obrisi kategoriju
    if(isset($_POST["deleteCategory"])){
        $m = new Manage();
        $result=$m->deleteRecord("categories","cid",$_POST["id"]);
        echo $result;
        
    
        exit();
    }
//uzmi jedan
if(isset($_POST["updateCategory"])){
    $m = new Manage();
    $result=$m->getSingleRecord("categories","cid",$_POST["id"]);
    echo json_encode($result);
    

    exit();
}
//promeni kategoriju
if(isset($_POST["update_category"])){
    $m = new Manage();
    $id=$_POST["cid"];
    $name=$_POST["update_category"];
    $parent=$_POST["parent_cat"];
    $result=$m->update_record("categories",["cid"=> $id],["parent_cat"=>$parent,"category_name"=>$name,"status"=>1]);
    echo $result;
    

    exit();
}
if(isset($_POST["manageBrand"])){
    $m = new Manage();
    $result=$m->manageRecord("brands");
    $rows=$result["rows"];
    if(count($rows)>0){
        $n=0;
        foreach($rows as $row){
            ?>
            
            <tr>
                <td><?php echo ++$n; ?></td>
                <td><?php echo $row["brand_name"]; ?></td>
              
                <td><a href="#" class="btn btn-success btn-sm">Aktivno</a></td>
                <td>
                <a href="#" did="<?php echo $row["bid"]; ?>" class="btn btn-danger btn-sm del_brand">Obrisi</a>
                <a href="#" eid="<?php echo $row["bid"]; ?>" class="btn btn-info btn-sm edit_brand" data-bs-toggle="modal" data-bs-target="#brand">Promeni</a>
                <!--a href="#" did="<?php echo $row['cid']; ?>" class="btn btn-danger btn-sm del_cat">Obrisi</a>
               <a href="#" eid="<?php echo $row['cid']; ?>" class="btn btn-info btn-sm edit_cat">Promeni</a-->
                </td>
          </tr>
            <?php
        }
    }
}
//Obrisi kategoriju
if(isset($_POST["deleteBrand"])){
    $m = new Manage();
    $result=$m->deleteRecord("brands","bid",$_POST["id"]);
    echo $result;
    

    exit();
}
//uzmi jedan
if(isset($_POST["updateBrand"])){
    $m = new Manage();
    $result=$m->getSingleRecord("brands","bid",$_POST["id"]);
    echo json_encode($result);
    

    exit();
}
//promeni brend
if(isset($_POST["update_brand"])){
    $m = new Manage();
    $id=$_POST["bid"];
    $name=$_POST["update_brand"];
    
    $result=$m->update_record("brands",["bid"=> $id],["brand_name"=>$name,"status"=>1]);
    echo $result;
    

    exit();
}
    exit();


?>
