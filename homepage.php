<?php 

session_start();

if(!isset($_SESSION['logged_in'])) {
  header("Location: index.php");  
}
      
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
  <title>JC UY</title>
  <link href="styles.css" rel="stylesheet" />
</head>
<body> 
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav" style="background-color: rgb(51 136 200) !important;">
      <div class="container">
          <a class="navbar-brand text-white" href="#page-top"><h3>Welcome To My Website</h3></a>
          <button class="navbar-toggler text-uppercase font-weight-bold text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ms-auto">
                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#introduction"><h5>Introduction</h5></a></li>
                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about"><h5>About Me</h5></a></li>
                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="logout.php"><h5>Log out</h5></a></li>
              </ul>
          </div>
      </div>
  </nav> 
    <div class="main-wrapper">
      <div id="overlay">
        <div class="section right col-xs-9">
          <img class="masthead-avatar mb-5" src="image/jcpic.png" alt="..." />
          <p class="text-white mb-0">I Am Junrey Carlo Uy This is My Website
            </p> 
        </div>
      </div>
    </div>

    <div class="main-wrapper1" id="introduction">
      <div class="container" style="padding-top: 7%; width: 100%;">
        <div class="row">
          <div class=" col-4 text-center text-white" style="padding-top: 10%;">
            <p class="lead">I am Junrey Carlo Uy and Im 2nd year College Associate Computer Technology (ACT) at Saint Louie College Valenzuela 

 </p>
            

          </div>

          <div class="col-8">
            <div class="container row" style="width: 100%; padding: 1%;">
              <div class="col-md-8 col-sm-12 co-xs-12 text-center">
                <div class="box">
                  <img class="img-fluid rounded mx-auto d-block img-thumbnail" src="image/a3.jpg" style="max-height: 710px;">
                </div>
              </div>
              <div class="col-md-4 col-sm-12 co-xs-12">
                <div class="box">
                  <img class="img-fluid rounded mx-auto d-block img-thumbnail" src="image/a1.jpg" style="max-height: 710px;">
                </div>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main-wrapper1" id="about">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/h1.jpg" class="d-block w-100" alt="..." style="max-height: 950px;">
            <div class="carousel-caption d-none d-md-block">
              <h5>My Hobbies</h5>
              <p> Playing Computer,
                  Playing basketball,
                  Eating alot but its time to diet uuwuu
                  Roadtrip but hate trafic and allways ride safe .</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image/g1.jpg" class="d-block w-100" alt="..." style="max-height: 950px;">
            <div class="carousel-caption d-none d-md-block">
              <h5>My Girlfriend and I</h5>
              <p>This is my girlfriend and lovely charming sweet and chubby
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image/h2.jpg" class="d-block w-100" alt="..." style="max-height: 950px;">
            <div class="carousel-caption d-none d-md-block">
              <h5>My Travel 
              </h5>
              <p>
                I Travel in Aurora Dingalan 
                Tagaytay
                Rizal 
                Kaybiang Tunnel
                Batangas
                Bohol
                .</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image/h3.jpg" class="d-block w-100" alt="..." style="max-height: 950px;">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5><p>
                My Girlfriend's Family
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image/h4.jpg" class="d-block w-100" alt="..." style="max-height: 950px;">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p>My Classmate and Friends
              </p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </div>

    
  
  
  

  <style>
  .main-wrapper {
    height: 100vh;  
    background-image:url(https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/bbefa799786133.5efa9bf3d1b49.gif);
    background-repeat: no-repeat;
    background-size: cover; 
  }
  .main-wrapper1 {
    height: 100vh;  
    background-color: cadetblue;
    width: 100%; 
  }

  .section {
    height: 100%;  
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .col1 {
    justify-content: center;
    align-items: center;
            
  }
  #overlay {
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.6); /* Black background with opacity */
  }
  h5{
    color: white;
  }
  p {
    font-weight: bold;
    font-size: 40px;
    background-color: rgba(0, 0, 0, 0.6);
  }
  #main-wrapper1 {
    height: 100vh;  

  }
  </style>     
   
</body>
</html>
