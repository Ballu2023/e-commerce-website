<!docktype html>
<html>
<head>
    <meta charset="utf-8">
    <title>admin_area</title>  
    <style>
        body{
background-color: azure;       
        }
        .container{
        padding: 15px;
        }
        .meta{
        background: grey;
        }
        .metro{
        text-align: center;
        }
        .metro h2{
        font-size: 35px;
        }
        .xyz{
        padding: 25px;
            margin-left: 50px;
        }
        .btn{
        padding: 14px 16px;
        background: black;
            border: none;
            margin-left: 5px;
            border-radius: 5px;
        }
        .btn:hover{
        background: none;
        transition: 0.5s;
        }
        .btn a{
        color: white;
        text-decoration: none;
        font-weight: 800;
        font-size: 12px;
        }
        .abc{
        padding: 5px;
        background-color: darkseagreen;
        }
    </style>
    </head>
<body>
    <!--first child-->
    <div class="meta">
   <div class="container">
<img src="image/img/A%20mighty%20wind.jpg" width="100px" height="50px">
    </div> 
    </div>
    
    <!--second child-->
<div class="metro">
    <h2>Manager details</h2>
    </div>
    
<!--third section-->
    
    <div class="abc">
<div class="xyz">
<button  class="btn"><a href="admin.php?product_id" class="nav-link">insert product</a></button>
<button  class="btn"><a href="" class="nav-link">view product</a></button>
<button  class="btn"><a href="admin.php?insert_catepgries" class="nav-link">insert cateogries</a></button>
<button type="submit" class="btn"><a href="" class="nav-link">view cateogries</a></button>
<button type="submit" class="btn"><a href="admin.php?insert_brands" class="nav-link">insert brand</a> </button>
<button type="submit" class="btn"><a href="" class="nav-link">view brand</a></button>
<button type="submit" class="btn"><a href="" class="nav-link">all order</a></button>
<button type="submit" class="btn"><a href="" class="nav-link">all payment</a></button>
<button type="submit" class="btn"><a href="" class="nav-link">list user</a></button>
<button type="submit" class="btn"><a href="" class="nav-link">logout</a></button>
        </div>
    </div>
    
    
<!--fourth section-->
    <div class="thunder">
    <?php
        if(isset($_GET["insert_catepgries"])){
        include("CATEGORIES.PHP");
        };
        if(isset($_GET["insert_brands"])){
        include("brands.php");
        };
        if(isset($_GET["product_id"])){
        include("FORM.php");
        };
      ?>  
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>