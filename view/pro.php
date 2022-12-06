<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<style>
    #main{
        margin-top: 3rem ;
        margin-left:calc(100% - 85rem) ;
        display: grid;
        grid-template-columns: 400px 400px 400px;
        gap: 3rem;
    }
    .main img{
      width:400px;
    }
    .card-img-top{
      width: 350px;
      height: 250px;
        margin-bottom: 50px;
    }
    .card-img-top:hover{
      transform:scale(1.1);
    }
</style>
</head>
<body>
<h3 style="text-align:center; margin:10px;"><b> Most Selling Product</b></h3>
    <div id="main">
     
 <div class="card" style="width: 350px; border: none; border-bottom: 3px solid #ddd; border-radius: 0%;">
  <img src="e7.jpg" class="card-img-top" alt="Error" width="200px" height="200px" style="border-radius: 0px;">
        <div class="card-body">
          <h5 class="card-title" style="font-weight:bold;">Table</h5>
          <p class="card-text" style="font-weight:bold;">
           This my Most Selling Products on my website</p>
            <h2>₹1500</h2>
          <a href="#" class="btn btn-primary">Buy Now</a>
        </div>
      </div>
      <div class="card" style="width: 350px; border: none; border-bottom: 3px solid #ddd; border-radius: 0%;">
        <img src="e8.jpg" class="card-img-top" alt="Error" width="200px" height="200px"  style="border-radius:0px" >
        <div class="card-body">
          <h5 class="card-title" style="font-weight:bold;">Iphone</h5>
          <p class="card-text" style="font-weight:bold;">
          This my Most Selling Products on my website</p>
            <h2>₹50000</h2>
          <a href="#" class="btn btn-primary">Buy Now</a>
        </div>
      </div>
      <div class="card" style="width: 350px; border: none; border-bottom: 3px solid #ddd; border-radius: 0%;" >
        <img src="e9.jpg" class="card-img-top" alt="Error" width="200px" height="200px" style="border-radius:0px">
        <div class="card-body">
          <h5 class="card-title" style="font-weight:bold;">T-shirt</h5>
          <p class="card-text" style="font-weight:bold;">
          This my Most Selling Products on my website</p>
            <h2>₹1500</h2>
          <a href="#" class="btn btn-primary">Buy Now</a>
        </div>
      </div>
    </div>
</body>
</html>



<?php
include('footer.php');
?>