<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casual Collection | Fastfist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root { --primary-red: #ff3c3c; --dark-bg: #1a1a1a; --card-bg: #e8e8e8; }
        body { font-family: 'Open Sans', sans-serif; color: #1a1a1a; }
        h1, h2, h3, h4, h5, .navbar-brand, .btn { font-family: 'Montserrat', sans-serif; }
        .page-header { background-color: #f8f9fa; padding: 60px 0; text-align: left; }
        .page-title { font-weight: 900; font-size: 3rem; text-transform: uppercase; margin-bottom: 5px; }
        .product-count { color: #888; font-size: 0.9rem; }
        .toolbar { padding: 15px 0; border-bottom: 1px solid #eee; background: white; position: sticky; top: 75px; z-index: 90; }
        .product-card { border: none; background: transparent; margin-bottom: 40px; cursor: pointer; }
        .card-img-wrapper { background-color: var(--card-bg); position: relative; padding-top: 100%; overflow: hidden; transition: all 0.3s ease; }
        .card-img-wrapper img { position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 80%; mix-blend-mode: multiply; transition: transform 0.3s ease; }
        .product-card:hover .card-img-wrapper img { transform: translate(-50%, -50%) scale(1.1); }
        .badge-custom { position: absolute; top: 15px; left: 15px; padding: 6px 12px; font-size: 0.7rem; font-weight: 700; text-transform: uppercase; z-index: 2; }
        .badge-yellow { background: #eab308; color: black; }
        .wishlist-btn { position: absolute; top: 15px; right: 15px; width: 35px; height: 35px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; z-index: 2; border: none; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        
        .product-meta { padding-top: 15px; }
        .brand-label { color: #999; font-size: 0.75rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 5px; }
        .product-name { font-weight: 800; font-size: 1.1rem; color: #000; margin-bottom: 5px; }
        .product-price { font-weight: 700; font-size: 1rem; color: #111; }
    </style>
</head>
<body>
    <?php include '../header.php'; ?>

    <section class="page-header">
        <div class="container">
            <h1 class="page-title">CASUAL</h1>
            <p class="product-count">3 products</p>
        </div>
    </section>

    <section class="toolbar">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <button class="btn fw-bold" type="button"><i class="fas fa-filter"></i> Filters</button>
                <div class="small">Sort by: <strong>Newest</strong></div>
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
                                <span class="badge-custom badge-yellow">TRENDING</span>
                                <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                <img src="https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Vans">
                            </div>
                            <div class="product-meta">
                                <div class="brand-label">Vans</div>
                                <h3 class="product-name">Old Skool Classic</h3>
                                <div class="product-price">$75.00</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="product_detail.php" class="text-decoration-none">
                        <div class="product-card">
                            <div class="card-img-wrapper">
                                <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                <img src="https://images.unsplash.com/photo-1595341888016-a392ef81b7de?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Casual Sneaker">
                            </div>
                            <div class="product-meta">
                                <div class="brand-label">Converse</div>
                                <h3 class="product-name">Chuck 70 High</h3>
                                <div class="product-price">$85.00</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="product_detail.php" class="text-decoration-none">
                        <div class="product-card">
                            <div class="card-img-wrapper">
                                <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                <img src="https://images.unsplash.com/photo-1600269452121-4f2416e55c28?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="White Sneaker">
                            </div>
                            <div class="product-meta">
                                <div class="brand-label">Adidas</div>
                                <h3 class="product-name">Stan Smith</h3>
                                <div class="product-price">$95.00</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php include '../footer.php'; ?>
</body>
</html>