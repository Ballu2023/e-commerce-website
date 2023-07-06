<?php
include('KISMAT.php');
if(isset($_POST['brand_btn'])){
$brands_title=$_POST['brand_title'];
    
$select_result="select * from brands where brands_title='$brands_title'";
$result_select=mysqli_query($con,$select_result);
$number=mysqli_num_rows($result_select);
if($number>0){
echo "<script>alert('data is available in data base')</script>";
}
$insert_query="insert into brands (brands_title) values('$brands_title')";
$result=mysqli_query($con,$insert_query);
if($result){
echo "<script>alert('data updates')</script>";
}
}
?>
   
<!docktype html>
<html>
<head>
    <meta charset="utf-8">
   <title>this si category section</title>
    <link rel="stylesheet" href="ultra.css">
    <style>
        body{
        background-color: azure;
        }
        .cate{
        width: 80%;
        height: 40px;
        margin-left: 110px;
        }
        .tetto{
        padding: 55px;
        }
        .method img{
        width: 40px;
        height: 40px;
        }
        .ultra{
        padding: 14px 16px;
        margin-top: 20px;
        margin-left: 110px;
        font-size: 20px;
        background: blue;
        color: white;
        }
    </style>
    </head>
<body>
<form action="" method="post" class="tetto">
    <div class="method">
    <input type="text" class="cate" name="brand_title"><br>
        <div class="sonic">
        <input type="submit" value="insert-brands" class="ultra" name="brand_btn">
    </div>
        </div>
    </form>
    </body>
</html>
    