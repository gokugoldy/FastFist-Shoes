<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | STRIDE</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6; /* Admin Light BG */
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
            max-width: 420px;
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
                    <h3 class="auth-title">Admin Login</h3>
                    <p class="auth-subtitle">Enter your credentials to access the dashboard</p>
                </div>

                <form action="admin.html">
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control" placeholder="admin@stride.com">
                    </div>
                    
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <label class="form-label">Password</label>
                            <a href="#" class="small text-muted text-decoration-none">Forgot?</a>
                        </div>
                        <input type="password" class="form-control" placeholder="••••••••">
                    </div>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="remember">
                        <label class="form-check-label small text-muted" for="remember">Keep me logged in</label>
                    </div>

                    <button type="submit" class="btn btn-black">Sign In</button>
                </form>

                <div class="auth-footer">
                    <p>Don't have an admin account? <a href="admin-register.html">Request Access</a></p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>