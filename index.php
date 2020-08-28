<?php 
include_once("./database/constants.php");  
if(isset($_SESSION["userid"])){
    header("location:".DOMAIN."/dashboard.php");
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
    <script type="text/javascript" rel="stylesheet" src="./js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    
</head>
    
<body>
<div class="overlay"><div class="loader"></div></div>    
<?php include_once("./templates/header.php"); ?>
    </br></br>
<div class="container">
        <?php
    if(isset($_GET["msg"]) AND !empty($_GET["msg"])){
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $_GET["msg"];  ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
        <?php
    }
    
    ?>
 <div class="card mx-auto" style="width: 18rem;">
  <img class="card-img-top mx-auto" src="./images/Nudle.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Log-In</h5>
<form id="form_login" onsubmit="return false">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="log_email" id="log_email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="e_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="log_pass" id="log_pass" placeholder="Password">
    <small id="p_error" class="form-text text-muted"></small>
  </div>
  <button type="submit" class="btn btn-primary"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Login</button>&nbsp;<span><a href="register.php">Register</a></span>
</form>
</div>   
<div class="card-footer"><a href="#">Forget Password ?</a></div>
</div>
    
    

</body>


</html>

