<?php
session_start();
          include("connection.php");
          include("functions.php");

          if ($_SERVER['REQUEST_METHOD'] == "POST")
          {
              // something was posted
            $user_name =  $_POST['user_name'];
            $user_email =  $_POST['user_email'];
              $password = $_POST['password'];

            if(!empty($user_name) && !empty($user_email) && !empty($password) &&  !is_numeric($user_name))
                {
                    //save to database

                    $dbhost = "localhost";
                    $dbuser = "root";
                    $dbpass = "";
                    $dbname = "login_sample_db";

                    $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);


                    $user_id = random_num(20);
                    $query =mysqli_query ( $con,"INSERT INTO  `users` (`user_id`,`user_name`,`user_email`,`password`) values('$user_id','$user_name','$user_email','$password')");


                  header("Location: login.php");
                  die;
                }
            else{
                echo"please enter some valid user name";
            }
          }

          ?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create green land account </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">


    <link rel="stylesheet" href="sign.css">
</head>
<body>

<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <p class="mb-0 phone pl-md-2">
                    <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +254 705 553 860</a>
                    <a href="#"><span class="fa fa-paper-plane mr-1"></span> greenland@gmail.com</a>
                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end">
                <div class="social-media mr-4">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                    </p>
                </div>
                <div class="reg">
                    <p class="mb-0"><a href="login.php" class="mr-2">log in</a> <!--<a href="logout.php">Log Out</a></p>-->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row green">
    <div class="col-md-6">
        <h1 > Green land liquor store</h1>
    </div>
    <div class="col-md-6 gg">
        <h3>Sign up here</h3>
    </div>
</div>


<div class="row dean">
    <div class="col-md-4"></div>
    <div class="col-xl-4 clay">
    <form class="form" action="" method="post">

        <div class="form-group">
            <label for="name">Your name:</label><br>
            <input type="text" name="user_name" class="form-control" placeholder="Enter name" >
        </div>
        <br>
        <div class="form-group">
            <label for="email">Email address:</label><br>
            <input type="email" name="user_email" class="form-control" placeholder="Enter email" >
        </div>
        <br>
        <div class="form-group">
            <label for="password">Password:</label><br>
            <input type="password" class="form-control" placeholder="Enter password" name="password">
        </div>
        <br>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
            </label>
        </div>
        <br>
        <input class="active btn-sm btn-light" type="submit" value="signup"><br><br>
         <p> if you already have an account</p>
        <a href="login.php">click here to login</a>

    </form>
    </div>
    <div class="col-md-4"></div>
</div>
<footer class="ftco-footer">
    <div class="container">
        <div class="row mb-5">
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2 logo"><a href="#">Green <span>land</span></a></h2>
                    <p>The best of legendary liquor store in town. Old is gold they say.</p>
                    <ul class="ftco-footer-social list-unstyled mt-2">
                        <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">My Accounts</h2>
                    <ul class="list-unstyled">
                        <li><a href="login.php"><span class="fa fa-chevron-right mr-2"></span>My Account</a></li>
                        <li><a href="signup.php"><span class="fa fa-chevron-right mr-2"></span>Register</a></li>
                        <li><a href="login.php"><span class="fa fa-chevron-right mr-2"></span>Log In</a></li>
                        <li><a href="login.php"><span class="fa fa-chevron-right mr-2"></span>My Order</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Information</h2>
                    <ul class="list-unstyled">
                        <li><a href="login.php"><span class="fa fa-chevron-right mr-2"></span>About us</a></li>
                        <li><a href="login.php"><span class="fa fa-chevron-right mr-2"></span>Catalog</a></li>
                        <li><a href="login.php"><span class="fa fa-chevron-right mr-2"></span>Contact us</a></li>
                        <li><a href="login.php"><span class="fa fa-chevron-right mr-2"></span>Term &amp; Conditions</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Quick Link</h2>
                    <ul class="list-unstyled">
                        <li><a href="login.php"><span class="fa fa-chevron-right mr-2"></span>New User</a></li>
                        <li><a href="help.php"><span class="fa fa-chevron-right mr-2"></span>Help Center</a></li>
                        <li><a href="login.php"><span class="fa fa-chevron-right mr-2"></span>Report Spam</a></li>
                        <li><a href="login.php"><span class="fa fa-chevron-right mr-2"></span>Faq's</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                            <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                            <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0 py-5 bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <p class="mb-0" style="color: rgba(255,255,255,.5);"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">dee.com</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</footer>





</body>
</html>
<?php
/*

$connection =mysqli_connect($host,$user,$pass,$db_name);
//select the query
$insertQuery = "INSERT INTO `usertable`(`name`, `password`) VALUES ('$name','$password')";
//go ahead and save
$save = mysqli_query($connection, $insertQuery);
//check how many times $name is entered
//$num = mysqli_num_rows($save);
//give a condition
if ($save == 1){
echo "user name already entered!!";
}else{
echo "Registration successful";
*/
