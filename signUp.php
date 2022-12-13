<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foody|Log in or Sign up</title>

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

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="./css/bootstrap.css">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
</head>

</head>

<body>

    <div class="signup-div">
        <div class="container-fluid vh-100 d-flex justify-content-center">
            <div class="row align-content-center">

                <!-- header -->

                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <img src="./img/logo.png" alt="" class="logo">
                        </div>
                        <div class="col-12">
                            <p class="text-center title01 fw-bold" style="margin-top: -30px;">Hi, Welcome to F<span class="text-primary title01 fw-bold">oo</span>dy</p>
                        </div>
                    </div>
                </div>

                <!-- header -->

                <!-- content -->

                <div class="col-12 p-3">
                    <div class="row">

                        <div class="col-6 d-none d-lg-block background"></div>
                        <!-- signupbox -->

                        <div class="col-12 col-lg-6" id="signUpBox">
                            <div class="row g-2">

                                <div class="col-12">
                                    <p class="title02">Create New Account</p>
                                </div>

                                <div class="col-12 d-none" id="msgdiv">
                                    <div class="alert alert-danger" role="alert" id="msg">

                                    </div>
                                </div>

                                <div class="col-6">
                                    <label class="form-label fw-bold">First Name</label>
                                    <input type="text" class="form-control" placeholder="ex:- Hasindu" id="fname" />
                                </div>

                                <div class="col-6">
                                    <label class="form-label fw-bold">Last Name</label>
                                    <input type="text" class="form-control" placeholder="ex:- Theekshana" id="lname" />
                                </div>

                                <div class="col-12">
                                    <label class="form-label fw-bold">Email</label>
                                    <input type="email" class="form-control" placeholder="ex:- hasindu@gmail.com" id="email" />
                                </div>

                                <div class="col-12">
                                    <label class="form-label fw-bold">Password</label>
                                    <input type="password" class="form-control" placeholder="ex:- **********" id="password" />
                                </div>

                                <div class="col-6">
                                    <label class="form-label fw-bold">Mobile</label>
                                    <input type="text" class="form-control" placeholder="ex:- 0771234568" id="mobile" />
                                </div>

                                <div class="col-6">
                                    <label class="form-label fw-bold">Gender</label>
                                    <select class="form-control" id="gender">

                                        <?php

                                        require "connection.php";

                                        $rs = Database::search("SELECT * FROM `gender`");

                                        $n = $rs->num_rows;

                                        for ($x = 0; $x < $n; $x++) {
                                            $d = $rs->fetch_assoc();

                                        ?>

                                            <option value="<?php echo $d["id"]; ?>"><?php echo $d["gender_name"]; ?></option>

                                        <?php

                                        }

                                        ?>

                                    </select>
                                </div>

                                <div class="col-12 col-lg-6 d-grid">
                                    <button class="btn btn-primary" onclick="signUp();">Sign Up</button>
                                </div>

                                <div class="col-12 col-lg-6 d-grid">
                                    <button class="btn btn-dark" onclick="changeView();">Already have an account? Sign In</button>
                                </div>

                            </div>
                        </div>

                        <!-- signupbox -->

                        <!-- signinbox -->

                        <div class="col-12 col-lg-6 d-none" id="signInBox">
                            <div class="row g-2">
                                <div class="col-12">
                                    <p class="title02">Sign In</p>
                                </div>

                                <?php

                                $email = "";
                                $password = "";

                                if (isset($_COOKIE["email"])) {
                                    $email = $_COOKIE["email"];
                                }

                                if (isset($_COOKIE["password"])) {
                                    $password = $_COOKIE["password"];
                                }

                                ?>

                                <div class="col-12">
                                    <label class="form-label fw-bold">Email</label>
                                    <input type="email" class="form-control" id="email2" value="<?php echo $email; ?>" />
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-bold">Password</label>
                                    <input type="password" class="form-control" id="password2" value="<?php echo $password; ?>" />
                                </div>
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="rememberme" />
                                        <label class="form-check-label fw-bold">Remember Me</label>
                                    </div>
                                </div>
                                <div class="col-6 text-end">
                                    <a href="#" class="link-primary" onclick="forgotPassword();">Forgot Password?</a>
                                </div>
                                <div class="col-12 col-lg-6 d-grid">
                                    <button class="btn btn-primary" onclick="signIn();">Sign In</button>
                                </div>
                                <div class="col-12 col-lg-6 d-grid">
                                    <button class="btn btn-danger" onclick="changeView();">New to FOODY? Join Now</button>
                                </div>
                            </div>
                        </div>

                        <!-- signinbox -->

                    </div>
                </div>

                <!-- content -->

                <!-- modal -->

                <div class="modal" tabindex="-1" id="forgotPasswordModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Forgot Password</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="row g-3">

                                    <div class="col-6">
                                        <label class="form-label">New Password</label>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" id="np" />
                                            <button class="btn btn-outline-secondary" type="button" id="npb" onclick="showPassword();">Show</button>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <label class="form-label">Re-type Password</label>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" id="rnp" />
                                            <button class="btn btn-outline-secondary" type="button" id="rnpb" onclick="showPassword2();">Show</button>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Verification Code</label>
                                        <input type="text" class="form-control" id="vc" />
                                    </div>

                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" onclick="resetPassword();">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modal -->

                <!-- footer -->
                <div class="col-12 fixed-bottom d-none d-lg-block">
                    <p class="text-center">&copy; 2022 foody.com || All Rights Reserved</p>
                </div>
                <!-- footer -->

            </div>

        </div>
    </div>

    <img src="./img/signupbg.jpg" alt="" class="main-wallpaper">

    <script src="./js/script.js"></script>
    <script src="./js/bootstrap.js"></script>
</body>

</html>