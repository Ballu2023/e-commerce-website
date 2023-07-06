<?php
include('KISMAT.php');
include('whole.php');
if(isset($_POST['brand_btn'])){
$user_name=$_POST['username'];
$user_email=$_POST['user_email'];
$user_password=$_POST['user_password'];
$hash_password=password_hash($user_password,PASSWORD_DEFAULT);
$confirm_password=$_POST['confirm_password'];
$user_address=$_POST['user_address'];
$user_contact=$_POST['user_contact'];

$user_image=$_FILES['user_image']['name'];
$temp_image=$_FILES['user_image']['tmp_name'];
$user_ip=getIPAddress();
  
    
    
$select_query="select * from user_table where user_name='$user_name' or user_email='$user_email'";
$result_query=mysqli_query($con,$select_query);
$row_count=mysqli_num_rows($result_query);
if($row_count>0){
echo "<script>alert('user anme and email address is taken please try some new username and email address')</script>";
}else if($user_password!=$confirm_password){
echo "<script>alert('password do not match')</script>";
}else{
/*
insert query    
*/
move_uploaded_file($temp_image,"useriamge/$user_image");
$insert_query="insert into user_table (user_name,user_email,user_password,user_image,ip_address,user_address,user_mobile) value ('$user_name','$user_email','$hash_password','$user_ip','$user_image','$user_address','$user_contact')";
$sql_execute=mysqli_query($con,$insert_query);
if($sql_execute){
echo "<script>alert('user addedd sucessfully')</script>";
}else{
die(mysqli_error($con));
}
}
}
?>
<!doctype html>
<html>
<head>
    <title>ertyu</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="ultra.css">
    <style>
    body{
        background-color: aliceblue;
        padding: 10px;       
        }
        .ultra{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        
        }
        .title{
        margin-top: 15px;
        font-size: 20px;    
        }
        .product{
        height: 40px;
        width: 500px;
        
        }
        select{
        height: 40px;
        width: 500px;
        
        }
        .johnty{
        height: 40px;
        width: 500px;
        font-size: 16px;
        }
        .rrr{
         font-size: 20px;
        }
        .rudra_bhagwan{
        height: 40px;
        width: 500px;
        background-color: lightgreen;
        border: none;
        margin-top: 10px;
        }
        .ven{
            width: 100%;
            font-size: 12px;
            font-family: sans-serif;
        }
    </style>
    </head>
<body>
    <div class="ultra">
    <form action="" method="post" enctype="multipart/form-data">
        <H1>user Registration details</H1>
        <div class="title">
       <label class="rrr">User Name</label><br> 
<input type="text" placeholder="enter your product name" name="username" class="product" autocomplete="off" required="required">
            </div>  
            <div class="title">
       <label class="rrr">User email</label><br> 
        <input type="text" placeholder="Enter Producer's name" name="user_email" class="product" autocomplete="off" required="required">
            </div>
         <div class="title">
       <label class="rrr">Password</label><br> 
        <input type="password" placeholder="Enter Director's name" name="user_password" class="product" autocomplete="off" required="required">
            </div>
         <div class="title">
       <label class="rrr">Confirm Password</label><br> 
        <input type="password" placeholder="Enter Director's name" name="confirm_password" class="product" autocomplete="off" required="required">
            </div>
        <div class="title">
       <label class="rrr">image1</label><br> 
        <input type="file" name="user_image" class="johnty" required="required">
            </div> 
      
     <div class="Rating">
       <label class="rrr">Address</label><br> 
        <input type="text" placeholder="enter your product price" name="user_address" class="product" autocomplete="off" required="required">
            </div>  
        <div class="Price">
       <label class="rrr">Contact</label><br> 
        <input type="text" placeholder="enter your product price" name="user_contact" class="product" autocomplete="off" required="required">
            </div> 
        <div class="ifpra">
        <input type="submit" value="add/brand" name="brand_btn" class="rudra_bhagwan">
            </div>
    <div class="wishu">
        <h2>For Registration Click Here <a href="userlogin.php">Login</a></h2>
        </div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>