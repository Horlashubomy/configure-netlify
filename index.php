<!DOCTYPE html>
<html lang="en">
<head>
    <title>Photo Gallery </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar"> 
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Photo Gallery</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
       
        <ul class="nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                Categories
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#Nature">Nature</a></li>
                <li><a class="dropdown-item" href="#Travel">Travel</a></li>
                <li><a class="dropdown-item" href="#Architecture">Architecture</a></li>
                <li><a class="dropdown-item" href="#Love">Love</a></li>
                <li><a class="dropdown-item" href="#Wildlife">Wildlife</a></li>
                <li><a class="dropdown-item" href="#Science and Technology">Science and Technology</a></li>
            </ul>
        </li>
    </ul>

      <li class="nav-item">
          <a class="nav-link" href="#Contact Us">Contacts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#About">About</a>
        </li>
      
  </div>
</nav>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner" id="images">
    <div class="carousel-item active">
      <img src="images/nature/nature_4.jpg"  class="d-block w-100" alt="Nature">
      <div class="carousel-caption d-none d-md-block">
        <h2>Nature</h2>
       <h5> <p>"Nature is not a place to visit, it is home." –Gary Snyder</p> </h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/Travel/Travel_1.jpg" class="d-block w-100" alt="Travel">
      <div class="carousel-caption d-none d-md-block">
        <h3>Travel</h3>
        <p>"One's destination is never a place, but a way of seeing new things" - Henry Miller</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/Architecture/Architecture_6.jpg" class="d-block w-100" alt="Architecture">
      <div class="carousel-caption d-none d-md-block">
        <h3>Architecture</h3>
        <p>Architecture starts when you carefully put two bricks together. There it begins</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/Love/love_4.jpg" class="d-block w-100" alt="Love">
      <div class="carousel-caption d-none d-md-block">
        <h3>Love</h3>
        <p>“I saw that you were perfect, and so I loved you. Then I saw that you were not perfect and I loved you even more.” - Angelina Lim</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/Wildlife/Wildlife_12.jpg" class="d-block w-100" alt="Wildlife">
      <div class="carousel-caption d-none d-md-block">
        <h3>Wildlife</h3>
   <p>"Each species is a masterpiece, a creation assembled with extreme care and genius"- Edward O Wilson</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="images/Science/Science_5.jpg" class="d-block w-100" alt="Science">
      <div class="carousel-caption d-none d-md-block">
        <h3>Science and Technology</h3>
        <p>"The science of today is the technology of tomorrow" - Edward Teller</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<a id="Nature">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Nature</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/nature/nature_7.jpg" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/nature/nature_9.jpg" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/nature/nature_11.jpg" class="img-fluid pb-3">
  </div>
  </div>
  </div>
</section>
</a>

<a id="Travel">
</a>
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Travel</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/travel/Travel_8.jpg" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/travel/Travel_10.jpg" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/travel/Travel_12.jpg" class="img-fluid pb-3">
  </div>
  </div>
  </div>
</section>
</a>

<a id="Architecture">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Architecture</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/architecture/Architecture_2.jpg" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/architecture/Architecture_5.jpg" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/architecture/Architecture_9.jpg" class="img-fluid pb-3">
  </div>
  </div>
  </div>
</section>
</a>

<a id="Love">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Love</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/Love/love_3.jpg" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/Love/love_7.jpg" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/Love/love_8.jpg" class="img-fluid pb-3">
  </div>
  </div>
  </div>
</section>
</a>

<a id="Wildlife">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Wildlife</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/Wildlife/Wildlife_2.jpg" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/Wildlife/Wildlife_14.jpg" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/Wildlife/Wildlife_3.jpg" class="img-fluid pb-3">
  </div>
  </div>
  </div>
</section>
</a>

<a id="Science and Technology">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Science and Technology</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/Science/Science_6.jpg" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/Science/Science_7.jpg" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/Science/Science_4.jpg" class="img-fluid pb-3">
  </div>
  </div>
  </div>
</section>
</a>

<a id="Contact Us">
  <section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Contact Us</h2>
  </div>

  <div class="w-50 m-auto">
    <form action="about.php" method="post">
      <div class="form-group">
        <label>Name:</label>
        <input type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
        <label>Email:</label>
        <input type="email" name="email" class="form-control">
      </div>
      <div class="form-group">
        <label>Number:</label>
        <input type="text" name="number" class="form-control">
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
  </section>
  </a>

  <a id="About">
  <section class="my-4">
  <div class="py-4">
    <h2 class="text-center">About</h2>
    <div class="container-fluid">
      <p class="text-center"><b>I am an Undergraduate student currently learning how to develop a website. I am very passionate and my aim is to become a world-class programmer.</b></p>
    </div>
  </div>
  </section>
  </a>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>