<?php
include('KISMAT.PHP');
include('whole.PHP');

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
            width: 500px;
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
        .slideshow{
            width: 100%;
            position: relative;
        }
        .slide img{
            width: 100%;
            height: 500px;
        }
        .arrow{
            position: absolute;
            top: 200px;
            font-size: 40px;
            padding: 10px;
            background: black;
            color: white;
            cursor: pointer;
        }
        .next{
            right: 10px;
        }
        .prew{
            left: 10px;
        }
        .slide{
            display: none;
        }
        .categories{
            background-color: azure;
            padding: 5px;
        }
        .categories h1{
            text-align: center;
            margin-top: 40px;
            font-size: 40px;
        }
        .categories hr{
            width: 17%;
            height: 5px;
            background-color: black;
            margin-top: -20px;
        }
        .row{
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-wrap: wrap;
            padding: 20px;
            background-color: azure;
        }
        .call-1{
            flex-basis: 20%;
            min-width: 250px;
        }
        .call-1 img{
            width: 250px;
            padding-right: -20px;
            border-radius: 30px;
            border: 1px solid black;
        }
        .buttler{
            width: 130px;
            margin-left: 60px;
            margin-top: 10px;
            height: 30px;
            background: black;
            border: none;
            cursor: pointer;
            margin-bottom: 10px;
        }
        .buttler a{
            color: white;
            text-decoration: none;
        }
        .buttler:hover{
            background-color: darkorange;
            transition: 0.5s;
        }
        
        .tab{
            overflow: hidden;
            background: black;
            margin-top: 20px;
        }
        .tab button{
            padding: 14px 16px;
            background: none;
            color: white;
            font-size: 20px;
            float: left;
            border: none;
        }
        .tab button:hover{
            background-color: darkorange;
            transition: 1s;
        }
        .tab button.active{
            background: grey;
        }
        .tab_content{
            display: none;
            margin-left: 25px;
            margin-right: 25px;
            margin-top: 20px;
        }
        .call-4{
            flex-basis: 20%;
            min-width: 250px;
        }
        .call-4 img{
            width: 250px;
            padding-right: -20px;
            border-radius: 30px;
            border: 1px solid black;
        }
        .ultra{
            background: none;
            margin-top: -30px;
            margin-bottom: -20px;
        }
        .meesho{
            margin-left: 400px;
        }
        .flip-box{
            width: 300px;
            height: 200px;
            background: rgba(0,0,0,0.5);
            border: 2px solid black;
            perspective: 1000px;
        }
        .flip-inner{
            width: 100%;
            height: 100%;
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.5s;
        }
        .flip-box:hover .flip-inner{
            transform: rotateY(180deg);
        }
        .flip-front,.flip-back{
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }
        .flip-front{
            color: grey;
            background: rgba(0,0,0,0.5);
        }
        .flip-back{
            transform: rotateY(180deg);
            color: white;
            background: rgba(0,0,0,0.5);
        }
        .flop_movie{
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        .dhoni{
            margin-top: 90px;
            margin-left: 90px;
        }
        .banner{
            margin-top: 20px;
        }
        .meta{
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .caller{
            flex-basis: 50%;
        }
        .wish img{
            margin-bottom: 20px;
        }
        .images{
            margin-top: -20px;
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
    <form action="" method="post">
<input type="search" class="int" name="search_int" placeholder="search here">
<input type="submit" class="intro" name="search_btn" value="search">
        </form>  
      </div>
    <div class="call-3">
        <div class="fit">
   <button type="submit" class="btn"><a href="">Login</a></button>   
   <button type="submit" class="btn"><a href="">Add To Cart : <?php cart_items(); ?></a></button> 
   <button type="submit" class="btn"><a href="">Total Price : <?php total_cart_price(); ?></a></button>   
      </div>
        </div>
    </div>
    
<!--
header section end
-->
    
<!--
    slider section start
-->
    
    <div class="slideshow">
<div class="slide">
    <img src="image/img/A%20mighty%20wind.jpg" width="100%" height="500px">
        </div>
<div class="slide">
    <img src="image/img/best%20in%20show.jpg" width="100%" height="500px">
        </div>
<div class="slide">
    <img src="image/img/Black%20Adam.jpg" width="100%" height="500px">
        </div>
<div class="slide">
    <img src="image/img/Black%20Panther%202.jpg" width="100%" height="500px">
        </div>
<div class="slide">
    <img src="image/img/Bob%20Roberts.jpg" width="100%" height="500px">
        </div>
<span class="prew arrow" onclick="control(-1)">&#10094;</span>
<span class="next arrow" onclick="control(1)">&#10095;</span>
    </div>
    
<!--
slier section end
-->
    
    <div class="categories">
    <h1>Our Categories</h1>
    <hr>
    </div>
<div class="row">
    <div class="call-1">
    <img src="image/img/A%20mighty%20wind.jpg">
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
     <div class="call-1">
    <img src="image/img/best%20in%20show.jpg">
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
     <div class="call-1">
    <img src="image/img/Black%20Adam.jpg">
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
     <div class="call-1">
    <img src="image/img/Black%20Panther%202.jpg">
    <button type="submit" class="buttler"><a href="">View More</a></button>

    </div>
    </div>
    
<!--
    tab section
-->
    
<!--
    banner section
-->
    
<div class="banner">
    <img src="image/img/Black%20Panther%202.jpg" width="100%" height="400px">
    </div>
    
 <div class="categories ultra">
    <h1>Our Latest Fashion</h1>
    <hr>
    </div> 
    <div class="tab">
    <div class="meesho">
<button type="submit" class="tablink" onclick="opencity(event,'paris')">New Arrival</button>
<button type="submit" class="tablink" onclick="opencity(event,'new_york')">Gents Wear</button>
<button type="submit" class="tablink" onclick="opencity(event,'london')">Lades Wear</button>
<button type="submit" class="tablink" onclick="opencity(event,'tokyo')">Kids Wear</button>
<button type="submit" class="tablink" onclick="opencity(event,'shreeharikota')">New Born Baby</button>
        </div>
    </div>
    
<div class="tab_content" id="paris">
<div class="row">
    <div class="call-4">
   <img src="image/img/Welcome.jpg"> 
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    <div class="call-4">
   <img src="image/img/Triangle%20of%20sadness.jpg">
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    <div class="call-4">
   <img src="image/img/The%20Menu.jpg"> 
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    <div class="call-4">
   <img src="image/img/super%20mario%20bros.jpg"> 
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    </div>
<div class="row">
    <div class="call-4">
   <img src="image/img/Welcome.jpg"> 
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    <div class="call-4">
   <img src="image/img/Triangle%20of%20sadness.jpg">
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    <div class="call-4">
   <img src="image/img/The%20Menu.jpg"> 
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    <div class="call-4">
   <img src="image/img/super%20mario%20bros.jpg">
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    </div>
<div class="row">
    <div class="call-4">
   <img src="image/img/Welcome.jpg"> 
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    <div class="call-4">
   <img src="image/img/Triangle%20of%20sadness.jpg">
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    <div class="call-4">
   <img src="image/img/The%20Menu.jpg"> 
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    <div class="call-4">
   <img src="image/img/super%20mario%20bros.jpg"> 
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    </div>

    </div>
<div class="tab_content" id="new_york">
    <div class="row">
    <div class="call-4">
   <img src="image/img/Welcome.jpg"> 
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    <div class="call-4">
   <img src="image/img/Triangle%20of%20sadness.jpg">
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    <div class="call-4">
   <img src="image/img/The%20Menu.jpg"> 
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    <div class="call-4">
   <img src="image/img/super%20mario%20bros.jpg"> 
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    </div>
    </div>
<div class="tab_content" id="london">
   <div class="row">
    <div class="call-4">
   <img src="image/img/Welcome.jpg"> 
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    <div class="call-4">
   <img src="image/img/Triangle%20of%20sadness.jpg">
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    <div class="call-4">
   <img src="image/img/The%20Menu.jpg"> 
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    <div class="call-4">
   <img src="image/img/super%20mario%20bros.jpg"> 
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    </div>
    </div>
<div class="tab_content" id="tokyo">
   <div class="row">
    <div class="call-4">
   <img src="image/img/Welcome.jpg"> 
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    <div class="call-4">
   <img src="image/img/Triangle%20of%20sadness.jpg">
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    <div class="call-4">
   <img src="image/img/The%20Menu.jpg"> 
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    <div class="call-4">
   <img src="image/img/super%20mario%20bros.jpg"> 
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    </div>
    </div>
<div class="tab_content" id="shreeharikota">
    <div class="row">
    <div class="call-4">
   <img src="image/img/Welcome.jpg"> 
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    <div class="call-4">
   <img src="image/img/Triangle%20of%20sadness.jpg">
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    <div class="call-4">
   <img src="image/img/The%20Menu.jpg"> 
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    <div class="call-4">
   <img src="image/img/super%20mario%20bros.jpg"> 
    <button type="submit" class="buttler"><a href="">View More</a></button>
    </div>
    </div>
    </div>
    
<!--
    our top brand
-->
    <div class="categories ultra">
    <h1>Our Top Brands</h1>
    <hr>
    </div> 
<div class="flop_movie">
<div class="flip-box">
<div class="flip-inner">
<div class="flip-front">
<img src="image/img/A%20mighty%20wind.jpg" width="300px" height="200px">
    </div>
<div class="flip-back">
    <button type="submit" class="buttler dhoni"><a href="">View More</a></button>    
    </div>
    </div>
    </div>
<div class="flip-box">
<div class="flip-inner">
<div class="flip-front">
<img src="image/img/A%20mighty%20wind.jpg" width="300px" height="200px">
    </div>
<div class="flip-back">
    <button type="submit" class="buttler dhoni"><a href="">View More</a></button>    
    </div>
    </div>
    </div>
<div class="flip-box">
<div class="flip-inner">
<div class="flip-front">
<img src="image/img/A%20mighty%20wind.jpg" width="300px" height="200px">
    </div>
<div class="flip-back">
    <button type="submit" class="buttler dhoni"><a href="">View More</a></button>    
    </div>
    </div>
    </div>
<div class="flip-box">
<div class="flip-inner">
<div class="flip-front">
<img src="image/img/A%20mighty%20wind.jpg" width="300px" height="200px">
    </div>
<div class="flip-back">
    <button type="submit" class="buttler dhoni"><a href="">View More</a></button>    
    </div>
    </div>
    </div>
   </div> 
    
<!--
    new banner section
-->
    
    <div class="row">
<div class="caller">
      <img src="image/img/A%20mighty%20wind.jpg" width="700px" height="430px" class="images">  
        </div>
<div class="caller">
    <div class="meta">
    <div class="wish">
     <img src="image/img/best%20in%20show.jpg" width="200px" height="200px">   
        </div>
    <div class="wish">
     <img src="image/img/best%20in%20show.jpg" width="200px" height="200px">   
        </div>
    <div class="wish">
    <img src="image/img/best%20in%20show.jpg" width="200px" height="200px">  
        </div>
    </div>  
    <div class="meta">
    <div class="wish">
     <img src="image/img/best%20in%20show.jpg" width="200px" height="200px">   
        </div>
    <div class="wish">
     <img src="image/img/best%20in%20show.jpg" width="200px" height="200px">   
        </div>
    <div class="wish">
     <img src="image/img/best%20in%20show.jpg" width="200px" height="200px">   
        </div>
    </div>  
        </div>
    </div>
    
<script>
    var flag = 0;
    
    function control(x){
        flag = flag + x;
        slideshow(flag);
    }
    
    slideshow(flag);
    function slideshow(nope){
    var txt = document.getElementsByClassName("slide");
        
    if(nope == txt.length){
        flag = 0;
        nope = 0;
    }
    if(nope < 0){
        flag = txt.length-1;
        nope = txt.length-1;
    }
        
    for(let y of txt){
        y.style.display = "none";
    }
     txt[nope].style.display = "block";   
    
        
    }
    
    </script>
    
<!--
    tab section ja
-->
    <script>
    function opencity(event,cityname){
        var i,tab_content,tablink;
    
   tab_content = document.getElementsByClassName("tab_content");
    for(i = 0; i < tab_content.length; i++){
    tab_content[i].style.display = "none";
    }
    tablink = document.getElementsByClassName("tablink");
    for(i = 0; i < tablink.length; i++){
    tablink[i].className = tablink[i].className.replace ("active", "");
    }
        
    document.getElementById(cityname).style.display = "block";
    event.currentTarget.className += " active";
        
    

        
    }
    
    
    
    </script>
    
    
    </body>
</html>