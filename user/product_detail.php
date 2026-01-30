<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adidas Ultraboost 22 | Fastfist</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-red: #ff3c3c;
            --dark-bg: #1a1a1a;
            --card-bg: #e8e8e8;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            color: #1a1a1a;
        }

        h1, h2, h3, h4, h5, .navbar-brand, .btn {
            font-family: 'Montserrat', sans-serif;
        }

        /* --- Breadcrumbs --- */
        .breadcrumb-nav { padding: 20px 0; font-size: 0.85rem; color: #888; }
        .breadcrumb-nav a { color: #888; text-decoration: none; }
        .breadcrumb-nav span { margin: 0 10px; }

        /* --- Product Gallery --- */
        .main-img-container {
            background-color: var(--card-bg);
            padding: 40px;
            position: relative;
            margin-bottom: 20px;
            min-height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .main-img {
            width: 80%;
            height: auto;
            mix-blend-mode: multiply;
            transition: transform 0.3s ease;
        }
        .main-img:hover { transform: scale(1.05); }

        .thumbnail-container { display: flex; gap: 15px; }
        .thumb {
            width: 80px;
            height: 80px;
            background-color: var(--card-bg);
            padding: 10px;
            cursor: pointer;
            border: 2px solid transparent;
            transition: 0.2s;
        }
        .thumb:hover, .thumb.active { border-color: #000; }
        .thumb img { width: 100%; height: 100%; object-fit: contain; mix-blend-mode: multiply; }

        /* --- Product Info --- */
        .product-brand { font-weight: 700; color: #999; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem; margin-bottom: 5px; }
        .product-title { font-weight: 800; font-size: 2.5rem; line-height: 1.1; margin-bottom: 15px; }
        .product-price { font-size: 1.5rem; font-weight: 700; color: #000; margin-bottom: 20px; }
        
        .rating { color: #f59e0b; font-size: 0.9rem; margin-bottom: 20px; }
        .rating span { color: #888; margin-left: 5px; font-size: 0.8rem; }

        .description { color: #666; line-height: 1.7; margin-bottom: 30px; }

        /* Selectors */
        .selector-label { font-weight: 700; font-size: 0.9rem; text-transform: uppercase; margin-bottom: 10px; display: block; }
        
        /* Color Circles */
        .color-options { display: flex; gap: 15px; margin-bottom: 30px; }
        .color-circle {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            position: relative;
        }
        .color-circle.active::after {
            content: '';
            position: absolute;
            top: -4px; left: -4px; right: -4px; bottom: -4px;
            border: 1px solid #000;
            border-radius: 50%;
        }

        /* Size Boxes */
        .size-options { display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 30px; }
        .size-box {
            width: 50px;
            height: 50px;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s;
        }
        .size-box:hover { border-color: #000; }
        .size-box.active { background: #000; color: #fff; border-color: #000; }
        .size-box.disabled { color: #ccc; border-color: #eee; cursor: not-allowed; background: #fafafa; }

        /* Actions */
        .action-row { display: flex; gap: 20px; margin-bottom: 40px; }
        .btn-add-cart {
            background: #000;
            color: #fff;
            flex-grow: 1;
            padding: 15px;
            text-transform: uppercase;
            font-weight: 700;
            border: none;
            border-radius: 0;
            transition: 0.3s;
        }
        .btn-add-cart:hover { background: #333; color: white; }
        
        .btn-wishlist {
            width: 54px;
            border: 1px solid #ddd;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            cursor: pointer;
            transition: 0.2s;
        }
        .btn-wishlist:hover { border-color: var(--primary-red); color: var(--primary-red); }

        /* Accordion Details */
        .accordion-button:not(.collapsed) { color: #000; background-color: transparent; font-weight: 700; }
        .accordion-button { font-weight: 600; color: #333; box-shadow: none !important; padding: 20px 0; border-bottom: 1px solid #eee; }
        .accordion-item { border: none; }

        /* Related Products (Reusing Card Style) */
        .product-card { border: none; margin-bottom: 30px; cursor: pointer; }
        .card-img-wrapper {
            background-color: var(--card-bg);
            position: relative;
            padding-top: 100%;
            overflow: hidden;
            transition: 0.3s;
        }
        .card-img-wrapper img {
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
            mix-blend-mode: multiply;
        }
        .wishlist-icon { position: absolute; top: 15px; right: 15px; width: 35px; height: 35px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; }
        .product-meta { padding-top: 15px; }
        .brand-label { color: #999; font-size: 0.75rem; font-weight: 600; text-transform: uppercase; }
        .product-name { font-weight: 800; font-size: 1.1rem; margin: 5px 0; }
        .product-price-sm { font-weight: 700; }

        @media (max-width: 768px) {
            .main-img-container { min-height: 300px; padding: 20px; }
            .product-title { font-size: 1.8rem; }
        }
    </style>
</head>
<body>

    <?php include '../header.php'; ?>

    <div class="container breadcrumb-nav">
        <a href="../index.php">Home</a> <span>/</span> 
        <a href="men.php">Men</a> <span>/</span> 
        <a href="#">Running</a> <span>/</span> 
        Ultraboost 22
    </div>

    <section class="container mb-5">
        <div class="row">
            <div class="col-lg-7">
                <div class="main-img-container">
                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Main Product" class="main-img" id="mainImage">
                </div>
                <div class="thumbnail-container">
                    <div class="thumb active" onclick="changeImage(this, 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')">
                        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="View 1">
                    </div>
                    <div class="thumb" onclick="changeImage(this, 'https://images.unsplash.com/photo-1608231387042-66d1773070a5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')">
                        <img src="https://images.unsplash.com/photo-1608231387042-66d1773070a5?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="View 2">
                    </div>
                    <div class="thumb" onclick="changeImage(this, 'https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')">
                        <img src="https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="View 3">
                    </div>
                </div>
            </div>

            <div class="col-lg-5 mt-4 mt-lg-0">
                <div class="product-brand">Adidas</div>
                <h1 class="product-title">Ultraboost 22</h1>
                <div class="rating">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    <span>(124 Reviews)</span>
                </div>
                <div class="product-price">$189.99</div>
                
                <p class="description">
                    Experience energy return like never before. The Ultraboost 22 features a Linear Energy Push system and a Continental™ Rubber outsole. The upper is made with a high-performance yarn which contains at least 50% Parley Ocean Plastic.
                </p>

                <span class="selector-label">Color: Solar Red</span>
                <div class="color-options">
                    <div class="color-circle active" style="background-color: #ff3c3c;"></div>
                    <div class="color-circle" style="background-color: #000;"></div>
                    <div class="color-circle" style="background-color: #fff; border: 1px solid #ddd;"></div>
                </div>

                <span class="selector-label">Size (US)</span>
                <div class="size-options">
                    <div class="size-box">7</div>
                    <div class="size-box">7.5</div>
                    <div class="size-box active">8</div>
                    <div class="size-box">8.5</div>
                    <div class="size-box">9</div>
                    <div class="size-box disabled">9.5</div>
                    <div class="size-box">10</div>
                    <div class="size-box">11</div>
                </div>

                <div class="action-row">
                    <button class="btn-add-cart">Add to Cart</button>
                    <div class="btn-wishlist"><i class="far fa-heart"></i></div>
                </div>

                <div class="accordion" id="productAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#details">Product Details</button>
                        </h2>
                        <div id="details" class="accordion-collapse collapse show" data-bs-parent="#productAccordion">
                            <div class="accordion-body">
                                <ul class="list-unstyled small text-muted">
                                    <li>• Regular fit</li>
                                    <li>• Lace closure</li>
                                    <li>• PRIMEKNIT textile upper</li>
                                    <li>• Soft heel fit</li>
                                    <li>• BOOST midsole</li>
                                    <li>• Weight: 11.7 oz</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#shipping">Shipping & Returns</button>
                        </h2>
                        <div id="shipping" class="accordion-collapse collapse" data-bs-parent="#productAccordion">
                            <div class="accordion-body small text-muted">
                                Free standard shipping on orders over $100. Returns accepted within 30 days of delivery.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="container py-5">
        <h3 class="fw-bold mb-4 text-uppercase">You May Also Like</h3>
        <div class="row">
            <div class="col-6 col-md-3">
                <a href="product_detail.php" class="text-decoration-none">
                    <div class="product-card">
                        <div class="card-img-wrapper">
                            <div class="wishlist-icon"><i class="far fa-heart"></i></div>
                            <img src="https://images.unsplash.com/photo-1600185365926-3a2ce3cdb9eb?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Shoe">
                        </div>
                        <div class="product-meta">
                            <div class="brand-label">Nike</div>
                            <h5 class="product-name small">Air Max 90</h5>
                            <div class="product-price-sm">$130.00</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="product_detail.php" class="text-decoration-none">
                    <div class="product-card">
                        <div class="card-img-wrapper">
                            <div class="wishlist-icon"><i class="far fa-heart"></i></div>
                            <img src="https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Shoe">
                        </div>
                        <div class="product-meta">
                            <div class="brand-label">Nike</div>
                            <h5 class="product-name small">Air Force 1</h5>
                            <div class="product-price-sm">$110.00</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="product_detail.php" class="text-decoration-none">
                    <div class="product-card">
                        <div class="card-img-wrapper">
                            <div class="wishlist-icon"><i class="far fa-heart"></i></div>
                            <img src="https://images.unsplash.com/photo-1514989940723-e8875ea6ab7d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Shoe">
                        </div>
                        <div class="product-meta">
                            <div class="brand-label">Adidas</div>
                            <h5 class="product-name small">NMD_R1</h5>
                            <div class="product-price-sm">$150.00</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="product_detail.php" class="text-decoration-none">
                    <div class="product-card">
                        <div class="card-img-wrapper">
                            <div class="wishlist-icon"><i class="far fa-heart"></i></div>
                            <img src="https://images.unsplash.com/photo-1605348532760-6753d2c43329?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Shoe">
                        </div>
                        <div class="product-meta">
                            <div class="brand-label">Nike</div>
                            <h5 class="product-name small">Pegasus 40</h5>
                            <div class="product-price-sm">$135.00</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <?php include '../footer.php'; ?>
    
    <script>
        function changeImage(element, src) {
            document.getElementById('mainImage').src = src;
            
            // Update active state
            const thumbs = document.querySelectorAll('.thumb');
            thumbs.forEach(thumb => thumb.classList.remove('active'));
            element.classList.add('active');
        }
    </script>
</body>