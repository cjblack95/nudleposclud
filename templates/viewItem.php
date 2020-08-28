<?php 
include_once("../database/constants.php");  
if(!isset($_SESSION["userid"])){
    header("location:".DOMAIN."/");
}      
 else{
     header("location:");
 }     
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
<?php 
include_once("header.php"); 
include_once("../database/constants.php");
include_once("../includes/DBOperation.php");
?>    
<body>
    
    </br></br>
<table class="table">
    <?php
    
    $obj = new DBOperation();
    $rows = $obj->getStockDetails();
    
    ?>
  <thead class="thead-dark">
    <tr>
      <th scope="col">Product ID</th>
      <th scope="col">Barcode</th>
      <th scope="col">Category</th>
      <th scope="col">Brand</th>
      <th scope="col">Product Description</th>
      <th scope="col">Stock in Hand</th>
      <th scope="col">Unit</th>
      <th scope="col">Branch</th>
      <th scope="col">Purchase Price</th>
      <th scope="col">Sales Price</th>
    </tr>
  </thead>
    <?php 
     foreach($rows as $row){
   ?>  
 
  <tbody>
    <tr>
      <td><?php echo $row["pid"] ?></td>
      <td><?php echo $row["barcode"] ?></td>
      <td><?php echo $row["category_name"] ?></td>
      <td><?php echo $row["brand_name"] ?></td>
      <td><?php echo $row["product_name"] ?></td>
      <td><?php echo $row["stockqty"] ?></td>
      <td><?php echo $row["unit"] ?></td>
      <td><?php echo $row["branch_name"] ?></td>
      <td><?php echo $row["product_price"] ?></td>
      <td><?php echo $row["product_sale"] ?></td>
    </tr>  
  </tbody>
  <?php
     }
    ?>
</table>

</body>


</html>

