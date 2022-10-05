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
                        <a class="nav-link" href="#">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
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

    <div class="jumbotron">
  <h1>Vishal-Gallery</h1>
  <p>The Perfect Click</p>
</div>


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
                    <label>social media handle</label>
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

    <body>

    </html