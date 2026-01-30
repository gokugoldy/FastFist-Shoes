<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Wishlist | Fastfist</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-red: #ff3c3c;
            --dark-bg: #1a1a1a;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            color: #1a1a1a;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        h1, h2, h3, h4, h5, .navbar-brand, .btn {
            font-family: 'Montserrat', sans-serif;
        }

        /* --- Search Line (Specific to this design) --- */
        .search-line-container {
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
        }
        .search-input {
            border: none;
            width: 100%;
            outline: none;
            color: #888;
            font-size: 0.9rem;
        }

        /* --- Wishlist Empty State --- */
        .wishlist-section {
            flex: 1; /* Pushes footer down */
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 0;
        }
        .empty-icon {
            font-size: 5rem;
            color: #e0e0e0; /* Light gray heart */
            margin-bottom: 20px;
        }
        .empty-title {
            font-weight: 800;
            font-size: 2rem;
            margin-bottom: 10px;
            color: #1a1a1a;
        }
        .empty-text {
            color: #666;
            margin-bottom: 30px;
            font-size: 0.95rem;
        }
        .btn-black {
            background-color: #000;
            color: #fff;
            padding: 12px 30px;
            border-radius: 0;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.85rem;
            border: none;
            transition: all 0.3s;
        }
        .btn-black:hover {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>

    <?php include '../header.php'; ?>

    <div class="container search-line-container">
        <input type="text" class="search-input" placeholder="Search for shoes...">
    </div>

    <section class="wishlist-section">
        <div class="container text-center">
            <div class="empty-icon">
                <i class="far fa-heart"></i>
            </div>
            
            <h2 class="empty-title">Your Wishlist is Empty</h2>
            <p class="empty-text">Save items you love by clicking the heart icon.</p>

            <a href="../index.php" class="btn btn-black">Explore Products</a>
        </div>
    </section>

    <?php include '../footer.php'; ?>

</body>
</html>