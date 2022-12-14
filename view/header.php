<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>index</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="csss/styles.css" rel="stylesheet" />
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


        
        
   
</head>

<body >



  <!--navbar start-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="logoe.png" alt="error" height="60px" width="60px"> Harman</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="pro.php" >Product</a>
          </li>
          
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="pro1.php">Shoes</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>

        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!--navbar end-->
  <!--slider start-->
  <div id="carouselExampleDark"  class="carousel carousel-dark slide" data-bs-ride="carousel"  >

    <div class="carousel-indicators">
      <div class="carousel-indicators">
        <a href="../admin/login.php"> <button type="button" class="btn btn-dark" style="margin-top: 310px; margin: 10px; width:150px; padding:5px;"
          data-bs-slide-to="1" p><h4>Login</h4></button></a>
  
      </div>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div  class="carousel-item active" data-bs-interval="10000">
        <img src="e1.jpg" class="d-block w-100" class="opacity-50" alt="..." height="700px" width="100%">

        <div class="carousel-caption d-none d-md-block" style="margin-bottom:50px; color:#1b1919;text-shadow:1px 1px 2px rgb(213 180 180);">
          <h1 >Shoping site</h1>
          <p>Available many products on this website</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="e2.jpg" class="d-block w-100" alt="..."  height="700px" width="80%">
        <div class="carousel-caption d-none d-md-block" style="margin-bottom:50px; color:#1b1919;text-shadow:1px 1px 2px rgb(213 180 180);">
        <h1 >Shoping site</h1>
          <p>Available many products on this website</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="e3.jpg" class="d-block w-100" alt="..." height="700px" width="100%">
        <div class="carousel-caption d-none d-md-block"style="margin-bottom:50px; color:#1b1919;text-shadow:1px 1px 2px rgb(213 180 180);">
        <h1 >Shoping site</h1>
          <p>Available many products on this website</p>               
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>