
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fastfist | Step Into Excellence</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-red: #ff3c3c;
            --dark-bg: #1a1a1a;
            --light-gray: #f8f9fa;
            --text-gray: #888;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            overflow-x: hidden; /* Prevent horizontal scroll when panel opens */
        }

        h1, h2, h3, h4, h5, .navbar-brand, .btn, .cat-title, .promo-title, .feature-text h6 {
            font-family: 'Montserrat', sans-serif;
        }

        /* --- Hero Carousel Styles --- */
        .hero-carousel { position: relative; }
        .hero-slide {
            height: 90vh; /* Full screen height */
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }
        /* Dark Overlay */
        .hero-slide::before {
            content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.5)); z-index: 1;
        }
        .hero-content { position: relative; z-index: 2; }
        
        .hero-title {
            font-size: 4rem; font-weight: 800; text-transform: uppercase; line-height: 1.1; margin-bottom: 20px;
            animation: fadeInDown 1s ease-out;
        }
        .hero-subtitle {
            font-size: 1.1rem; font-weight: 400; margin-bottom: 30px; color: rgba(255, 255, 255, 0.9);
            animation: fadeInUp 1s ease-out;
        }

        /* Carousel Indicators */
        .carousel-indicators [data-bs-target] {
            width: 10px; height: 10px; border-radius: 50%; background-color: transparent; border: 2px solid white; margin: 0 5px; opacity: 0.7;
        }
        .carousel-indicators .active { background-color: var(--primary-red); border-color: var(--primary-red); opacity: 1; }

        @media (max-width: 768px) {
            .hero-slide { height: 70vh; }
            .hero-title { font-size: 2.5rem; }
        }

        /* Animations */
        @keyframes fadeInDown { from { opacity: 0; transform: translateY(-20px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }

        /* Buttons */
        .btn-custom-red {
            background-color: var(--primary-red); color: white; padding: 12px 30px; border-radius: 0;
            font-weight: 700; text-transform: uppercase; border: 2px solid var(--primary-red); transition: all 0.3s; text-decoration: none;
        }
        .btn-custom-red:hover { background: transparent; color: var(--primary-red); }
        .btn-custom-outline {
            background-color: transparent; color: white; padding: 12px 30px; border-radius: 0;
            font-weight: 700; text-transform: uppercase; border: 2px solid white; margin-left: 15px; transition: all 0.3s; text-decoration: none;
        }
        .btn-custom-outline:hover { background: white; color: black; }

        /* --- Category Cards --- */
        .category-card { position: relative; height: 400px; overflow: hidden; margin-bottom: 20px; cursor: pointer; }
        .category-card img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; }
        .category-card:hover img { transform: scale(1.05); }
        .cat-overlay {
            position: absolute; bottom: 0; left: 0; width: 100%; padding: 30px;
            background: linear-gradient(to top, rgba(0,0,0,0.7), transparent); color: white;
        }
        .cat-title { font-weight: 800; font-size: 1.5rem; text-transform: uppercase; }
        .shop-now-link { font-size: 0.9rem; font-weight: 600; margin-top: 10px; opacity: 0.9; }

        /* --- Product Cards --- */
        .product-card { border: none; margin-bottom: 30px; transition: transform 0.3s; cursor: pointer; }
        .product-image-wrapper { position: relative; background-color: #f4f4f4; height: 300px; display: flex; align-items: center; justify-content: center; overflow: hidden; }
        .product-image-wrapper img { max-width: 90%; max-height: 90%; mix-blend-mode: multiply; }
        .badge-custom { position: absolute; top: 15px; left: 15px; padding: 5px 10px; font-size: 0.7rem; font-weight: 700; text-transform: uppercase; }
        .badge-red { background: var(--primary-red); color: white; }
        .badge-yellow { background: #ffc107; color: black; }
        .wishlist-icon { position: absolute; top: 15px; right: 15px; background: white; width: 35px; height: 35px; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 5px rgba(0,0,0,0.1); cursor: pointer; transition: 0.2s; }
        .wishlist-icon:hover { color: var(--primary-red); }
        .product-info { padding-top: 15px; }
        .brand-name { font-size: 0.8rem; color: #888; font-weight: 600; text-transform: uppercase; }
        .product-name { font-weight: 700; font-size: 1.1rem; margin: 5px 0; color: #000; }
        .product-price { font-weight: 700; color: #333; }

        /* --- Promo Section --- */
        .promo-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1556906781-9a412961c28c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-bottom: 0;
        }
        .promo-title { font-size: 3.5rem; font-weight: 800; text-transform: uppercase; margin-bottom: 20px; letter-spacing: 2px; }
        .promo-section .lead { font-size: 1.1rem; font-weight: 400; margin-bottom: 30px; color: rgba(255, 255, 255, 0.9); }

        /* --- Features Bar --- */
        .features-bar { background-color: #fff; padding: 80px 0; border-bottom: 1px solid #eee; }
        .feature-box {
            display: flex; flex-direction: column; align-items: center; justify-content: center;
            text-align: center; padding: 20px; transition: transform 0.3s ease;
        }
        .feature-box:hover { transform: translateY(-5px); }
        .feature-icon {
            font-size: 2.5rem; color: var(--primary-red); margin-bottom: 20px;
            width: 80px; height: 80px; background-color: rgba(255, 60, 60, 0.1); border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
        }
        .feature-text h6 { font-weight: 700; text-transform: uppercase; font-size: 1rem; margin-bottom: 8px; color: #000; letter-spacing: 1px; }
        .feature-text p { font-size: 0.9rem; color: #777; margin: 0; line-height: 1.5; }
    </style>
</head>
<body>

    <?php include 'header.php'; ?>

    <div id="heroCarousel" class="carousel slide carousel-fade hero-carousel" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-indicators mb-5">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
                    <div class="container hero-content">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <p class="text-uppercase letter-spacing-2 mb-2 fw-bold text-white">New Collection 2026</p>
                                <h1 class="hero-title">Step Into<br>Excellence</h1>
                                <p class="hero-subtitle">Discover premium footwear designed for performance, style, and ultimate comfort.</p>
                                <div class="mt-4">
                                    <a href="user/men.php" class="btn btn-custom-red">Shop Men <i class="fas fa-arrow-right ms-2"></i></a>
                                    <a href="user/women.php" class="btn btn-custom-outline">Shop Women</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1552346154-21d32810aba3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
                    <div class="container hero-content">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <p class="text-uppercase letter-spacing-2 mb-2 fw-bold text-white">Urban Lifestyle</p>
                                <h1 class="hero-title">Redefine Your<br>Street Style</h1>
                                <p class="hero-subtitle">Bold designs that stand out in the concrete jungle.</p>
                                <div class="mt-4">
                                    <a href="user/casual.php" class="btn btn-custom-red">Explore Casual</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1595341888016-a392ef81b7de?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
                    <div class="container hero-content">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <p class="text-uppercase letter-spacing-2 mb-2 fw-bold text-white">Performance Gear</p>
                                <h1 class="hero-title">Unleash Your<br>Potential</h1>
                                <p class="hero-subtitle">Engineered for athletes. Lightweight, durable, and ready.</p>
                                <div class="mt-4">
                                    <a href="user/sports.php" class="btn btn-custom-red">Shop Sport</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
    </div>

    <section class="py-5 container">
        <div class="section-header mb-4 d-flex justify-content-between align-items-center">
            <div>
                <p class="text-muted text-uppercase small mb-1">Collections</p>
                <h2 class="section-title fw-bold">Shop By Category</h2>
            </div>
            <a href="user/men.php" class="text-dark text-decoration-none fw-bold small">VIEW ALL <i class="fas fa-chevron-right ms-1"></i></a>
        </div>
        <div class="row g-3">
            <div class="col-6 col-md-6 col-lg-3">
                <a href="user/sports.php" class="text-decoration-none">
                    <div class="category-card">
                        <img src="https://images.unsplash.com/photo-1541597455068-49e3562bdfa4?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Running">
                        <div class="cat-overlay"><div class="cat-title">Running</div><div class="shop-now-link">Shop Now <i class="fas fa-arrow-right"></i></div></div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-6 col-lg-3">
                <a href="user/formal.php" class="text-decoration-none">
                    <div class="category-card">
                        <img src="https://images.unsplash.com/photo-1614252369475-531eba835eb1?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Formal">
                        <div class="cat-overlay"><div class="cat-title">Formal</div><div class="shop-now-link">Shop Now <i class="fas fa-arrow-right"></i></div></div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-6 col-lg-3">
                <a href="user/kids.php" class="text-decoration-none">
                    <div class="category-card">
                        <img src="https://images.unsplash.com/photo-1514989940723-e8875ea6ab7d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Kids">
                        <div class="cat-overlay"><div class="cat-title">Kids</div><div class="shop-now-link">Shop Now <i class="fas fa-arrow-right"></i></div></div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-6 col-lg-3">
                <a href="user/women.php" class="text-decoration-none">
                    <div class="category-card">
                        <img src="https://images.unsplash.com/photo-1543163521-1bf539c55dd2?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Women">
                        <div class="cat-overlay"><div class="cat-title">Women</div><div class="shop-now-link">Shop Now <i class="fas fa-arrow-right"></i></div></div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <p class="text-muted text-uppercase small mb-1">Trending Now</p>
                <h2 class="section-title fw-bold">Featured Products</h2>
            </div>
            <div class="row">
                <div class="col-6 col-lg-3">
                    <a href="user/product_detail.php" class="text-decoration-none">
                        <div class="product-card">
                            <div class="product-image-wrapper">
                                <span class="badge-custom badge-red">NEW</span><div class="wishlist-icon"><i class="far fa-heart"></i></div>
                                <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Shoe">
                            </div>
                            <div class="product-info"><div class="brand-name">Nike</div><div class="product-name">Air Max Velocity</div><div class="product-price">$179.00</div></div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3">
                    <a href="user/product_detail.php" class="text-decoration-none">
                        <div class="product-card">
                            <div class="product-image-wrapper">
                                <div class="wishlist-icon"><i class="far fa-heart"></i></div>
                                <img src="https://images.unsplash.com/photo-1600185365926-3a2ce3cdb9eb?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Shoe">
                            </div>
                            <div class="product-info"><div class="brand-name">Adidas</div><div class="product-name">Classic Leather</div><div class="product-price">$140.00</div></div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3">
                    <a href="user/product_detail.php" class="text-decoration-none">
                        <div class="product-card">
                            <div class="product-image-wrapper">
                                <span class="badge-custom badge-yellow">BESTSELLER</span><div class="wishlist-icon"><i class="far fa-heart"></i></div>
                                <img src="https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Shoe">
                            </div>
                            <div class="product-info"><div class="brand-name">Puma</div><div class="product-name">Urban Runner</div><div class="product-price">$120.00</div></div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3">
                    <a href="user/product_detail.php" class="text-decoration-none">
                        <div class="product-card">
                            <div class="product-image-wrapper lifestyle">
                                <div class="wishlist-icon"><i class="far fa-heart"></i></div>
                                <img src="https://images.unsplash.com/photo-1487222477894-8943e31ef7b2?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Shoe">
                            </div>
                            <div class="product-info"><div class="brand-name">Clarks</div><div class="product-name">Oxford Elite</div><div class="product-price">$240.00</div></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="user/men.php" class="btn btn-dark px-4 py-2 rounded-0 text-uppercase" style="font-weight: 600; font-size: 0.8rem;">View All Products</a>
            </div>
        </div>
    </section>

    <section class="promo-section">
        <div class="container">
            <h2 class="promo-title">Run Your World</h2>
            <p class="lead mb-4">Performance meets style. Engineered for athletes who demand the best.</p>
            <a href="user/sports.php" class="btn btn-custom-red">Shop Sports Collection</a>
        </div>
    </section>

    <div class="features-bar">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-icon"><i class="fas fa-truck"></i></div>
                        <div class="feature-text"><h6>Free Shipping</h6><p>Enjoy free shipping on all orders over $100.</p></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                        <div class="feature-text"><h6>Secure Payment</h6><p>We ensure secure payment with SSL encryptions.</p></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-icon"><i class="fas fa-sync-alt"></i></div>
                        <div class="feature-text"><h6>Easy Returns</h6><p>Not satisfied? Return within 30 days.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>