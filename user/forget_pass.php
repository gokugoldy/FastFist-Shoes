<?php
require( '../db_config.php' );
$email_match = false;
if ( isset( $_POST[ 'submit' ] ) ) {
    $email = $_POST[ 'email' ];
    $sel = "SELECT * FROM `tb_user` WHERE `email` = '$email'";
    $res = mysqli_query( $con, $sel );
    $data = mysqli_fetch_assoc( $res );
    if ( $row = mysqli_num_rows( $res ) > 0 ) {
        $email_match = true;
        echo "<script>alert('email match enter new password');</script>";
        if ( $email_match == true ) {
            if ( isset( $_POST[ 'reset_pass' ] ) ) {
                $pass = md5( $_POST[ 'pass' ] );
                $c_pass = md5( $_POST[ 'c_pass' ] );
                $update_pass = "UPDATE `tb_user` SET `pass` = '$pass' , `con_pass` = '$c_pass'";
                if ( !$pass == $c_pass ) {
                    echo "<script>alert('Enter a valid password');</script>";
                } else {
                    mysqli_query( $con, $update_pass );
                    echo "<script>alert('update Succesfully');</script>";
                    header( 'location : login.php' );
                }
            }
        }
    }

} else {
    $email_match = false;
    echo "<script>alert('email is not existd');</script>";
}

?>

<!DOCTYPE html>
<html lang = 'en'>

<head>
<meta charset = 'UTF-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<title>Forgot Password | Fastfist</title>
<link href = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel = 'stylesheet'>
<link href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css' rel = 'stylesheet'>
<link
href = 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&family=Open+Sans:wght@400;600&display=swap'
rel = 'stylesheet'>
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
}

h1,
h2,
h3,
h4,
h5,
.btn {
    font-family: 'Montserrat', sans-serif;
}

.auth-card {
    background: white;
    padding: 40px;
    width: 100%;
    max-width: 450px;
    box-shadow: 0 10px 30px rgba( 0, 0, 0, 0.05 );
    text-align: center;
}

.brand-logo {
    font-weight: 800;
    font-size: 2rem;
    letter-spacing: 1px;
    display: block;
    margin-bottom: 30px;
    color: #000;
    text-decoration: none;
}

.form-label {
    font-size: 0.85rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    display: block;
    text-align: left;
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
    margin-top: 25px;
    font-size: 0.9rem;
    color: #666;
}

.auth-footer a {
    color: #000;
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 5px;
}

.auth-footer a:hover {
    color: var( --primary-red );
}

.icon-circle {
    width: 60px;
    height: 60px;
    background-color: #f0f0f0;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    color: #333;
    font-size: 1.5rem;
}
</style>
</head>

<body>
<div class = 'auth-card'>
<a href = '../index.php' class = 'brand-logo'>Fastfist</a>

<div class = 'icon-circle'>
<i class = 'fas fa-lock'></i>
</div>

<h4 class = 'fw-bold mb-2'>Reset Password</h4>
<p class = 'text-muted small mb-4'>Enter your email address and we'll send you instructions to reset your
            password.</p>

        <form method="post" class="form">

            <?php if($email_match == false) { ?>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email" required>
            </div>
            <button type='submit' class='btn btn-auth' name="submit">Submit</button>
            <?php }else { ?>
            <div class='mb-3'>
                <label for='password' class='form-label'>Password</label>
                <input type='password' class='form-control' id='password' name='pass' required>
            </div>
            <div class='mb-3'>
                <label for='confirm_password' class='form-label'>Confirm Password</label>
                <input type='password' class='form-control' id='confirm_password' name='c_pass' required>
            </div>
            <button type='submit' class='btn btn-auth' name="reset_pass">Submit</button>
            <?php } ?>
        </form>

        <div class='auth-footer'>
            <a href='login.php'><i class='fas fa-arrow-left small'></i> Back to Log In</a>
</div>
</div>
</body>

</html>