<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men's Collection | Fastfist</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-red: #ff3c3c;
            --dark-bg: #1a1a1a;
            --light-bg: #f9f9f9;
            --card-bg: #e8e8e8; /* Slightly darker gray for product background per screenshot */
        }

        body {
            font-family: 'Open Sans', sans-serif;
            color: #1a1a1a;
        }

        h1, h2, h3, h4, h5, .navbar-brand, .btn {
            font-family: 'Montserrat', sans-serif;
        }

        /* --- Page Header --- */
        .page-header {
            background-color: #f8f9fa;
            padding: 60px 0;
            text-align: left;
        }
        .page-title {
            font-weight: 900;
            font-size: 3rem;
            text-transform: uppercase;
            margin-bottom: 5px;
        }
        .product-count {
            color: #888;
            font-size: 0.9rem;
        }

        /* --- Filter & Sort Bar --- */
        .toolbar {
            padding: 15px 0;
            border-bottom: 1px solid #eee;
            background: white;
            position: sticky;
            top: 75px; /* Adjust based on navbar height */
            z-index: 90;
        }
        .filter-btn {
            background: none;
            border: none;
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .sort-select {
            border: none;
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            outline: none;
            background-color: transparent;
            text-align: right;
            cursor: pointer;
        }

        /* --- Product Grid --- */
        .product-card {
            border: none;
            background: transparent;
            margin-bottom: 40px;
            cursor: pointer;
        }
        .card-img-wrapper {
            background-color: var(--card-bg); /* Matches the gray box in screenshot */
            position: relative;
            padding-top: 100%; /* 1:1 Aspect Ratio */
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .card-img-wrapper img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%; /* Floating effect */
            height: auto;
            mix-blend-mode: multiply;
            transition: transform 0.3s ease;
        }
        .product-card:hover .card-img-wrapper img {
            transform: translate(-50%, -50%) scale(1.1);
        }
        
        /* Badges */
        .badge-custom {
            position: absolute;
            top: 15px;
            left: 15px;
            padding: 6px 12px;
            font-size: 0.7rem;
            font-weight: 700;
            text-transform: uppercase;
            z-index: 2;
        }
        .badge-red { background: var(--primary-red); color: white; }
        .badge-new { background: #fff; color: black; }

        /* Wishlist Heart */
        .wishlist-btn {
            position: absolute;
            top: 15px;
            right: 15px;
            width: 35px;
            height: 35px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2;
            transition: all 0.2s;
            border: none;
        }
        .wishlist-btn:hover { color: var(--primary-red); }

        /* Product Details */
        .product-meta {
            padding-top: 15px;
        }
        .brand-label {
            color: #999;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }
        .product-name {
            font-weight: 800;
            font-size: 1.1rem;
            color: #000;
            margin-bottom: 5px;
        }
        .product-price {
            font-weight: 700;
            font-size: 1rem;
            color: #111;
        }

        /* --- Sidebar (Offcanvas) --- */
        .offcanvas-header { font-weight: 700; text-transform: uppercase; }
        .filter-group-title { font-weight: 700; font-size: 0.9rem; margin-bottom: 15px; text-transform: uppercase; }
        .form-check-label { font-size: 0.9rem; color: #555; }
    </style>
</head>
<body>

    <?php include '../header.php'; ?>

    <section class="page-header">
        <div class="container">
            <h1 class="page-title">MEN</h1>
            <p class="product-count">4 products</p>
        </div>
    </section>

    <section class="toolbar">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <button class="filter-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#filterSidebar">
                    <i class="fas fa-filter"></i> Filters
                </button>

                <div class="d-flex align-items-center">
                    <span class="text-muted small me-2">Sort by:</span>
                    <select class="sort-select">
                        <option>Newest</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Popularity</option>
                    </select>
                    <i class="fas fa-chevron-down ms-2 small"></i>
                </div>
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
                                <span class="badge-custom badge-red">BESTSELLER</span>
                                <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Adidas Ultraboost">
                            </div>
                            <div class="product-meta">
                                <div class="brand-label">Adidas</div>
                                <h3 class="product-name">Ultraboost 22</h3>
                                <div class="product-price">$189.99</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <a href="product_detail.php" class="text-decoration-none">
                        <div class="product-card">
                            <div class="card-img-wrapper">
                                <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                <img src="https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Nike Zoom">
                            </div>
                            <div class="product-meta">
                                <div class="brand-label">Nike</div>
                                <h3 class="product-name">Air Zoom Pegasus</h3>
                                <div class="product-price">$120.00</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <a href="product_detail.php" class="text-decoration-none">
                        <div class="product-card">
                            <div class="card-img-wrapper">
                                <span class="badge-custom badge-new">NEW</span>
                                <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                <img src="https://images.unsplash.com/photo-1491553895911-0055eca6402d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Puma Nitro">
                            </div>
                            <div class="product-meta">
                                <div class="brand-label">Puma</div>
                                <h3 class="product-name">Deviate Nitro</h3>
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
                                <img src="https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Nike Air Force">
                            </div>
                            <div class="product-meta">
                                <div class="brand-label">Nike</div>
                                <h3 class="product-name">Air Force 1 '07</h3>
                                <div class="product-price">$110.00</div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="filterSidebar">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Filters</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="mb-4">
                <div class="filter-group-title">Brand</div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="nike">
                    <label class="form-check-label" for="nike">Nike</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="adidas" checked>
                    <label class="form-check-label" for="adidas">Adidas</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="puma">
                    <label class="form-check-label" for="puma">Puma</label>
                </div>
            </div>
            
            <hr>

            <div class="mb-4">
                <div class="filter-group-title">Price</div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="p1">
                    <label class="form-check-label" for="p1">$50 - $100</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="p2" checked>
                    <label class="form-check-label" for="p2">$100 - $150</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="p3" checked>
                    <label class="form-check-label" for="p3">$150 - $200</label>
                </div>
            </div>

            <button class="btn btn-dark w-100 mt-4 rounded-0">APPLY FILTERS</button>
        </div>
    </div>

    <?php include '../footer.php'; ?>

</body>
</html>