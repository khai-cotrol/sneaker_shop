<?php

use App\src\user;
use App\src\UserConnection;

include "vendor/autoload.php";
if (isset($_POST['signup'])){
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $importpassword=$_REQUEST['importpassword'];
    if (empty($username)||empty($password)|| empty($importpassword)){
        echo "khong duoc de chong";
    }elseif (!($password==$importpassword)){
        echo "mat khau khong khop";
    }else{
        $user = new user($username,$password);
        UserConnection::addUser($user);
        header('Location: login.php ');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="public/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

<div class="main">

    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" class="register-form" id="register-form">
                        <div class="form-group">
                            <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="username" id="username" placeholder="Your Name"/>
                        </div>
<!--                        <div class="form-group">-->
<!--                            <label for="email"><i class="zmdi zmdi-email"></i></label>-->
<!--                            <input type="email" name="email" id="email" placeholder="Your Email"/>-->
<!--                        </div>-->
                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="password" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <label for="importpassword"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="importpassword" id="importpassword" placeholder="Repeat your password"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="public/images/signup-image.jpg" alt="sing up image"></figure>
                    <a href="login.php" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- JS -->
<script src="public/jquery/jquery.min.js"></script>
<script src="public/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
