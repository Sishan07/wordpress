<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
  <title>Earth</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://kit.fontawesome.com/1c9d15e811.js" crossorigin="anonymous"></script>
</head>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">2rism</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="center">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Catagory</a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Personal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Photo</a>
            </li>
          </ul>


        </div>
      </div>
      <div class="User-pic">
        <div class="profile">
          <p>User Profile</p>
          <h4>Pablo Escobar</h4>
        </div>
        <div class="photo">
          <img src="<?php bloginfo('template_directory') ?>/image/profile.jpg" alt="nvbnvb">
        </div>
      </div>
      </form>
    </div>
  </nav>
  <div class="image">
    <div class="content">
      <h3>Discover The Most Engaging places</h3>
      <button class="button"><i class="fa-solid fa-globe"></i> Explore The Globe In 3D</button>
    </div>
    <div class="container Explore">
      <div class="places">
        <p>Location</p>
        <div class="logo">
          <i class="fa-solid fa-location-dot"></i>
        </div>
        <h3>Explore the Destination</h3>
      </div>
      <div class="places">
        <p> Activity</p>
        <div class="logo">
          <i class="fa-solid fa-bicycle"></i>
        </div>
        <h3> All Activity</h3>
      </div>
      <div class="places">
        <p> When</p>
        <div class="logo">
          <i class="fa-solid fa-calendar-days"></i>
        </div>
        <h3> Choose Date</h3>
      </div>
      <div class="places">
        <p>Guest</p>
        <div class="logo">
          <i class="fa-solid fa-person"></i>
        </div>
        <h3>Choose Guest</h3>
      </div>
      <div class="search places">
        <button type="submit"><i class="fa fa-search"></i></button>
      </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 tour">
      <div class="col">
        <div class="card">
          <img src="<?php bloginfo('template_directory') ?>/image/canada.jpg" class="slides" alt="...">
          <div class="card-body">
            <h5 class="card-title">Canada</h5>
            <p class="card-text">One of the biggest country home to punjabi</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="<?php bloginfo('template_directory') ?>/image/nepal.jpg" class="slides" alt="...">
          <div class="card-body">
            <h5 class="card-title">Nepal</h5>
            <p class="card-text">small tiny nation with beautiful views of himalayas</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="<?php bloginfo('template_directory') ?>/image/brazil.jpg" class="slides" alt="...">
          <div class="card-body">
            <h5 class="card-title">Brazil</h5>
            <p class="card-text">one the biggest country in latin america with beautiful girl</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="<?php bloginfo('template_directory') ?>/image/newzealand.jpg" class="slides" alt="...">
          <div class="card-body">
            <h5 class="card-title">New Zealand</h5>
            <p class="card-text">country with many natural view and one the beautiful to explore</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="<?php bloginfo('template_directory') ?>/image/maldives.jpg" class="slides" alt="...">
          <div class="card-body">
            <h5 class="card-title">Maldives</h5>
            <p class="card-text">best places for white beaches and for honeymoon</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="<?php bloginfo('template_directory') ?>/image/tanzania.jpg" class="slides" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tanzania</h5>
            <p class="card-text">Africa heart and with some speactular jungle views</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>