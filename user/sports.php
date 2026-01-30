<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Collection | Fastfist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* Reusing exact CSS from previous pages for consistency */
        :root { --primary-red: #ff3c3c; --dark-bg: #1a1a1a; --card-bg: #e8e8e8; }
        body { font-family: 'Open Sans', sans-serif; color: #1a1a1a; }
        h1, h2, h3, h4, h5, .navbar-brand, .btn { font-family: 'Montserrat', sans-serif; }
        .navbar { padding: 20px 0; background: #fff; border-bottom: 1px solid #eee; }
        .navbar-brand { font-weight: 800; font-size: 1.5rem; letter-spacing: 1px; }
        .nav-link { font-weight: 600; font-size: 0.85rem; text-transform: uppercase; color: #000 !important; margin: 0 10px; }
        .nav-icons a { color: #000; margin-left: 20px; font-size: 1.1rem; text-decoration: none; }
        .page-header { background-color: #f8f9fa; padding: 60px 0; text-align: left; }
        .page-title { font-weight: 900; font-size: 3rem; text-transform: uppercase; margin-bottom: 5px; }
        .product-count { color: #888; font-size: 0.9rem; }
        .toolbar { padding: 15px 0; border-bottom: 1px solid #eee; background: white; position: sticky; top: 75px; z-index: 90; }
        .filter-btn { background: none; border: none; font-weight: 600; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; display: flex; align-items: center; gap: 10px; }
        .sort-select { border: none; font-weight: 600; font-size: 0.9rem; text-transform: uppercase; outline: none; background: transparent; text-align: right; cursor: pointer; }
        
        .product-card { border: none; background: transparent; margin-bottom: 40px; cursor: pointer; }
        .card-img-wrapper { background-color: var(--card-bg); position: relative; padding-top: 100%; overflow: hidden; transition: all 0.3s ease; }
        .card-img-wrapper img { position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 80%; height: auto; mix-blend-mode: multiply; transition: transform 0.3s ease; }
        .product-card:hover .card-img-wrapper img { transform: translate(-50%, -50%) scale(1.1); }
        
        .badge-custom { position: absolute; top: 15px; left: 15px; padding: 6px 12px; font-size: 0.7rem; font-weight: 700; text-transform: uppercase; z-index: 2; }
        .badge-red { background: var(--primary-red); color: white; }
        .badge-green { background: #10b981; color: white; }
        .wishlist-btn { position: absolute; top: 15px; right: 15px; width: 35px; height: 35px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; z-index: 2; transition: all 0.2s; border: none; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .wishlist-btn:hover { color: var(--primary-red); }
        
        .product-meta { padding-top: 15px; }
        .brand-label { color: #999; font-size: 0.75rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 5px; }
        .product-name { font-weight: 800; font-size: 1.1rem; color: #000; margin-bottom: 5px; }
        .product-price { font-weight: 700; font-size: 1rem; color: #111; }
        
        /* Sidebar & Footer styles assumed identical to previous files */
        .offcanvas-header { font-weight: 700; text-transform: uppercase; }
        footer { background-color: #1e1e1e; color: #fff; padding: 80px 0 30px; margin-top: 80px; }
        .footer-brand { font-weight: 800; font-size: 1.5rem; margin-bottom: 20px; display: block; }
        .footer-heading { font-weight: 700; text-transform: uppercase; font-size: 0.9rem; margin-bottom: 20px; letter-spacing: 1px; }
        .footer-links a { color: #888; text-decoration: none; font-size: 0.9rem; transition: 0.2s; display:block; margin-bottom:10px; }
        .footer-links a:hover { color: white; }
        .newsletter-input { background: #333; border: none; padding: 10px 15px; color: white; width: 70%; }
        .newsletter-btn { background: var(--primary-red); border: none; width: 25%; color: white; }
        .bottom-bar { border-top: 1px solid #333; margin-top: 60px; padding-top: 30px; font-size: 0.8rem; color: #666; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Fastfist</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="men.php">Men</a></li>
                    <li class="nav-item"><a class="nav-link" href="women.php">Women</a></li>
                    <li class="nav-item"><a class="nav-link" href="kids.php">Kids</a></li>
                    <li class="nav-item"><a class="nav-link" href="sports.php">Sports</a></li>
                    <li class="nav-item"><a class="nav-link" href="casual.php">Casual</a></li>
                    <li class="nav-item"><a class="nav-link" href="formal.php">Formal</a></li>
                </ul>
            </div>
            <div class="nav-icons d-none d-lg-flex">
                <a href="#"><i class="fas fa-search"></i></a>
                <a href="wishlist.php"><i class="far fa-heart"></i></a>
                <a href="cart.php"><i class="fas fa-shopping-bag"></i></a>
                <a href="profile.php"><i class="far fa-user"></i></a>
            </div>
        </div>
    </nav>

    <section class="page-header">
        <div class="container">
            <h1 class="page-title">SPORTS</h1>
            <p class="product-count">3 products</p>
        </div>
    </section>

    <section class="toolbar">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <button class="filter-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#filterSidebar"><i class="fas fa-filter"></i> Filters</button>
                <div class="d-flex align-items-center"><span class="text-muted small me-2">Sort by:</span><select class="sort-select"><option>Performance</option><option>Price: Low to High</option></select><i class="fas fa-chevron-down ms-2 small"></i></div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="product_detail.php" class="text-decoration-none">
                        <div class="product-card">
                            <div class="card-img-wrapper">
                                <span class="badge-custom badge-green">PERFORMANCE</span>
                                <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                <img src="https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Running Shoe">
                            </div>
                            <div class="product-meta">
                                <div class="brand-label">Nike</div>
                                <h3 class="product-name">Zoom Fly 5</h3>
                                <div class="product-price">$160.00</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="product_detail.php" class="text-decoration-none">
                        <div class="product-card">
                            <div class="card-img-wrapper">
                                <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                <img src="https://images.unsplash.com/photo-1584735175315-9d5df23860e6?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Training Shoe">
                            </div>
                            <div class="product-meta">
                                <div class="brand-label">Under Armour</div>
                                <h3 class="product-name">Project Rock 4</h3>
                                <div class="product-price">$150.00</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="product_detail.php" class="text-decoration-none">
                        <div class="product-card">
                            <div class="card-img-wrapper">
                                <span class="badge-custom badge-red">SALE</span>
                                <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                <img src="https://images.unsplash.com/photo-1539185441755-769473a23570?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Trail Shoe">
                            </div>
                            <div class="product-meta">
                                <div class="brand-label">Salomon</div>
                                <h3 class="product-name">Speedcross 5</h3>
                                <div class="product-price text-danger">$110.00</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="filterSidebar">
        <div class="offcanvas-header"><h5 class="offcanvas-title">Filters</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button></div>
        <div class="offcanvas-body"><p>Filter options go here...</p><button class="btn btn-dark w-100 rounded-0">APPLY</button></div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <span class="footer-brand">Fastfist</span>
                    <p class="footer-text">Premium footwear for every step of your journey. Quality, style, and comfort combined.</p>
                    <div class="mt-3">
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-6 col-lg-2 mb-4">
                    <h5 class="footer-heading">Shop</h5>
                    <ul class="footer-links">
                        <li><a href="men.php">Men</a></li>
                        <li><a href="women.php">Women</a></li>
                        <li><a href="kids.php">Kids</a></li>
                        <li><a href="sports.php">Sports</a></li>
                        <li><a href="casual.php">Casual</a></li>
                        <li><a href="formal.php">Formal</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-4">
                    <h5 class="footer-heading">Help</h5>
                    <ul class="footer-links">
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="shipping.php">Shipping</a></li>
                        <li><a href="returns.php">Returns</a></li>
                        <li><a href="size_guide.php">Size Guide</a></li>
                        <li><a href="contect.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5 class="footer-heading">Newsletter</h5>
                    <p class="footer-text mb-3">Subscribe for exclusive offers and updates.</p>
                    <div class="d-flex">
                        <input type="email" class="newsletter-input" placeholder="Your email">
                        <button class="newsletter-btn"><i class="far fa-envelope"></i></button>
                    </div>
                </div>
            </div>
            <div class="bottom-bar text-center">
                <p class="mb-0">&copy; 2025 Fastfist. All rights reserved.</p>
                <div class="mt-2 mt-md-0">
                    <a href="#" class="text-decoration-none text-muted small me-3">Privacy Policy</a>
                    <a href="#" class="text-decoration-none text-muted small">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>