<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | FOODY </title>


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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/solid.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/svg-with-js.min.css" rel="stylesheet" />


    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="./css/bootstrap.css">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!---- Header ---->

    <?php include "header.php"; ?>

    <?php

    require "connection.php";

    if (isset($_SESSION["u"])) {

        $email = $_SESSION["u"]["email"];

        $details_rs = Database::search("SELECT * FROM `user` INNER JOIN `gender` ON 
    gender.id=user.gender_id WHERE `email`='" . $email . "'");

        $image_rs = Database::search("SELECT * FROM `profile_image` WHERE `user_email`='" . $email . "'");

        $address_rs = Database::search("SELECT * FROM `user_has_address` INNER JOIN `city` ON 
    user_has_address.city_id=city.id INNER JOIN `district` ON 
    city.district_id=district.id INNER JOIN `province` ON 
    district.province_id=province.id WHERE `user_email`='" . $email . "'");

        $details = $details_rs->fetch_assoc();
        $image_details = $image_rs->fetch_assoc();
        $address_details = $address_rs->fetch_assoc();

    ?>

        <!---- Header ---->

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">F<span class="text-secondary">oo</span>dy</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.html" class="nav-item nav-link">Home</a>
                    <a href="about.html" class="nav-item nav-link">About Us</a>
                    <a href="product.html" class="nav-item nav-link">Products</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="feature.html" class="dropdown-item">Our Features</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link active">Contact Us</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                        <small class="fa fa-search text-body"></small>
                    </a>
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                        <small class="fa fa-user text-body"></small>
                    </a>
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                        <small class="fa fa-shopping-bag text-body"></small>
                    </a>
                </div>
            </div>
        </nav>
        </div>
        <!-- Navbar End -->


        <!-- Page Header Start -->

        <div class="container-fluid page-header d-flex justify-content-start ">
            <div class="row animated animate__fadeInUp">
                <div class="col-10 d-flex justify-content-start align-content-end">
                    <input type="file" class="d-none" id="profileimg" accept="image/*" />
                    <label for="profileimg" class="btn-profile" onclick="changeImage();">
                        <div class="profilepic">

                            <?php

                            if (empty($image_details["path"])) {
                            ?>
                                <img src="img/new_user.svg" class="rounded profilepic__image" id="viewImg" />
                            <?php
                            } else {
                            ?>
                                <img src="<?php echo $image_details["path"]; ?>" class="rounded profilepic__image" id="viewImg" />
                            <?php
                            }

                            ?>
                            <div class="profilepic__content">
                                <span class="profilepic__icon"><i class="fas fa-camera"></i></span>
                                <span class="profilepic__text">Edit Profile</span>
                            </div>
                        </div>
                    </label>
                </div>
                <h4 class="fw-bold profile_name"><?php echo $details["fname"] . " " . $details["lname"]; ?></h4>

            </div>
        </div>
        <!-- Page Header End -->

        <!-- Page Content Start -->
        <div class="container-fluid d-flex justify-content-start wow animated animate__fadeInUp" data-wow-delay="0.5s">
            <div class="col-md-5">
                <div class="p-3 py-5">

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="fw-bold">Profile Settings</h4>
                    </div>

                    <div class="row mt-4">

                        <div class="col-6">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" value="<?php echo $details["fname"]; ?>" />
                        </div>

                        <div class="col-6">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" value="<?php echo $details["lname"]; ?>" />
                        </div>

                        <div class="col-12">
                            <label class="form-label">Mobile</label>
                            <input type="text" class="form-control" value="<?php echo $details["mobile"]; ?>" />
                        </div>

                        <div class="col-12">
                            <label class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" value="<?php echo $details["password"]; ?>" readonly />
                                <span class="input-group-text bg-primary" id="basic-addon2">
                                    <i class="bi bi-eye-slash-fill text-white"></i>
                                </span>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" readonly value="<?php echo $details["email"]; ?>" />
                        </div>

                        <div class="col-12">
                            <label class="form-label">Registered Date</label>
                            <input type="text" class="form-control" readonly value="<?php echo $details["joined_date"]; ?>" />
                        </div>

                        <?php

                        if (!empty($address_details["line1"])) {

                        ?>
                            <div class="col-12">
                                <label class="form-label">Address Line 01</label>
                                <input type="text" class="form-control" value="<?php echo $address_details["line1"]; ?>" />
                            </div>
                        <?php

                        } else {
                        ?>
                            <div class="col-12">
                                <label class="form-label">Address Line 01</label>
                                <input type="text" class="form-control" />
                            </div>
                        <?php
                        }

                        if (!empty($address_details["line2"])) {

                        ?>
                            <div class="col-12">
                                <label class="form-label">Address Line 02</label>
                                <input type="text" class="form-control" value="<?php echo $address_details["line2"]; ?>" />
                            </div>
                        <?php

                        } else {
                        ?>
                            <div class="col-12">
                                <label class="form-label">Address Line 02</label>
                                <input type="text" class="form-control" />
                            </div>
                        <?php
                        }

                        $province_rs = Database::search("SELECT * FROM `province`");
                        $district_rs = Database::search("SELECT * FROM `district`");
                        $city_rs = Database::search("SELECT * FROM `city`");

                        ?>

                        <div class="col-6">
                            <label class="form-label">Province</label>
                            <select class="form-select">
                                <option value="0">Select Province</option>
                                <?php
                                $province_num = $province_rs->num_rows;
                                for ($x = 0; $x < $province_num; $x++) {
                                    $province_data = $province_rs->fetch_assoc();
                                ?>
                                    <option value="<?php echo $province_data["id"]; ?>
                " <?php
                                    if (!empty($address_details["province_id"])) {
                                        if ($province_data["id"] == $address_details["province_id"]) {
                    ?>selected<?php
                                        }
                                    }
                                ?>><?php echo $province_data["name"] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-6">
                            <label class="form-label">District</label>
                            <select class="form-select">
                                <option value="0">Select District</option>
                                <?php
                                $district_num = $district_rs->num_rows;
                                for ($x = 0; $x < $district_num; $x++) {
                                    $district_data = $district_rs->fetch_assoc();
                                ?>
                                    <option value="<?php echo $district_data["id"]; ?>
                " <?php
                                    if (!empty($address_details["district_id"])) {
                                        if ($district_data["id"] == $address_details["district_id"]) {
                    ?>selected<?php
                                        }
                                    }
                                ?>><?php echo $district_data["name"] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-6">
                            <label class="form-label">City</label>
                            <select class="form-select">
                                <option value="">Select City</option>
                                <?php
                                $city_num = $city_rs->num_rows;
                                for ($x = 0; $x < $city_num; $x++) {
                                    $city_data = $city_rs->fetch_assoc();
                                ?>
                                    <option value="<?php echo $city_data["id"]; ?>
                " <?php
                                    if (!empty($address_details["city_id"])) {
                                        if ($city_data["id"] == $address_details["city_id"]) {
                    ?>selected<?php
                                        }
                                    }
                                ?>><?php echo $city_data["name"] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <?php
                        if (!empty($address_details["postal_code"])) {
                        ?>
                            <div class="col-6">
                                <label class="form-label">Postal Code</label>
                                <input type="text" class="form-control" value="<?php echo $address_details["postal_code"]; ?>" />
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="col-6">
                                <label class="form-label">Postal Code</label>
                                <input type="text" class="form-control" />
                            </div>
                        <?php
                        }

                        if (!empty($details["gender_id"])) {

                        ?>
                            <div class="col-12">
                                <label class="form-label">Gender</label>
                                <input type="text" class="form-control" value="<?php echo $details["gender_name"] ?>" readonly />
                            </div>
                        <?php

                        } else {
                        ?>
                            <div class="col-12">
                                <label class="form-label">Gender</label>
                                <input type="text" class="form-control" readonly />
                            </div>
                        <?php
                        }
                        ?>

                        <div class="col-12 d-grid mt-3">
                            <button class="btn btn-primary" onclick="updateProfile();">Update My Profile</button>
                        </div>

                    </div>

                </div>
            </div>


            <div class="row col-md-6 d-none d-lg-block" style="margin-left: 30px;">
                <div class="row">
                    <span class="mt-5 fw-bold text-dark">Articles</span>
                    <div class="col-10">
                        <div class="row border border-primary">

                            <div class="col-12">
                                <div class="row justify-content-center gap-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-10 mt-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="./img/blog-1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">New Hybrid Plants And Their Results</h5>
                                <p class="card-text">Productivity of hybrid plants and how to make plants</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item fw-bold"><i class="fa fa-user text-primary me-2"></i>Admin | Prof.Kalo Fonseka</li>
                                <li class="list-group-item"><i class="fa fa-calendar text-primary me-2"></i>15 Nov, 2022</li>
                                <li class="list-group-item"><i class="bi bi-eye-fill"></i>255 viwes</li>
                            </ul>
                            <div class="card-body bg-dark text-center">
                                <a href="#" class="card-link text-decoration-none text-light">See Post</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php

    } else {

        header("Location:home.php");
    }

        ?>

        <!-- Page Content End -->

        <script src="./js/script.js"></script>

</body>

</html>