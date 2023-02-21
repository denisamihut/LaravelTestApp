<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"/>

</head>
<body class="antialiased">
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-warning">
    <button class="navbar-toggle" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        </ul>
    </div>
    <div class="d-flex align-items-center">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Booking</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Admin</a></li>
        </ul>
    </div>
</nav>

<div class="row wrapper mt-5 mx-3">
    <div class="col-sm-12 col-md-5 col-lg-3  mt-3">
        <div class="side-content d-block">
            <h3 class="text-warning mt-3 "><b>TOP RATED HOTELS</b></h3>
            <div class="card mb-3 p-4">
                <p class="text-dark"><b>Belmont Plaza</b></p>
                <span class="fa fa-star checked "></span>
                <span class="fa fa-star checked"></span>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-7 col-lg-9 mt-3 ">

        <div class="card-section text-center">
            <div class="card mx-2  align-top">
                <img class="zoom hotel  my-3" src="assets/img/frontend/hotel1.jpg" alt="regal">
                <a class="d-block text-dark text-decoration-none"><b>HOTEL ROYAL</b></a>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <button type="button" class="btn btn-primary"><a class="text-white text-decoration-none"
                                                                 href="book.php">More</a></button>
            </div>


        </div>
    </div>
</div>
<hr class="pt-4">
<footer class="text-lg-start text-center bg-white my-5 ">
    <div class="container">
        <h2 class="text-dark my-5 text-center">If you're looking for a place that feels like home, you are in the
            right place!</h2>

        <div class="row">
            <div class="col-lg-12 text-center">
                <ul class="links  text-decoration-none list-unstyled d-inline pb-5">
                    <li class="d-inline"><a class="link text-dark text-decoration-none fs-6" href=" #">TERMS OF
                            USE</a></li>
                    <li class="d-inline"><a class="link text-dark text-decoration-none fs-6" href="#">GUIDELINES</a>
                    </li>
                    <li class="d-inline"><a class="link text-dark text-decoration-none fs-6" href=" #">PRIVACY
                            POLICY</a></li>
                    <li class="d-inline  pt-3 ">Copyright &copy 2018-2021, ZZZ Booking.</li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
