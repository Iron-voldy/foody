<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | FOODY</title>

    <!-- Favicon -->
    <link href="img/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="./css/bootstrap.css">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->

    <?php include "header.php"; ?>


    <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="fw-bold text-primary m-0">F<span class="text-secondary">oo</span>dy</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link text-danger">Home</a>
                <a href="about.php" class="nav-item nav-link">About Us</a>
                <a href="services.php" class="nav-item nav-link">Services</a>
                <a href="contact.html" class="nav-item nav-link">Contact Us</a>
            </div>
        </div>
    </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/home-cursole1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <h1 class="display-2 animated animate__backInDown text-light fw-bold d-flex justify-content-center" style="text-shadow: 0px 0px 8px black; font-size: 80px;"> WELCOME TO F<span class="text-primary">oo</span>dy</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/home-cursole2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h1 class="display-2 mb-5 animated slideInDown fw-bold fs-1" style="text-shadow: 0 0 10px Black;">The Foundation That Brings <span class="text-danger"> Technology</span> From The <span class="text-info"> City</span> To The <span class="text-info">Village </span></h1>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Farmers Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="img/farmer.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4 about-short-txt text-danger">Be A Seller </h1>
                    <p class="mb-4 fw-bold">You Can Be A Good Seller With Us. Why Are You Late? Join And Make Your Future With Us </p>
                    <p><i class="fa fa-check text-primary me-3"></i>Organic fertilizers at subsidized prices</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Technical assistance and expert knowledge to cultivate </p>
                    <p><i class="fa fa-check text-primary me-3"></i>Easy loan relief</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="about.php">Be a Farmer</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Farmers End -->

    <!-- Products Start -->


    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Our Products</h1>
                        <p>See our trending Products and more details about products.</p>
                    </div>
                </div>

                <?php

                require "connection.php";
                $c_rs = Database::search("SELECT * FROM `category`");
                $c_num = $c_rs->num_rows;

                for ($y = 0; $y < $c_num; $y++) {

                    $c_data = $c_rs->fetch_assoc();

                ?>
                    <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill" href="#tab-1"><?php echo $c_data["name"]; ?></a>
                            </li>
                        </ul>
                    </div>


                    <div class="col-12 mb-3">
                            <div class="row border border-primary">

                                <div class="col-12">
                                    <div class="row justify-content-center gap-2">

                                        <?php

                                        $product_rs = Database::search("SELECT * FROM `product` WHERE `category_id`='" . $c_data["id"] . "' AND 
                                    `status_id`='1' ORDER BY `datetime_added` DESC LIMIT 4 OFFSET 0");

                                        $product_num = $product_rs->num_rows;

                                        for ($z = 0; $z < $product_num; $z++) {
                                            $product_data = $product_rs->fetch_assoc();
                                        ?>

                                            <div class="card col-6 col-lg-2 mt-2 mb-2" style="width: 18rem;">

                                                <?php

                                                $image_rs = Database::search("SELECT * FROM `images` WHERE `product_id`='" . $product_data["id"] . "'");
                                                $image_data = $image_rs->fetch_assoc();

                                                ?>

                                                <img src="<?php echo $image_data["code"]; ?>" class="card-img-top img-thumbnail mt-2" style="height: 180px;" />
                                                <div class="card-body ms-0 m-0 text-center">
                                                    <h5 class="card-title fw-bold fs-6"><?php echo $product_data["title"]; ?></h5>
                                                    <span class="badge rounded-pill text-bg-info">New</span><br/>
                                                    <span class="card-text text-primary">Rs. <?php echo $product_data["price"]; ?> .00</span><br />
                                                    <?php

                                                    if ($product_data["qty"] > 0) {

                                                    ?>

                                                        <span class="card-text text-warning fw-bold">In Stock</span><br />
                                                        <span class="card-text text-success fw-bold"><?php echo $product_data["qty"]; ?> Items Available</span><br /><br />
                                                        <a href='<?php echo "singleProductView.php?id=" . ($product_data["id"]); ?>' class="col-12 btn btn-success">Buy Now</a>
                                                        <button class="col-12 btn btn-dark mt-2" onclick="addToCart(<?php echo $product_data['id']; ?>);">
                                                            <i class="bi bi-cart-plus-fill text-white fs-5"></i>
                                                        </button>

                                                    <?php

                                                    } else {

                                                    ?>

                                                        <span class="card-text text-danger fw-bold">Out of Stock</span><br />
                                                        <span class="card-text text-danger fw-bold">00 Items Available</span><br /><br />
                                                        <button class="col-12 btn btn-success disabled">Buy Now</button>
                                                        <button class="col-12 btn btn-dark mt-2 disabled">
                                                            <i class="bi bi-cart-plus-fill text-white fs-5"></i>
                                                        </button>

                                                    <?php

                                                    }

                                                    $watchlist_rs = Database::search("SELECT * FROM `watchlist` WHERE `product_id`='" . $product_data["id"] . "' AND 
                                                    `user_email`='" . $_SESSION["u"]["email"] . "'");
                                                    $watchlist_num = $watchlist_rs->num_rows;

                                                    if ($watchlist_num == 1) {
                                                    ?>
                                                        <button class="col-12 btn btn-outline-light mt-2 border border-primary" 
                                                        onclick='addToWatchlist(<?php echo $product_data["id"]; ?>); '>
                                                            <i class="bi bi-heart-fill text-danger fs-5" id="heart<?php echo $product_data["id"]; ?>"></i>
                                                        </button>
                                                    <?php
                                                    }else{
                                                        ?>
                                                        <button class="col-12 btn btn-outline-light mt-2 border border-primary" 
                                                        onclick='addToWatchlist(<?php echo $product_data["id"]; ?>); '>
                                                        <i class="bi bi-heart-fill text-dark fs-5" id="heart<?php echo $product_data["id"]; ?>"></i>
                                                    </button>
                                                        <?php
                                                    }

                                                    ?>

                                                    
                                                </div>
                                            </div>

                                        <?php
                                        }

                                        ?>

                                    </div>
                                </div>

                            </div>
                        </div>
            </div>
        </div>
    </div>

<?php

                }

?>

<!-- Products Start -->


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<script src="./js/script.js"></script>
</body>

</html>