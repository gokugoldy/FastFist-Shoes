<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration | STRIDE</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .brand-text {
            font-family: 'Montserrat', sans-serif;
            font-size: 2rem;
            font-weight: 800;
            color: #000;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-decoration: none;
            margin-bottom: 30px;
            display: inline-block;
        }

        .auth-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
            border: 1px solid #e5e7eb;
            padding: 40px;
            width: 100%;
            max-width: 500px; /* Slightly wider */
        }

        .auth-title {
            font-weight: 700;
            font-size: 1.25rem;
            color: #111;
            margin-bottom: 5px;
            text-align: center;
        }

        .auth-subtitle {
            text-align: center;
            color: #6b7280;
            font-size: 0.875rem;
            margin-bottom: 30px;
        }

        .form-label {
            font-size: 0.85rem;
            font-weight: 600;
            color: #374151;
            margin-bottom: 8px;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #e5e7eb;
            padding: 10px 15px;
            font-size: 0.95rem;
        }

        .form-control:focus {
            border-color: #000;
            box-shadow: none;
        }

        .btn-black {
            background-color: #000;
            color: #fff;
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            font-weight: 600;
            border: none;
            transition: 0.2s;
        }

        .btn-black:hover {
            background-color: #333;
            color: white;
        }

        .auth-footer {
            margin-top: 25px;
            text-align: center;
            font-size: 0.85rem;
            color: #6b7280;
        }

        .auth-footer a {
            color: #000;
            text-decoration: none;
            font-weight: 600;
        }

        .auth-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="text-center w-100">
        <div class="d-flex justify-content-center">
            <div class="auth-card text-start">
                <div class="text-center">
                    <a href="#" class="brand-text">STRIDE</a>
                    <h3 class="auth-title">Create Admin Account</h3>
                    <p class="auth-subtitle">Join the management team</p>
                </div>

                <form action="admin-login.html">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" placeholder="John">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" placeholder="Doe">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control" placeholder="name@company.com">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Create a strong password">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Repeat password">
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Admin Access Key</label>
                        <input type="text" class="form-control" placeholder="Enter provided security key">
                    </div>

                    <button type="submit" class="btn btn-black">Create Account</button>
                </form>

                <div class="auth-footer">
                    <p>Already have an account? <a href="admin-login.html">Sign In</a></p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>