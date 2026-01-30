<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kids' Collection | Fastfist</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-red: #ff3c3c;
            --dark-bg: #1a1a1a;
            --light-bg: #f9f9f9;
            --card-bg: #e8e8e8;
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
            top: 75px; 
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
            background-color: var(--card-bg);
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
            width: 80%;
            height: auto;
            mix-blend-mode: multiply; /* Blends white backgrounds into the gray card */
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
        .badge-blue { background: #3b82f6; color: white; }

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
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .wishlist-btn:hover { color: var(--primary-red); }

        /* Product Details */
        .product-meta { padding-top: 15px; }
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
            <h1 class="page-title">KIDS</h1>
            <p class="product-count">3 products</p>
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
                                <span class="badge-custom badge-red">POPULAR</span>
                                <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                <img src="https://images.unsplash.com/photo-1514989940723-e8875ea6ab7d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Kids Runner">
                            </div>
                            <div class="product-meta">
                                <div class="brand-label">Nike</div>
                                <h3 class="product-name">Kids' Revolution 6</h3>
                                <div class="product-price">$55.00</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <a href="product_detail.php" class="text-decoration-none">
                        <div class="product-card">
                            <div class="card-img-wrapper">
                                <span class="badge-custom badge-blue">VELCRO</span>
                                <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                <img src="https://images.unsplash.com/photo-1515347619252-60a6bf4fffce?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Kids Velcro">
                            </div>
                            <div class="product-meta">
                                <div class="brand-label">Adidas</div>
                                <h3 class="product-name">Stan Smith Velcro</h3>
                                <div class="product-price">$48.00</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <a href="product_detail.php" class="text-decoration-none">
                        <div class="product-card">
                            <div class="card-img-wrapper">
                                <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                <img src="https://images.unsplash.com/photo-1579338559194-a162d19bf842?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Kids High Top">
                            </div>
                            <div class="product-meta">
                                <div class="brand-label">Puma</div>
                                <h3 class="product-name">Rebound LayUp</h3>
                                <div class="product-price">$60.00</div>
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
                    <input class="form-check-input" type="checkbox" id="nike" checked>
                    <label class="form-check-label" for="nike">Nike</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="adidas">
                    <label class="form-check-label" for="adidas">Adidas</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="puma">
                    <label class="form-check-label" for="puma">Puma</label>
                </div>
            </div>
            
            <hr>

            <div class="mb-4">
                <div class="filter-group-title">Size (Kids)</div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="s1">
                    <label class="form-check-label" for="s1">10k - 12k</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="s2">
                    <label class="form-check-label" for="s2">13k - 2</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="s3">
                    <label class="form-check-label" for="s3">3 - 6</label>
                </div>
            </div>

            <button class="btn btn-dark w-100 mt-4 rounded-0">APPLY FILTERS</button>
        </div>
    </div>

    <?php include '../footer.php'; ?>

</body>
</html>