<?php
include('KISMAT.php');
include('whole.php');
?>

<!docktype html>
<html>
<head>
    <meta charset="utf-8">
    <title>this is my webiste</title>
    <style>
        .header{
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-wrap: wrap;
            background: black;
        }  
        .header img{
            width: 155px;
        }
        
        .call-1{
            flex-basis: 20%;
            margin-left: 30px;
        }
        .call-2{
            flex-basis: 40%;
        }
        .call-3{
            flex-basis: 40%;
            margin-left: -190px;
        }
        .call-2 .int{
            width: 600px;
            margin-left: -160px;
            height: 40px;
            margin-top: 20px;
        }
        .call-2 .intro{
            height: 40px;
            margin-left: -5px;
        }
        .btn{
            width: 160px;
            height: 40px;
            margin-top: 5px;
            background: none;
            border: 2px solid white;
            margin-right: 20px;
            text-align: center;
        }
        .btn a{
            text-decoration: none;
            font-size: 15px;
            color: white;
        }
        .btn:hover{
            background-color: darkorange;
            transition: 0.5s;
        }
        .fit{
            margin-left: 50px;
        }
        /* Slideshow container */
.slideshow-container {
  position: relative;
  margin: auto;
width: 100%;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
        .rows{
        display: flex;
            align-items: center;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .overlay{
        overflow-x: hidden;
        background: rgba(0,0,0,0.5);
        transition: 0.5s;
        width: 0;
        left: 0;
        top: 0;
        height: 100%;
        position: fixed;
        z-index: 1;
        }
        .closebtn{
        position: absolute;
        right: 1220px;
        color: white;
        text-decoration: none;
        font-size: 60px;
        }
        
        .buttler{
        margin-left: -160px;
        }
        .overlay-content{
        width: 250px;
        height: 680px;
        background: white;
        position: relative;
        z-index: 1;
        top: 0;
        left: 0;
        }
        .overlay-content h2{
        font-size: 20px;
        margin-right: -200px;
        margin-top: 20px;
        }
        .overlay-content a{
        text-align: center;
        text-decoration: none;
        font-size: 30px;
        }
        li{
        list-style: none;
        }
        ul{
        margin-left: 50px;
        }
        .heading{
        margin-top: 30px;
        }
        ul li a{
        margin-bottom: 30px;
        }
        .call-2 h1{
        margin-left: -100px;
        }
        .call-6{
        flex-basis: 50%;
        min-width: 300px;
        }
        .call-6 img{
        padding: 25px;
        max-width: 100%;
        }
        .details{
        margin-top: -150px;
        margin-left: -400px;
        }
        .details h2{
        margin-top: -20px;
        }
        .beesho{
        width: 150px;
        height: 30px;
        background: black;
        border: none; 
        }
        .beesho a{
        color: white;
        text-decoration: none;
        }
        .beesho:hover{
        background-color: darkorange;
        transition: 1s;
        }
        
        
        
        
    </style>
    </head>
    <body>
    <!--
    header seaction
-->
    
  <div class="header">
    <div class="call-1">
    <img src="image/img/A%20mighty%20wind.jpg" width="150px" height="40px">  
      </div>
    <div class="call-2">
    <form action="" method="get">
<input type="search" class="int" name="search_int" placeholder="search here">
<input type="submit" class="intro" name="search_btn" value="search">
        </form>  
      </div>
    <div class="call-3">
        <div class="fit">
   <button type="submit" class="btn"><a href="">Login</a></button>   
   <button type="submit" class="btn"><a href="">Add To Cart : <?php cart_items(); ?></a></button> 
   <button type="submit" class="btn"><a href="">Total Price : 0</a></button>   
      </div>
        </div>
    </div>
        
<!--
    hero section
-->
        
    <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="image/img/A%20mighty%20wind.jpg" width="100%" height="500px">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="image/img/best%20in%20show.jpg" width="100%" height="500px">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="image/img/Black%20Adam.jpg" width="100%" height="500px">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
        
        
<!--
    all details section
-->
        
<div class="rows">
        <div class="call-1">
<div class="overlay" id="maynav">
<a href="javascript:void(0)" class="closebtn" onclick="closebtns()">&times;</a>
    <div class="overlay-content">
       
 <ul>
     
      <h2>Our Categories</h2>
         
        
    <?php
   $select_queries="select * from cateogries";
    $result_query=mysqli_query($con,$select_queries);
    while($row_data=mysqli_fetch_assoc($result_query)){
    $categories_id=$row_data['categories_id'];
    $categories_title=$row_data['Product_cate'];
    echo "<li><a href='allproduct.php?categories=$categories_id'>$categories_title</a></li>";
    }
    
     ?>
        </ul>
    <ul>
     
      <h2>Our Brands</h2>
         
<?php
$select_query="select * from brands";
$result_queries=mysqli_query($con,$select_query);
while($row_data=mysqli_fetch_assoc($result_queries)){
$brand_id=$row_data['brands_id'];
$brand_title=$row_data['brands_title'];
    echo "<li><a href='allproduct.php?brand=$brand_id'>$brand_title</a></li>"; 
}
        
        ?>
        </ul>
    </div>
            </div>
<button class="buttler" type="submit" onclick="opennav()">&#9776; Open Sidebar</button>
    </div>
<div class="call-2">
<h1>Our All Product</h1>   
    </div>
        </div>
        
<!--
product section
-->
        <?php
        get_unique_search();
        get_unique_brands();
        get_unique_categories();
        
        ?>
    
        
    <script>
        let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
        </script>
        
        
<script>
        function opennav(){
        document.getElementById("maynav").style.width = "100%";
        } 
 function closebtns(){
        document.getElementById("maynav").style.width = "0%";
        } 
        
        
        </script>
        
    </body>
</html>