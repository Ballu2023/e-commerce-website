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
    <button type="submit" class="btn2"><a href="userlogin.php">Login</a></button>
    <button type="submit" class="btn2"><a href="">Add to cart : <span> <?php cart_items(); ?>
    </span></a></button>

        </div>
    </div>
<!--
header section end    
-->
    <div class="cart-items">
    <h1>Shoping Cart Details</h1>
    <form action="" method="post">
    <table>
    <tr>
        <th>Product Title</th>
        <th>Product image</th>
        <th>Quantity</th>
        <th>Total Price</th>
        <th>Remove</th>
        <th>Operation</th>
        </tr>
       <?php
global $con;
$ip = getIPAddress(); 
$total_price=0;
$cart_query="select * from cart_detailss where ip_address='$ip'";
$result_query=mysqli_query($con,$cart_query);
while($row_data=mysqli_fetch_assoc($result_query)){
$product_id=$row_data['product_id'];
$select_product="select * from  product where product_id='$product_id'";
$result_product=mysqli_query($con,$select_product);
while($row_product_price=mysqli_fetch_assoc($result_product)){
$product_price=array($row_product_price['product_price']);
$product_values=$row_product_price['product_price'];
$product_tilte=$row_product_price['product_title'];
$product_images1=$row_product_price['product_image1'];
$product_values=array_sum($product_price);
$total_price+=$product_values;

        ?>
    <tr>
        <td><?php echo $product_tilte ?></td>
        <td><img src="product_images/<?php echo $product_images1 ?> " width="40px" height="50px"> </td>
        <td><input type="number" class="introduer" name="int_box"></td>
        <?php
        $ip = getIPAddress(); 
        if(isset($_POST['update_cart'])){
        $quantity_values=$_POST['int_box'];
        $update_quantities="update cart_detailss set quantity=$quantity_values where ip_address='$ip'";
        $result_products=mysqli_query($con,$update_quantities);
        $total_price=$total_price*$quantity_values;

        }
            ?>
        <td><?php echo $product_values ?></td>
        <td><input type="checkbox" name="removeitems[]" value="<?php $product_id ?>"></td>
        <td>
<!--
        <button type="submit" class="buttler">Update Cart</button>
-->
            <input type="submit" class="buttler" value="Update cart" name="update_cart">
       <!-- <button type="submit" class="buttler">Remove Items</button>-->
         <input type="submit" class="buttler" value="Remove cart" name="remove_cart">
        </td>
        </tr>
<?php }
}
        ?>
    </table>
<div class="total">
    <h1>Sub Total : <?php echo $total_price ?></h1>
    <button type="submit" class="john">Continue Shoping</button>
        <button type="submit" class="john"><a href="checkout.php">Checkout</a></button>
    </div>
    </div>
</form>
    
<!--
 function for remove items   
-->
<?php
function remove_cart_itemsd(){
global $con;
if(isset($_POST['remove_cart'])){
foreach($_POST['removeitems'] as $remove_id){
echo $remove_id;
$delete_query="delete from cart_detailss where product_id=$remove_id";
$run_delete=mysqli_query($con,$delete_query);
if($run_delete){
echo "<script>window.open('cart.php','_self')</script>";
}
}
}
}
 echo $remove_items=remove_cart_itemsd();
    
    ?>
    
    </body>
</html>