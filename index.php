<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viweport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin Sans">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Vishal-Gallery</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php">Contact</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cc10.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/cc1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/cc2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
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



    <!-- <section class="my-5">
        <div class="py-5">
            <h3 class="text-center">About Us</h3>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/cc4.jpg" class="img-fluid aboutimg">
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">
                        I am Vishal-Gallery
                    </h2>
                    <p class="py-4">
                        Massive glaciers, staggering mountains, plains dotted with wild animals: Our planet sure is
                        incredible. In fact, when looking at the most beautiful places in the world, it can feel
                        impossible to decide where to visit next. The islands of Southeast Asia? The deserts of the
                        Middle East? How about the countless travel-worthy sites right here in the United States?
                    </p>
                    <p class="py-4">While pinpointing all of Mother Nature’s greatest hits could take a lifetime, we
                        think these 51 staggering landscapes and awe-inspiring wonders—from Antarctica to Zimbabwe—need
                        to move to the very top of your travel list. Whether you’re looking for beaches, forests, or
                        national parks, you’re sure to find you new favorite destination below. </p>
                    <a href="about.php" class="btn btn-success"> Check More <a>
                </div>

            </div>
        </div>
    </section> -->

    <section class="my-5">
        <div class="py-5">
            <h3 class="text-center">Our Services</h3>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card">
                        <img class="card-img-top" src="images/cc6.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">tushar chobey</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card">
                        <img class="card-img-top" src="images/cc8.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">aditi chaudhary</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card">
                        <img class="card-img-top" src="images/cc9.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">vikas singh</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Our Gallery</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/cc12.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/cc13.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/cc16.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/cc18.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/cc14.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/cc21.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/cc22.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/cc20.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/cc19.jpg" class="img-fluid pb-4">
                </div>

            </div>
        </div>

    </section>


    <section class="my-5">
        <div class="py-5">
            <h3 class="text-center">About Us</h3>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/cc4.jpg" class="img-fluid aboutimg">
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">
                        I am Vishal-Gallery
                    </h2>
                    <p class="py-4">
                        Massive glaciers, staggering mountains, plains dotted with wild animals: Our planet sure is
                        incredible. In fact, when looking at the most beautiful places in the world, it can feel
                        impossible to decide where to visit next. The islands of Southeast Asia? The deserts of the
                        Middle East? How about the countless travel-worthy sites right here in the United States?
                    </p>
                    <p class="py-4">While pinpointing all of Mother Nature’s greatest hits could take a lifetime, we
                        think these 51 staggering landscapes and awe-inspiring wonders—from Antarctica to Zimbabwe—need
                        to move to the very top of your travel list. Whether you’re looking for beaches, forests, or
                        national parks, you’re sure to find you new favorite destination below. </p>
                    <a href="about.php" class="btn btn-success"> Check More <a>
                </div>

            </div>
        </div>
    </section>



    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Contact Us</h2>
        </div>

        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label>user</label>
                    <input type="text" name="user" autocomplete="off" class="form-control">

                </div>


                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" autocomplete="off" class="form-control">

                </div>


                <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" name="mobile" autocomplete="off" class="form-control">

                </div>


                <div class="form-group">
                    <label>comment</label>
                    <!-- <input type="text" name="User" autocomplete="off" class="form-control"> -->
                    <textarea class="form-control" name="comment"></textarea>
                </div>

                <div class="form-group">
                    <label>social meida handle</label>
                    <input type="text" name="pay" autocomplete="off" class="form-control">

                </div>

                <button type="submit" class="btn btn-success">submit</button>

            </form>


        </div>
    </section>





    <footer>
        <p class="p-3 bg-dark text-white text-center">
            @vishalgalleryproduction
        </p>
    </footer>







    <script src="https://ajax.googleapis.com/ajax/libs/jquery/4.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>