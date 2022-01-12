<?php

class Manage
{
    private $con;

    function __construct(){
        include_once("../database/db.php");
        $db=new Database();
        $this->con=$db->connect();
    }
    public function manageRecord($table){
        
        if($table=="categories"){
            $sql="SELECT p.category_name as category,p.cid as cid,c.category_name as parent,p.status FROM categories p LEFT JOIN categories c ON p.parent_cat=c.cid";
        }
        $result=$this->con->query($sql) or die($this->con->error);
        $rows=array();
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $rows[]=$row;
            }
        }
        return ["rows"=>$rows];
    }
    public function deleteRecord($table,$pk,$id){
        if($table=="categories"){
            $pre_stmt=$this->con->prepare("SELECT ".$id." FROM categories WHERE parent_cat= ?");
            $pre_stmt->bind_param("i",$id);
            $pre_stmt->execute();
            $result=$pre_stmt->get_result() or die($this->con->error);
            if($result->num_rows>0){
                return "DEPENDENT_CATEGORY";

            }else{
                $pre_stmt=$this->con->prepare("DELETE FROM ".$table." WHERE ".$pk."= ?");
                $pre_stmt->bind_param("i",$id);
                $result=$pre_stmt->execute() or die($this->con->error);
                if($result){
                    return "CATEGORY_DELETED";
                }

            }
        }else{
            $pre_stmt=$this->con->prepare("DELETE FROM ".$table." WHERE ".$pk."= ?");
            $pre_stmt->bind_param("i",$id);
            $result=$pre_stmt->execute() or die($this->con->error);
            if($result){
                return "DELETED";
            }
        }
    }
    public function getSingleRecord($table,$pk,$id){
        $pre_stmt=$this->con->prepare("SELECT * FROM ".$table." WHERE ".$pk."= ?");
        $pre_stmt->bind_param("i",$id);
        $pre_stmt->execute() or die($this->con->error);
        $result=$pre_stmt->get_result();
        if($result->num_rows == 1){
            $row=$result->fetch_assoc();
        }
        return $row;
    }
    public function update_record($table,$where,$fields){
        $sql= "";
        $condition= "";
        foreach($where as $key => $value){
            $condition .= $key . "='" . $value . "' AND ";
        
        }
        $condition = substr($condition, 0, -5);
        foreach($fields as $key => $value){
            $sql .= $key . "='".$value."', ";
        }
        $sql = substr($sql, 0, -2);
        $sql= "UPDATE ".$table." SET ".$sql." WHERE ".$condition;
        if(mysqli_query($this->con,$sql)){
            return "UPDATED";
        }
    }
}
//$obj=new Manage();
//echo "<pre>";
//echo $obj->deleteRecord("categories","cid",4); 
//print_r($obj->getSingleRecord("categories","cid",7));
//echo $obj->update_record("categories",["cid"=>4],["parent_cat"=>1,"category_name"=>"radi","status"=>1]);
?>