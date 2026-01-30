<?php
require( '../db_config.php' );
if ( isset( $_POST[ 'submit' ] ) ) {
    $fs = $_POST[ 'fs' ];
    $ls = $_POST[ 'ls' ];
    $email = $_POST[ 'email' ];
    $pass = md5( $_POST[ 'pass' ] );
    $c_pass = md5( $_POST[ 'c_pass' ] );
    $time = date( 'Y-m-d' );
    $sel = "SELECT * FROM `tb_user` WHERE `email` = '$email'";
    $res = mysqli_query( $con, $sel );
    if ( $row = mysqli_num_rows( $res ) > 0 ) {
        echo "<script>alert('user is already existed');</script>";
    } elseif ( !$pass == $c_pass ) {
        echo "<script>alert('password not match');</script>";
    } elseif ( empty( $fs AND $ls AND $email AND $pass AND $c_pass ) ) {
        echo "<script>alert('fill all the fields');</script>";

    } else {
        $insert = "INSERT into tb_user(`first_name`,`last_name`,`email`,`pass`,`con_pass`,`created_at`,`status`) value('$fs','$ls','$email','$pass','$c_pass','$time','1')";
        mysqli_query( $con, $insert );
        $_SESSION[ 'acc_create' ] = 'Your Account Was Created Successfully. Please Login!';
        header( 'Location: login.php' );
    }
}

?>
<!DOCTYPE html>
<html lang = 'en'>
<head>
<meta charset = 'UTF-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<title>Register | Fastfist</title>
<link href = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel = 'stylesheet'>
<link href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css' rel = 'stylesheet'>
<link href = 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&family=Open+Sans:wght@400;600&display=swap' rel = 'stylesheet'>
<style>
/* Reusing Login Styles */
:root {
    --primary-red: #ff3c3c;
}
body {
    font-family: 'Open Sans', sans-serif;
    background-color: #f8f9fa;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 40px 0;
}
h1, h2, h3, h4, h5, .btn {
    font-family: 'Montserrat', sans-serif;
}

.auth-card {
    background: white;
    padding: 40px;
    width: 100%;
    max-width: 500px;
    box-shadow: 0 10px 30px rgba( 0, 0, 0, 0.05 );
}
.brand-logo {
    font-weight: 800;
    font-size: 2rem;
    letter-spacing: 1px;
    display: block;
    text-align: center;
    margin-bottom: 30px;
    color: #000;
    text-decoration: none;
}
.form-label {
    font-size: 0.85rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}
.form-control {
    border-radius: 0;
    padding: 12px 15px;
    border: 1px solid #ddd;
    background-color: #fcfcfc;
}
.form-control:focus {
    box-shadow: none;
    border-color: #000;
    background-color: #fff;
}
.btn-auth {
    background-color: #000;
    color: white;
    width: 100%;
    padding: 12px;
    text-transform: uppercase;
    font-weight: 700;
    border-radius: 0;
    border: none;
    margin-top: 20px;
    transition: 0.3s;
}
.btn-auth:hover {
    background-color: #333;
    color: white;
}
.auth-footer {
    text-align: center;
    margin-top: 25px;
    font-size: 0.9rem;
    color: #666;
}
.auth-footer a {
    color: #000;
    text-decoration: underline;
    font-weight: 600;
}
</style>
</head>
<body>
<div class = 'auth-card'>
<a href = '../index.php' class = 'brand-logo'>Fastfist</a>
<h4 class = 'text-center mb-4 fw-bold'>Create an Account</h4>
<form class = 'form' method = 'post'>
<div class = 'row'>
<div class = 'col-md-6 mb-3'>
<label class = 'form-label'>First Name</label>
<input type = 'text' class = 'form-control' name = 'fs' id = 'fs'>
</div>
<div class = 'col-md-6 mb-3'>
<label class = 'form-label'>Last Name</label>
<input type = 'text' class = 'form-control' name = 'ls' id = 'ls'>
</div>
</div>

<div class = 'mb-3'>
<label for = 'email' class = 'form-label'>Email Address</label>
<input type = 'email' class = 'form-control' id = 'email' name = 'email'>
</div>
<div class = 'row'>
<div class = 'col-md-6 mb-3'>
<label for = 'password' class = 'form-label'>Password</label>
<input type = 'password' class = 'form-control' id = 'password' name = 'pass'>
</div>

<div class = 'col-md-6 mb-3'>
<label for = 'confirm_password' class = 'form-label'>Confirm Password</label>
<input type = 'password' class = 'form-control' id = 'confirm_password' name = 'c_pass'>
</div>
</div>
<div class = 'form-check mb-3'>
<input class = 'form-check-input' type = 'checkbox' id = 'terms' required>
<label class = 'form-check-label small text-muted' for = 'terms'>
I agree to the <a href = '#' class = 'text-dark text-decoration-none fw-bold'>Terms & Conditions</a>
</label>
</div>

<button type = 'submit' class = 'btn btn-auth' name = 'submit' id = 'sign'>Sign Up</button>
</form>

<div class = 'auth-footer'>
<p>Already have an account? <a href = 'login.php'>Log In</a></p>
</div>
</div>
<script>

</script>
</body>
</html>