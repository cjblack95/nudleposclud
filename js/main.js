$(document).ready(function(){
    var DOMAIN = "http://localhost/nudleposcloud";
    $("#register_form").on("submit", function(){
        var status = false;
        var name = $("#fname");
        var email = $("#email");
        var pass1 = $("#pass");
        var pass2 = $("#repass");
        var type = $("#utype");
        
        var e_patt = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);
        if(name.val() == ""){
            name.addClass("border-danger");
            $("#u_error").html("<span class='text-danger'>Please Enter Name</span>");
            status = false;
            
        }
        else{
            name.removeClass("border-danger");
            $("#u_error").html("<span class='text-danger'></span>");
            status = true;
        }
        
        if(!e_patt.test(email.val())){
            email.addClass("border-danger");
            $("#e_error").html("<span class='text-danger'>Please Enter valid e-mail Address</span>");
            status = false;
            
        }
        else{
            email.removeClass("border-danger");
            $("#e_error").html("<span class='text-danger'></span>");
            status = true;
        }
        if(pass1.val() == "" || pass1.val().length<6){
            pass1.addClass("border-danger");
            $("#p_error").html("<span class='text-danger'>Please Enter password and Password Should be at least 6 Charecter</span>");
            status = false;
            
        }
        else{
            pass1.removeClass("border-danger");
            $("#p_error").html("<span class='text-danger'></span>");
            status = true;
        }
        if(pass1.val() != pass2.val() || pass2.val == ""){
            pass2.addClass("border-danger");
            $("#pt_error").html("<span class='text-danger'>Password Doesn't Match</span>");
            status = false;
            
        }
        else{
            pass2.removeClass("border-danger");
            $("#pt_error").html("<span class='text-danger'></span>");
            status = true;
        }
        if(type.val() == "" || type.val() == "Choose User Type"){
            type.addClass("border-danger");
            $("#t_error").html("<span class='text-danger'>Please Select User Role</span>");
            status = false;
            
        }
        else{
            type.removeClass("border-danger");
            $("#t_error").html("<span class='text-danger'></span>");
            status = true;
        }
        
        if ((pass1.val() == pass2.val()) && status == true) {
			$(".overlay").show();
			$.ajax({
				url : DOMAIN+"/includes/process.php",
				method : "POST",
				data : $("#register_form").serialize(),
				success : function(data){
                        
				        if(data == "EMAIL_ALREADY_EXISTS"){
                            $(".overlay").hide();
                            alert("It seems like your email already in use");
                        }
                        else if(data == "SOME_ERROR"){
                            $(".overlay").hide();
                            alert("Something Went Wrong");
                        }
                        else{
                            $(".overlay").hide();
                            window.location.href = encodeURI(DOMAIN+"/index.php?msg=You are registered now you can login");
                        }
				}
			})
		}else{
           	pass2.addClass("border-danger");
			$("#p2_error").html("<span class='text-danger'>Password is not matched</span>");
			status = true;
		}
     
        
    })
    
    $("#form_login").on("submit",function(){
        var email = $("#log_email");
        var pass = $("#log_pass");
        var status = false;
        if(email.val() == ""){
            email.addClass("border-danger");
            $("#e_error").html("<span class='text-danger'>Please Enter Email</span>");
            status = false;
        }
        else{
            email.removeClass("border-danger");
            $("#e_error").html(""); 
            status = true;
        }
        if(pass.val() == ""){
            pass.addClass("border-danger");
            $("#p_error").html("<span class='text-danger'>Please Enter Password</span>");
            status = false;
        }
        else{
            pass.removeClass("border-danger");
            $("#p_error").html(""); 
            status = true;
        }
        if(status){
            $(".overlay").show();
            $.ajax({
				url : DOMAIN+"/includes/process.php",
				method : "POST",
				data : $("#form_login").serialize(),
				success : function(data){
                        
				        if(data == "NOT_REGISTERED"){
                            $(".overlay").hide();
                            alert("It seems like your email not registered");
                        }
                        else if(data == "PASSWORD_NOT_MATCHED"){
                            $(".overlay").hide();
                            alert("Password doesn't match");
                        }
                        else{
                            window.location.href= DOMAIN+"/dashboard.php";
                        }
				}
			})
        } 
    })
    fetch_category();
    function fetch_category(){
        
        $.ajax({
            
            url : DOMAIN+"/includes/process.php",
            method : "POST",
            data : {getCategory:1},
            success : function(data){
                var root = "<option value='0'>Root</option>";
                var choose = "<option value=''>Choose</option>";
                $("#parent_cat").html(root+data);
                $("#select_category").html(choose+data);
                $("#select_category_stock").html(choose+data);   
            }
        })
    }
    fetch_brand();
    function fetch_brand(){
        
        $.ajax({
            
            url : DOMAIN+"/includes/process.php",
            method : "POST",
            data : {getBrand:1},
            success : function(data){
                var root = "<option value='0'>Root</option>";
                var choose = "<option value=''>Choose</option>";
                $("#select_brand").html(choose+data);
                $("#select_brand_stock").html(choose+data);
            }
        })
    }
    $("#from_category").on("submit",function(){
        $("#brand_error").html("<span></span>");
        if($("#category_name").val() == ""){
            $("#category_name").addClass("border-danger");
            $("#cat_error").html("<span class='text-danger'>Please Enter Category Name</span>");
        }else{
            
            $.ajax({
                url : DOMAIN+"/includes/process.php",
                method : "POST",
                data : $("#from_category").serialize(),
                success : function(data){
                    if(data == "CATEGORY_ADDED"){
                    $("#category_name").removeClass("border-danger");
                    $("#cat_error").html("<span class='text-success'>Category Added Successfully</span>");  
                    fetch_category();
                    $("#category_name").val("");
                    }
                    else{ 
                        alert(data);
                    }
                }
            })
        }
        
    })
    
    $("#from_brand").on("submit",function(){
        if($("#brand_name").val() == ""){
        $("#brand_name").addClass("border-danger");
        $("#brand_error").html("<span class='text-danger'>Please Enter Brand Name</span>");  
        }
        else{
            $.ajax({
                url : DOMAIN+"/includes/process.php",
                method : "POST",
                data : $("#from_brand").serialize(),
                success : function(data){
                    if(data == "BRAND_ADDED"){
                    $("#brand_name").removeClass("border-danger");
                    $("#brand_error").html("<span class='text-success'>Brand Added Successfully</span>");  
                    fetch_brand();
                    $("#brand_name").val("");
                    }
                    else{ 
                        alert(data);
                    }
                }
            })
        }
    })
    
   $("#from_product").on("submit",function(){
      $.ajax({
                url : DOMAIN+"/includes/process.php",
                method : "POST",
                data : $("#from_product").serialize(),
                success : function(data){
                    if(data == "NEW_PRODUCT_ADDED"){
                        alert(data);
                    }
                    else{
                        console.log(data);
                        alert(data);
                    }
                } 
       
       
   }) 
})
    $("#from_branch").on("submit",function(){
      $.ajax({
                url : DOMAIN+"/includes/process.php",
                method : "POST",
                data : $("#from_branch").serialize(),
                success : function(data){
                    if(data == "NEW_BRANCH_ADDED"){
                        alert(data);
                    }
                    else{
                        console.log(data);
                        alert(data);
                    }
                } 
       
       
   }) 
})
    fetch_branch();
    function fetch_branch(){
        
        $.ajax({
            
            url : DOMAIN+"/includes/process.php",
            method : "POST",
            data : {getBranch:1},
            success : function(data){
                var choose = "<option value=''>Choose</option>";
                $("#branch_info").html(choose+data);
            }
        })
    }
    fetch_product();
    function fetch_product(){
        
        $.ajax({
            
            url : DOMAIN+"/includes/process.php",
            method : "POST",
            data : {getProduct:1},
            success : function(data){
                var choose = "<option value=''>Choose</option>";
                $("#item").html(choose+data);
            }
        })
    }
    
   $("#from_addStock").on("submit",function(){
      $.ajax({
                url : DOMAIN+"/includes/process.php",
                method : "POST",
                data : $("#from_addStock").serialize(),
                success : function(data){
                    if(data == "STOCK_DISTRIBUTION_DONE"){
                        alert(data);
                    }
                    else{
                        console.log(data);
                        alert(data);
                    }
                } 
       
       
   }) 
})  
    
})
    
