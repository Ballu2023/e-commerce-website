<?php
include('KISMAT.php');



function get_all_product(){
global $con;
if(!isset($_GET['categories'])){
if(!isset($_GET['brand'])){ 
    $select_query="select * from product";
        $result_query=mysqli_query($con,$select_query);
        while($row_data=mysqli_fetch_assoc($result_query)){
        $product_id=$row_data['product_id'];
        $product_title=$row_data['product_title'];
        $product_old_price=$row_data['OldPrice'];
        $product_new_price=$row_data['product_price'];
        $product_images=$row_data['product_image1'];
            echo "<div class='rows'>
  <div class='call-6'>
   <img src='product_images/$product_images' width='250px' height='300px'>     
        </div>   
<div class='call-6'>
    <div class='details'>
<h1>$product_title</h1>
<h2>Product Rating</h2>
<h3>old price<del>$product_old_price </del>$product_new_price</h3>
<button type='submit' class='btnty'><a href='allproduct.php?add_to_cart=$product_id'>Add to cart</a></button>
<button type='submit' class='beesho'><a href='single.php?Product_id=$product_id'>View More</a></button>
    </div>    
        </div>  
        </div> ";
        }   

}
}
}


function get_unique_brands(){
global $con;
if(isset($_GET['brand'])){ 
$brand_categories=$_GET['brand'];
    $select_query="select * from product where brands_id=$brand_categories";
        $result_query=mysqli_query($con,$select_query);
    $row_num=mysqli_num_rows($result_query);
    if($row_num==0){
    echo "<h1>Brand Are Not Available</h1>";
    }
        while($row_data=mysqli_fetch_assoc($result_query)){
        $product_id=$row_data['product_id'];
        $product_title=$row_data['product_title'];
        $product_old_price=$row_data['OldPrice'];
        $product_new_price=$row_data['product_price'];
        $product_images=$row_data['product_image1'];
            echo "<div class='rows'>
  <div class='call-6'>
   <img src='product_images/$product_images' width='250px' height='300px'>     
        </div>   
<div class='call-6'>
    <div class='details'>
<h1>$product_title</h1>
<h2>Product Rating</h2>
<h3>old price<del>$product_old_price </del>$product_new_price</h3>
<button type='submit' class='btnty'><a href='allproduct.php?add_to_cart=$product_id'>Add to cart</a></button><button type='submit' class='beesho'><a href='single.php?Product_id=$product_id'>View More</a></button>
    </div>    
        </div>  
        </div> ";
        }   

}
}

function get_unique_categories(){
global $con;
if(isset($_GET['categories'])){ 
$categories_title=$_GET['categories'];
    $select_query="select * from product where categories_id=$categories_title";
        $result_query=mysqli_query($con,$select_query);
    $row_num=mysqli_num_rows($result_query);
    if($row_num==0){
    echo "<h1>Categories Are Not Available</h1>";
    }
        while($row_data=mysqli_fetch_assoc($result_query)){
        $product_id=$row_data['product_id'];
        $product_title=$row_data['product_title'];
        $product_old_price=$row_data['OldPrice'];
        $product_new_price=$row_data['product_price'];
        $product_images=$row_data['product_image1'];
            echo "<div class='rows'>
  <div class='call-6'>
   <img src='product_images/$product_images' width='250px' height='300px'>     
        </div>   
<div class='call-6'>
    <div class='details'>
<h1>$product_title</h1>
<h2>Product Rating</h2>
<h3>old price<del>$product_old_price </del>$product_new_price</h3>
<button type='submit' class='btnty'><a href='allproduct.php?add_to_cart=$product_id'>Add to cart</a></button><button type='submit' class='beesho'><a href='single.php?Product_id=$product_id'>View More</a></button>
    </div>    
        </div>  
        </div> ";
        }   

}
}

function get_unique_search(){
global $con;
if(isset($_GET['search_btn'])){ 
$categories_title=$_GET['search_int'];
    $select_query="select * from product where product_keywords like '%$categories_title%'";
        $result_query=mysqli_query($con,$select_query);
    $row_num=mysqli_num_rows($result_query);
    if($row_num==0){
    echo "<h1>search result not found</h1>";
    }
        while($row_data=mysqli_fetch_assoc($result_query)){
        $product_id=$row_data['product_id'];
        $product_title=$row_data['product_title'];
        $product_old_price=$row_data['OldPrice'];
        $product_new_price=$row_data['product_price'];
        $product_images=$row_data['product_image1'];
            echo "<div class='rows'>
  <div class='call-6'>
   <img src='product_images/$product_images' width='250px' height='300px'>     
        </div>   
<div class='call-6'>
    <div class='details'>
<h1>$product_title</h1>
<h2>Product Rating</h2>
<h3>old price<del>$product_old_price </del>$product_new_price</h3>
<button type='submit' class='btnty'><a href='allproduct.php?add_to_cart=$product_id'>Add to cart</a></button><button type='submit' class='beesho'><a href='single.php?Product_id=$product_id'>View More</a></button>
    </div>    
        </div>  
        </div> ";
        }   

}
}

function view_all_products(){
global $con;
if(isset($_GET['Product_id'])){
if(!isset($_GET['categories'])){
if(!isset($_GET['brand'])){ 
$product_varialble=$_GET['Product_id'];
    $select_query="select * from product WHERE product_id=$product_varialble";
        $result_query=mysqli_query($con,$select_query);
        while($row_data=mysqli_fetch_assoc($result_query)){
        $product_id=$row_data['product_id'];
        $product_title=$row_data['product_title'];
        $product_description=$row_data['product_description'];
        $product_old_price=$row_data['OldPrice'];
        $product_new_price=$row_data['product_price'];
        $product_images1=$row_data['product_image1'];
        $product_images2=$row_data['product_image2'];
        $product_images3=$row_data['product_image3'];
        $product_images4=$row_data['product_image4'];
        $product_images5=$row_data['product_image5'];
            echo "<div class='help_mode'>
    <div class='assign_mode'>
       <img src='product_images/$product_images1' width='500px' height='500px' id='imp'>
    <div class='deeper'>
        <div class='upper'>
      <img src='product_images/$product_images2' width='100px' height='100px' class='imp'>  
      <img src='product_images/$product_images3' width='100px' height='100px' class='imp'>  
      <img src='product_images/$product_images4' width='100px' height='100px' class='imp'>  
      <img src='product_images/$product_images5' width='100px' height='100px' class='imp'>  
        </div>
        
        </div>
        </div>
    <div class='assign_mode'>
        <div class='wishuka'>
       <h1>$product_title</h1> 
        <h2>$product_description</h2>
        <h3>old price<del>$product_old_price </del><br>New Price : $product_new_price</h3>
    <button type='submit' class='btnty'><a href='allproduct.php?add_to_cart=$product_id'>Add to cart</a></button>
        </div>
    </div>
        </div>";
        }   

}
}
}


}
function getIPAddress() {  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  

function cart(){
if(isset($_GET['add_to_cart'])){
global $con;
     $ip = getIPAddress(); 
$get_product_id=$_GET['add_to_cart'];
$select_query="select * from  cart_detailss where ip_address='$ip' and product_id=$get_product_id";
$result_query=mysqli_query($con,$select_query);
$number=mysqli_num_rows($result_query);
    if($number>0){
    echo "<script>alert('data is already in database')</script>";
    echo "<script>window.open('allproduct.php','_self')</script>";
    }else{
    $insert_query="insert into cart_detailss (product_id,ip_address,quantity) values ($get_product_id,'$ip',0)";
    $result_question= mysqli_query($con,$insert_query);
            echo "<script>alert('Data store in database')</script>";

        echo "<script>window.open('allproduct.php','_self')</script>";    
    }
}

}

/*
function to get cart items numbers
*/
 function cart_items(){
 if(isset($_GET['add_to_cart'])){
global $con;
     $ip = getIPAddress(); 
$select_query="select * from  cart_detailss where ip_address='$ip'";
$result_query=mysqli_query($con,$select_query);
$count_cart_items=mysqli_num_rows($result_query);
    }else{
    global $con;
     $ip = getIPAddress(); 
$select_query="select * from  cart_detailss where ip_address='$ip'";
$result_query=mysqli_query($con,$select_query);
$count_cart_items=mysqli_num_rows($result_query);  
    }
    echo $count_cart_items;
}

/*
total price function
*/

function total_cart_price(){
global $con;
     $ip = getIPAddress(); 
    $total_price=0;
$cart_query="select * from cart_detailss where ip_address='$ip'";
$result_query=mysqli_query($con,$cart_query);
while($row_data=mysqli_fetch_assoc($result_query)){
$product_id=$row_data['product_id'];
$select_product="select * from  product where $product_id='$product_id'";
$result_product=mysqli_query($con,$select_product);
while($row_product_price=mysqli_fetch_assoc($result_product)){
$product_price=array($row_product_price['product_price']);
$product_values=array_sum($product_price);
$total_price+=$product_values;
}
}
    echo $total_price;
}


?>