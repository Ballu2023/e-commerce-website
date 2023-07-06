<?php
include('KISMAT.php');
include('whole.php');
?>

<!docktype html>
<html>
<head>
    <meta charset="utf-8">
    <title>this is my website</title>
<style>
    *{
    padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    .header{
    display: flex;
        align-items: center;
    background: black;
    padding: 5px;
    }
    .int{
    width: 800px;
    margin-left: 50px;
    height: 30px;
    }
    .btn{
    width: 70px;
    height: 30px;
    margin-left: -10px;
    background-color: darkorange;
    color: white;
    }
    .btn2{
    width: 150px;
    height: 30px;
    margin-left: 10px;
    background: none;
    border: 2px solid white;
    }
    .btn2 a{
    text-decoration: none;
    color: white;
    padding: 10px;
    }
    .btn2:hover{
    background-color: darkorange;
    transition: 0.5s;
    }
    
    .header img{
    margin-left: 30px;
    }
    .btn3{
    width: 130px;
    }
    
    th{
    text-align: center;
    font-size: 20px;
    }
    table{
    align-items: center;
    justify-content: center;
    padding: 20px;
    }
    .cart-items{
    margin: 10px auto;    
    }
    table{
    width: 100%;
    }
    table th{
    margin-left: 50px;
    text-align: left;
    background: black;
    color: white;
    padding: 10px;
    }
    td{
text-align: left;
    }
    .buttler{
    width: 130px;
    margin-right: 20px;
    text-align: center;
    background: black;
    color: white;
    height: 40px;
    border: none;
    }
    .buttler:hover{
    background-color: darkorange;
    transition: 0.5s;
    }
    .total{
    display: flex;
    margin-left: 20px;
    margin-top: 30px;
    }
    .john{
    background-color: black;
    height: 40px;
    color: white;
    padding: 10px;
    margin-right: 20px;
    margin-left: 30px;
    border: none;
    }
    .cart-items h1{
    text-align: center;
    }
    .john:hover{
    background-color: darkorange;
    transition: 0.5s;
    }
    .john a{
    color: white;
    text-decoration: none;
    }
    
    
       </style>
    </head>
<body>
<!--
    header section start
-->
    <div class="header">
<img src="image/lord%20of%20the%20rings.png" width="125px" height="50px">
<div class="search">
        <form method="post" action="" class="ceto">
    <input type="search" class="int">
    <input type="submit" class="btn">
    </form>
        </div>  
<div class="sign-in">
    <button type="submit" class="btn2"><a href="">Login</a></button>
    <button type="submit" class="btn2"><a href="">Add to cart : <span> <?php cart_items(); ?>
    </span></a></button>

        </div>
    </div>
<!--
header section end    
-->
   

    
    <div class="row">
    <?php 
    if(!isset($_SESSION['username'])){
    include('userlogin.php');
    }else{
        include('payment.php');
    }
        
        ?>
    
    </div>
    
    </body>
</html>