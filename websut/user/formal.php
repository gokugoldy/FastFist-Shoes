<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formal Collection | Fastfist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root { --primary-red: #ff3c3c; --card-bg: #e8e8e8; }
        body { font-family: 'Open Sans', sans-serif; color: #1a1a1a; }
        h1, h2, h3, h4, h5, .navbar-brand, .btn { font-family: 'Montserrat', sans-serif; }
        .page-header { background-color: #f8f9fa; padding: 60px 0; text-align: left; }
        .page-title { font-weight: 900; font-size: 3rem; text-transform: uppercase; margin-bottom: 5px; }
        .product-count { color: #888; font-size: 0.9rem; }
        .toolbar { padding: 15px 0; border-bottom: 1px solid #eee; background: white; position: sticky; top: 75px; z-index: 90; }
        
        .product-card { border: none; background: transparent; margin-bottom: 40px; cursor: pointer; }
        /* Using cover for formal shoes as they are often lifestyle shots */
        .card-img-wrapper { background-color: var(--card-bg); position: relative; padding-top: 100%; overflow: hidden; transition: all 0.3s ease; }
        .card-img-wrapper img { position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease; }
        .product-card:hover .card-img-wrapper img { transform: scale(1.1); }
        
        .badge-custom { position: absolute; top: 15px; left: 15px; padding: 6px 12px; font-size: 0.7rem; font-weight: 700; text-transform: uppercase; z-index: 2; }
        .badge-dark { background: #000; color: white; }
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
            <h1 class="page-title">FORMAL</h1>
            <p class="product-count">3 products</p>
        </div>
    </section>

    <section class="toolbar">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <button class="btn fw-bold" type="button"><i class="fas fa-filter"></i> Filters</button>
                <div class="small">Sort by: <strong>Relevance</strong></div>
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
                                <span class="badge-custom badge-dark">LUXURY</span>
                                <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                <img src="https://images.unsplash.com/photo-1614252369475-531eba835eb1?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Leather Oxford">
                            </div>
                            <div class="product-meta">
                                <div class="brand-label">Allen Edmonds</div>
                                <h3 class="product-name">Park Avenue Oxford</h3>
                                <div class="product-price">$395.00</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="product_detail.php" class="text-decoration-none">
                        <div class="product-card">
                            <div class="card-img-wrapper">
                                <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                <img src="https://images.unsplash.com/photo-1550928431-ee0ec6db30d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Loafer">
                            </div>
                            <div class="product-meta">
                                <div class="brand-label">Gucci</div>
                                <h3 class="product-name">Horsebit Loafer</h3>
                                <div class="product-price">$850.00</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="product_detail.php" class="text-decoration-none">
                        <div class="product-card">
                            <div class="card-img-wrapper">
                                <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                <img src="https://images.unsplash.com/photo-1533867617858-e7b97e060509?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Derby Shoe">
                            </div>
                            <div class="product-meta">
                                <div class="brand-label">Clarks</div>
                                <h3 class="product-name">Tilden Plain Derby</h3>
                                <div class="product-price">$90.00</div>
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