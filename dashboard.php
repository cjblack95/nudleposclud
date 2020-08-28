<?php 
include_once("./database/constants.php");  
if(!isset($_SESSION["userid"])){
    header("location:".DOMAIN."/");
}      
      
?>

<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nudleposcloud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = $conn->prepare("SELECT * FROM `user` WHERE id=?");
$sql->bind_param("s",$_SESSION["userid"]);
$sql->execute();
$result = $sql->get_result();


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Nudel POS Cloud</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
    
<body>  
<?php include_once("./templates/header.php"); ?>
<?php include_once("./templates/category.php"); ?>
<?php include_once("./templates/brands.php"); ?>
<?php include_once("./templates/products.php"); ?>
<?php include_once("./templates/branch.php"); ?>
<?php include_once("./templates/addStock.php"); ?>
    </br></br>

<div class="container">
<div class="row">
    <div class="col-md-4">
    <div class="card mx-auto" style="width:80%;">
  <img class="card-img-top" src="./images/profile.png" alt="Card image cap">
  <div class="card-body"> 
      <?php 
      $rows = array();
      if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
        $rows[]=$row;

      
      ?>
    <h5 class="card-title">Profile Information</h5>
    <p class="card-text"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;Name:&nbsp;<?php echo $row["name"] ?></p>
    <p class="card-text"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;User Type:&nbsp;<?php echo $row["usertype"] ?></p>
    <p class="card-text">Last Login:&nbsp;<?php echo $row["last_login"] ?></p></p>
    <a href="#" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Edit Profile</a>
  </div>
   <?php 
      }
} 
$conn->close();
    ?>   
</div>
    </div>
    <div class="col-md-8">
    <div class="jumbotron" style="width:100%;height:100%;">
        <h1>Welcome Admin, </h1>
        <div class="row">
        <div class="col-sm-6">
        <iframe src="http://free.timeanddate.com/clock/i7dc355c/n73/szw160/szh160/hoc09f/hbw10/cf100/hgr0/fas34/fdi72/mqv0/mhc000/mhs3/mhl20/mhw1/mhd84/mmv0/hhs1/hms1/hsc000/hss1" frameborder="0" width="160" height="160"></iframe>
    
        </div>
        <div class="col-sm-6">
             <div class="card">
      <div class="card-body">
        <h5 class="card-title">Create New Order</h5>
        <p class="card-text">Here you can create new Order and Invoice</p>
        <a href="#" class="btn btn-primary">New Orders</a>
      </div>
        </div>
        
        </div>
        
        </div>
    <img calss="mx-auto" src="./images/Nudle.png" alt="Card image cap" style="height: 100px;width: 300px;">
    </div>
    
</div>
</div>
    
   <div class="container">
    <div class="row">
       <div class="col-md-4"> 
             <div class="card-body mx-auto">
        <h5 class="card-title">Categories</h5>
        <p class="card-text">Here you can create category and manage category and sub category</p>
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#category">Add Category</a>
        <a href="#" class="btn btn-primary">Manage Category</a>
      </div>
       </div>
    <div class="col-md-4"> 
             <div class="card-body mx-auto">
        <h5 class="card-title">Brands</h5>
        <p class="card-text">Here you can create brand and manage brand and sub brand</p>
        <a href="#" class="btn btn-primary"data-toggle="modal" data-target="#brands">Add Brand</a>
        <a href="#" class="btn btn-primary">Manage Brand</a>
      </div>
       </div>
    <div class="col-md-4"> 
             <div class="card-body mx-auto">
        <h5 class="card-title">Products</h5>
        <p class="card-text">Here you can create new product and manage product</p>
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#products">Add Product</a>
        <a href="#" class="btn btn-primary">Manage Product</a>
      </div>
       </div>
    <div class="col-md-4"> 
             <div class="card-body mx-auto">
        <h5 class="card-title">Products</h5>
        <p class="card-text">Here you can create new Order and Invoice</p>
        <a href="#" class="btn btn-primary">New Orders</a>
      </div>
       </div>
          <div class="col-md-4"> 
             <div class="card-body mx-auto">
        <h5 class="card-title">Create New Order</h5>
        <p class="card-text">Here you can create new Order and Invoice</p>
        <a href="./templates/viewItem.php" class="btn btn-primary">View Stock</a>
      </div>
       </div>
          <div class="col-md-4"> 
             <div class="card-body mx-auto">
        <h5 class="card-title">Create New Order</h5>
        <p class="card-text">Here you can create new Order and Invoice</p>
        <a href="#" class="btn btn-primary">New Orders</a>
      </div>
       </div>
        <div class="col-md-4"> 
        <div class="card-body mx-auto">
        <h5 class="card-title">Branch</h5>
        <p class="card-text">Here you can ADD or EDIT Branch Details</p>
        <a href="#" class="btn btn-primary"data-toggle="modal" data-target="#branch">ADD Branch</a>
      </div>
       </div>
        <div class="col-md-4"> 
             <div class="card-body mx-auto">
        <h5 class="card-title">Stock Manage (Beta)</h5>
        <p class="card-text">Here You can Manage Stock or Add Stock</p>
        <a href="#" class="btn btn-primary"data-toggle="modal" data-target="#addStock">Add Stock</a>
      </div>
       </div>
                  <div class="col-md-4"> 
             <div class="card-body mx-auto">
        <h5 class="card-title">Create New Order</h5>
        <p class="card-text">Here you can create new Order and Invoice</p>
        <a href="#" class="btn btn-primary">New Orders</a>
      </div>
       </div>
    </div>
    
    
    </div> 

</body>


</html>

