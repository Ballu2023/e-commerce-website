<?php
include('kismat.php');
if(isset($_POST['cat_btn'])){
$movie_title=$_POST['cat_title'];
    
$select_query="select * from cateogries where Product_cate='$movie_title'";
$result_select=mysqli_query($con,$select_query);
$result_Find=mysqli_num_rows($result_select);
if($result_Find > 0){
echo "<script>alert('data is already availablemin database')</script>";
}else{
    
$insert_query="insert into cateogries (Product_cate) value ('$movie_title')";
$result_query=mysqli_query($con,$insert_query);
if($result_query){
echo "<script>alert('Data Upadted')</script>";
}

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
    <input type="text" class="cate" name="cat_title">
        <div class="sonic">
        <input type="submit" value="cateogries" class="ultra" name="cat_btn">
    </div>
        </div>
    </form>
</body>
    </html>