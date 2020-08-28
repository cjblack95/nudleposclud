<?php

class DBOperation{
    
    private $con;
    
    function __construct(){
        
        include_once("../database/db.php");
        $db = new database();
        
        $this->con = $db->connect();
        
    }
    
    public function addCategory($parent,$cat){
        
        $pre_stm = $this->con->prepare("INSERT INTO `category`(`parent_cat`, `category_name`, `status`) VALUES (?,?,?)");
        $status = 1;
        $pre_stm->bind_param("isi",$parent,$cat,$status);
        $result = $pre_stm->execute() or die($this->con->error);
        if($result){
            return "CATEGORY_ADDED";
        }else{
            
            return 0;
            
        }
    }
    
    public function addBrand($brandName){
        
        $pre_stm = $this->con->prepare("INSERT INTO `brand`(`brand_name`, `status`) VALUES (?,?)");
        $status = 1;
        $pre_stm->bind_param("si",$brandName,$status);
        $result = $pre_stm->execute() or die($this->con->error);
        if($result){
            return "BRAND_ADDED";
        }else{
            
            return 0;
            
        }
    }
    
   public function addProduct($cid,$barcode,$pdes,$pprice,$sprice,$bid){
        
        $pre_stm = $this->con->prepare("INSERT INTO `products`(`cid`, `bid`, `barcode`, `product_name`, `product_price`, `product_sale`) VALUES (?,?,?,?,?,?)");
        $status = 1;
        $pre_stm->bind_param("iissdd",$cid,$bid,$barcode,$pdes,$pprice,$sprice);
        $result = $pre_stm->execute() or die($this->con->error);
        if($result){
            return "NEW_PRODUCT_ADDED";
        }else{
            
            return 0;
            
        }
    }
    
   public function addBranch($branch_name,$branch_addrress){
        
        $pre_stm = $this->con->prepare("INSERT INTO `branch`(`branch_name`, `brach_address`) VALUES (?,?)");
        $status = 1;
        $pre_stm->bind_param("ss",$branch_name,$branch_addrress);
        $result = $pre_stm->execute() or die($this->con->error);
        if($result){
            return "NEW_BRANCH_ADDED";
        }else{
            
            return 0;
            
        }
    }
       public function addBranchStock($pid,$brand,$category,$branch,$stock_qty,$unit){
        
        $pre_stm = $this->con->prepare("INSERT INTO `branch_stock`(`pid`, `brand`, `category`, `branch`, `stockqty`, `unit`) VALUES (?,?,?,?,?,?)");
        $status = 1;
        $pre_stm->bind_param("iiiiis",$pid,$brand,$category,$branch,$stock_qty,$unit);
        $result = $pre_stm->execute() or die($this->con->error);
        if($result){
            return "STOCK_DISTRIBUTION_DONE";
        }else{
            
            return 0;
            
        }
    }
    
    public function getAllRecords($table){
        $pre_stm = $this->con->prepare("SELECT * FROM ".$table);
        $pre_stm->execute() or die($this->con->error);
        $result = $pre_stm->get_result();
        $rows = array();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }
        return "NO_DATA";
    }
    
 
        public function getStockDetails(){
        $pre_stm = $this->con->prepare("SELECT products.pid,products.barcode,products.product_name,products.product_price,products.product_sale,category.category_name,brand.brand_name,branch.branch_name,branch_stock.stockqty,branch_stock.unit from products INNER JOIN branch_stock on products.pid=branch_stock.pid INNER JOIN category on category.cid=branch_stock.category INNER JOIN brand ON brand.bid=branch_stock.brand INNER JOIN branch on branch.brach_id=branch_stock.branch");
        $pre_stm->execute() or die($this->con->error);
        $result = $pre_stm->get_result();
        $rows = array();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }
        return "NO_DATA";
    }
}



/*$obj = new DBOperation();
echo $obj->addCategory(0,"Desktop PC Components");*/

//$obj = new DBOperation();
//echo "<pre>";

//print_r($obj->getAllRecords("category"));

?>