<?php
include('KISMAT.php');
if(isset($_POST['brand_btn'])){

$username=$_POST['username'];
$Moview_producer=$_POST['Moview_producer'];
$Moview_director=$_POST['Moview_director'];
$Moview_actoir=$_POST['Moview_actoir'];
$Moview_description=$_POST['Moview_description'];
$venue_name1=$_POST['venue_name1'];
$venue_name2=$_POST['venue_name2'];
$venue_name3=$_POST['venue_name3'];
$Slot_time1=$_POST['Slot_time1'];
$Slot_time2=$_POST['Slot_time2'];
$Slot_time3=$_POST['Slot_time3'];
$Moview_Keyword=$_POST['Moview_Keyword'];
$Moview_ratting=$_POST['Moview_ratting'];
$Moview_price=$_POST['Moview_price'];
$booking_statu='true';
  
/*
permanant image    
*/

$Moview_image1=$_FILES['Moview_image1']['name'];
/*
temp images
*/
$temp_image1=$_FILES['Moview_image1']['tmp_name'];

if($book_id=="" or $Moview_title=="" or $Moview_producer=="" or $Moview_director=="" or $Moview_actoir=="" or $Moview_description=="" or $venue_name1=="" or $venue_name2=="" or $venue_name3=="" or $Slot_time1=="" or $Slot_time2=="" or $Slot_time3=="" or $Moview_Keyword=="" or $Moview_ratting=="" or $Moview_price=="" or $Moview_image1==""){
echo "<script>alert('please fill all the accurate details')</script>";
    exit();
}else{

move_uploaded_file($temp_image1,"product_images/$Moview_image1");
    
$inserting_query="insert into booking_movie (	Movie_id,movie_title,director,producer,actor,description,venu_name_one,venu_name_two,	venu_name_three,time_slot_one,actortime_slot_two,actortime_slot_three,keyword,image_1,rating,Price,status,date) value ('$book_id','$Moview_title','$Moview_producer','$Moview_director','$Moview_actoir','$Moview_description','$venue_name1','$venue_name2','$venue_name3','$Slot_time1','$Slot_time2','$Slot_time3','$Moview_Keyword','$Moview_image1','$Moview_ratting',$Moview_price,NOW(),'$booking_statu')";
$result_query=mysqli_query($con,$inserting_query);
if($result_query){
    echo "<script>alert('data update sucessfully')</script>";
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
        <H1>User Login</H1>
        <div class="title">
       <label class="rrr">User Name</label><br> 
<input type="text" placeholder="enter your product name" name="username" class="product" autocomplete="off" required="required">
            </div> 
         <div class="title">
       <label class="rrr">Password</label><br> 
        <input type="password" placeholder="Enter Director's name" name="user_password" class="product" autocomplete="off" required="required">
            </div>
        
        <div class="ifpra">
        <input type="submit" value="login" name="brand_btn" class="rudra_bhagwan">
            </div>
    <div class="wishu">
        <h2>For Registration Click Here <a href="unserregistration.php">Register</a></h2>
        </div>
        </form>
    
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>