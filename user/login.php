<?php
    require( '../db_config.php' );
    if ( isset( $_POST[ 'submit' ] ) ) {
        $email = $_POST[ 'email' ];
        $pass = md5($_POST[ 'pass' ]);
        $sel = "SELECT * FROM `tb_user` WHERE `email` = '$email' AND `pass` = '$pass'";
        $res = mysqli_query( $con, $sel );
        if ( $row = mysqli_num_rows( $res ) > 0 ) {
            header( 'Location: ../index.php' );
            $_SESSION['name'] ;
        }
        else{
            echo "<script>alert('Cannot be login');</script>";
            // header('Location: login.php');    
        }
    }
            
    if(isset($_SESSION['acc_create'])){
        $_SESSION['acc_create'];
        unset($_SESSION['acc_create']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Fastfist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root { --primary-red: #ff3c3c; }
        body { font-family: 'Open Sans', sans-serif; background-color: #f8f9fa; min-height: 100vh; display: flex; align-items: center; justify-content: center; }
        h1, h2, h3, h4, h5, .btn { font-family: 'Montserrat', sans-serif; }
        
        .auth-card {
            background: white;
            padding: 40px;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            border-radius: 0; /* Sharp edges for modern look */
        }
        .brand-logo { font-weight: 800; font-size: 2rem; letter-spacing: 1px; display: block; text-align: center; margin-bottom: 30px; color: #000; text-decoration: none; }
        .form-label { font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; }
        .form-control { border-radius: 0; padding: 12px 15px; border: 1px solid #ddd; background-color: #fcfcfc; }
        .form-control:focus { box-shadow: none; border-color: #000; background-color: #fff; }
        
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
        .btn-auth:hover { background-color: #333; color: white; }
        
        .auth-footer { text-align: center; margin-top: 25px; font-size: 0.9rem; color: #666; }
        .auth-footer a { color: #000; text-decoration: underline; font-weight: 600; }
        .auth-footer a:hover { color: var(--primary-red); }
        .forgot-link { font-size: 0.85rem; color: #888; text-decoration: none; float: right; margin-bottom: 15px; }
        .forgot-link:hover { color: #000; }
    </style>
</head>
<body>
    <div class="auth-card">
        <a href="../index.php" class="brand-logo">Fastfist</a>
        <h4 class="text-center mb-4 fw-bold">Welcome Back</h4>
        
        <form class='form' method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="••••••••" name='pass'>
            </div>
            
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember" required>
                    <label class="form-check-label small" for="remember">Remember me</label>
                </div>
                <a href="forget_pass.php" class="forgot-link">Forgot Password?</a>
            </div>

            <button type="submit" class="btn btn-auth" name='submit'>Log In</button>
        </form>

        <div class="auth-footer">
            <p>Don't have an account? <a href="registor.php">Create one</a></p>
        </div>
    </div>
</body>
</html>