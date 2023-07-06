<?php
include('kismat.php');
if(isset($_POST['brand_btn'])){
$product_title=$_POST['products_title'];
$product_description=$_POST['products_descripion'];
$product_keywords=$_POST['products_Keyword'];
$product_dcategories=$_POST['Product_categories'];
$product_brands=$_POST['product_brands'];
$product_old_price=$_POST['vicky'];
$product_new_price=$_POST['product_price'];
$product_status='true';
  
/*
NORMAL IMAGES FOLDER
*/
$product_images1=$_FILES['product_image1']['name'];
$product_images2=$_FILES['product_image2']['name'];
$product_images3=$_FILES['product_image3']['name'];
$product_images4=$_FILES['product_image4']['name'];
$product_images5=$_FILES['product_image5']['name'];
    
$temp_images1=$_FILES['product_image1']['tmp_name'];
$temp_images2=$_FILES['product_image2']['tmp_name'];
$temp_images3=$_FILES['product_image3']['tmp_name'];
$temp_images4=$_FILES['product_image4']['tmp_name'];
$temp_images5=$_FILES['product_image5']['tmp_name'];
    
if($product_title=="" or $product_description=="" or $product_keywords=="" or $product_dcategories=="" or $product_brands=="" or $product_old_price=="" or $product_new_price=="" or $product_images1=="" or $product_images2=="" or $product_images3=="" or $product_images4=="" or $product_images5==""){
echo "<script>alert('please fill all details')</script>";
    exit();
}else {
    move_uploaded_file($temp_images1,"product_images/$product_images1");
    move_uploaded_file($temp_images2,"product_images/$product_images2");
    move_uploaded_file($temp_images3,"product_images/$product_images3");
    move_uploaded_file($temp_images4,"product_images/$product_images4");
    move_uploaded_file($temp_images5,"product_images/$product_images5");
    
    
    $insert_query="insert into product (product_title,product_description,product_keywords,categories_id,brands_id,product_image1,product_image2,product_image3,product_image4,product_image5,OldPrice,product_price,date,status) values ('$product_title','$product_description','$product_keywords','$product_dcategories','$product_brands','$product_images1','$product_images2','$product_images3','$product_images4','$product_images5','$product_old_price','$product_new_price',NOW(),'$product_status')";
    $result_query=mysqli_query($con,$insert_query);
    if($result_query){
    echo "<script>alert('data updated')</script>";
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
        padding: 10px;        }
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
        .select{
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
    </style>
    </head>
<body>
    <div class="ultra">
    <form action="" method="post" enctype="multipart/form-data">
        <H1>insert Product</H1>
        <div class="title">
       <label class="rrr">Product title</label><br> 
<input type="text" placeholder="enter your product name" name="products_title" class="product" autocomplete="off" required="required">
            </div>  
        <div class="title">
       <label class="rrr">Description</label><br> 
        <input type="text" placeholder="enter your description" name="products_descripion" class="product" autocomplete="off" required="required">
            </div>  
        <div class="title">
       <label class="rrr">Keyword</label><br> 
        <input type="text" placeholder="enter your Keyword" name="products_Keyword" class="product" autocomplete="off" required="required">
            </div>
        <div class="title">
       <label class="rrr">Category</label><br> 
            <select class="select" name="Product_categories">
               
              <?php
$select_result="select * from cateogries";
$result_select=mysqli_query($con,$select_result);
while($row_data=mysqli_fetch_assoc($result_select)){
$categories_id=$row_data['categories_id'];
$categories_title=$row_data['Product_cate'];
echo "<option value='allproduct.php?categories=$categories_id'>$categories_title</option>";
}
                ?>  
            </select>
            </div>
         <div class="title">
       <label class="rrr">Brands</label><br> 
            <select class="select" name="product_brands">
               <?php

$select_result="select * from  brands";
$result_select=mysqli_query($con,$select_result);
while($row_data=mysqli_fetch_assoc($result_select)){
$brands_id=$row_data['brands_id'];
$brands_title=$row_data['brands_title'];
echo "<option value='allproduct.php?brand=$brands_id'>$brands_title</option>";
}
?>
                
            </select>
            </div>
         <div class="title">
       <label class="rrr">image1</label><br> 
        <input type="file" name="product_image1" class="johnty" required="required">
            </div>
      <div class="title">
       <label class="rrr">image2</label><br> 
        <input type="file" name="product_image2" class="johnty" required="required">
            </div>
      <div class="title">
       <label class="rrr">image3</label><br> 
        <input type="file" name="product_image3" class="johnty" required="required">
            </div>
    <div class="title">
       <label class="rrr">image4</label><br> 
        <input type="file" name="product_image4" class="johnty" required="required">
            </div>
    <div class="title">
       <label class="rrr">image5</label><br> 
        <input type="file" name="product_image5" class="johnty" required="required">
            </div>
    <div class="title">
       <label class="rrr">Old price</label><br> 
        <input type="text" placeholder="enter your product price" name="vicky" class="product" autocomplete="off" required="required">
            </div>  
     <div class="title">
       <label class="rrr">Product price</label><br> 
        <input type="text" placeholder="enter your product price" name="product_price" class="product" autocomplete="off" required="required">
            </div>  
        <input type="submit" value="add/brand" name="brand_btn" class="rudra_bhagwan">
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>

