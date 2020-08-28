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
    </br>
<div class="container">
 <div class="card mx-auto" style="width: 18rem;">
  <img class="card-img-top mx-auto" src="./images/Nudle.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Registration</h5>
<form id="register_form" onsubmit="return false" autocomplete="off">
      <div class="form-group">
    <label for="formGroupExampleInput1">Name</label>
    <input type="text" class="form-control" name="fname" id="fname" placeholder="Full Name">
    <small id="u_error" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
    <small id="e_error" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="pass" id="pass" placeholder="Type Password">
    <small id="p_error" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Re-Enter Password</label>
    <input type="password" class="form-control" name="repass" id="repass" placeholder="Re Type Password">
    <small id="pt_error" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
      <label for="inputState">User Type</label>
      <select name="utype" id="utype" class="form-control">
        <option value="" selected>Choose User Type</option>
        <option value="Admin">Admin</option>
        <option value="Employee">Employee</option>
      </select>
      <small id="t_error" class="form-text text-muted"></small>
    </div>
  <button type="submit" class="btn btn-primary"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Register</button>
</form>
</div>   
<div class="card-footer text-muted"><a href="#">Need Help ?</a></div>
</div>
    
    

</body>


</html>

