<?php 
include_once("../database/constants.php");
include_once("DBOperation.php");
include_once("user.php");

if(isset($_POST["fname"]) && isset($_POST["email"])){
    $user = new User();
    $result = $user->createUserAccount($_POST["fname"],$_POST["email"],$_POST["pass"],$_POST["utype"]);
    echo $result;
    exit();
}

if(isset($_POST["log_email"]) && isset($_POST["log_pass"])){
    $user = new User();
    $result = $user->userLogin($_POST["log_email"],$_POST["log_pass"]);
    echo $result;
    exit();
}

if(isset($_POST["getCategory"])){
    
    $obj = new DBOperation();
    $rows = $obj->getAllRecords("category");
    foreach($rows as $row){
    echo "<option value='".$row["cid"]."'>".$row["category_name"]."</option>";       
    }
    exit();
}
if(isset($_POST["getBrand"])){
    
    $obj = new DBOperation();
    $rows = $obj->getAllRecords("brand");
    foreach($rows as $row){
    echo "<option value='".$row["bid"]."'>".$row["brand_name"]."</option>";       
    }
    exit();
}
if(isset($_POST["category_name"]) AND isset($_POST["parent_cat"])){
    $obj = new DBOperation();
    $result = $obj->addCategory($_POST["parent_cat"],$_POST["category_name"]);
    echo $result;
    exit();
}
if(isset($_POST["brand_name"])){
    $obj = new DBOperation();
    $result = $obj->addBrand($_POST["brand_name"]);
    echo $result;
    exit();
    
}
if(isset($_POST["bcode"]) && isset($_POST["pdes"])){
    $obj = new DBOperation();
    $result = $obj->addProduct($_POST["select_category"],$_POST["bcode"],$_POST["pdes"],$_POST["pprice"],$_POST["sprice"],$_POST["select_brand"]);
    echo $result;
    exit();
    
}
if(isset($_POST["branch_name"]) && isset($_POST["branch_address"])){
    $obj = new DBOperation();
    $result = $obj->addBranch($_POST["branch_name"],$_POST["branch_address"]);
    echo $result;
    exit();
    
}
if(isset($_POST["getBranch"])){
    
    $obj = new DBOperation();
    $rows = $obj->getAllRecords("branch");
    foreach($rows as $row){
    echo "<option value='".$row["brach_id"]."'>".$row["branch_name"]."</option>";       
    }
    exit();
}
if(isset($_POST["item"]) && isset($_POST["branch_info"])){
    $obj = new DBOperation();
    $result = $obj->addBranchStock($_POST["item"],$_POST["select_brand_stock"],$_POST["select_category_stock"],$_POST["branch_info"],$_POST["stock"],$_POST["unit"]);
    echo $result;
    exit();
    
}
if(isset($_POST["getProduct"])){
    
    $obj = new DBOperation();
    $rows = $obj->getAllRecords("products");
    foreach($rows as $row){
    echo "<option value='".$row["pid"].                                 "'>".$row["product_name"]."</option>";       
    }
    exit();
}




?>
    
    
    