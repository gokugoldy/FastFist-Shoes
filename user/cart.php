<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart | Fastfist</title>
    
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
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        h1, h2, h3, h4, h5, .navbar-brand, .btn {
            font-family: 'Montserrat', sans-serif;
        }

        /* --- Page Header --- */
        .page-header {
            padding: 40px 0;
            margin-bottom: 20px;
        }
        .page-title {
            font-weight: 800;
            font-size: 2.5rem;
            text-transform: uppercase;
        }

        /* --- Cart Items --- */
        .cart-item {
            border-bottom: 1px solid #eee;
            padding: 20px 0;
        }
        .cart-item:last-child {
            border-bottom: none;
        }
        
        .cart-img-wrapper {
            background-color: var(--card-bg);
            width: 120px;
            height: 120px;
            position: relative;
            overflow: hidden;
            flex-shrink: 0;
        }
        .cart-img-wrapper img {
            width: 80%;
            height: auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            mix-blend-mode: multiply;
        }

        .item-details {
            padding-left: 20px;
            flex-grow: 1;
        }
        .item-brand {
            font-size: 0.75rem;
            color: #888;
            text-transform: uppercase;
            font-weight: 600;
            margin-bottom: 4px;
        }
        .item-name {
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 5px;
        }
        .item-meta {
            font-size: 0.85rem;
            color: #666;
            margin-bottom: 15px;
        }
        .item-price {
            font-weight: 700;
            font-size: 1.1rem;
        }

        /* Quantity Input */
        .qty-input-group {
            width: 100px;
            display: flex;
            border: 1px solid #ddd;
        }
        .qty-btn {
            background: none;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            color: #555;
        }
        .qty-input {
            width: 100%;
            border: none;
            text-align: center;
            font-size: 0.9rem;
            font-weight: 600;
            outline: none;
        }
        
        .remove-btn {
            color: #999;
            font-size: 0.9rem;
            background: none;
            border: none;
            text-decoration: underline;
            padding: 0;
            margin-top: 10px;
            cursor: pointer;
        }
        .remove-btn:hover { color: var(--primary-red); }

        /* --- Order Summary --- */
        .summary-card {
            background-color: #f9f9f9;
            padding: 30px;
            margin-top: 20px;
        }
        .summary-title {
            font-weight: 700;
            text-transform: uppercase;
            font-size: 1.2rem;
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 15px;
        }
        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            font-size: 0.95rem;
            color: #555;
        }
        .summary-total {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            font-weight: 800;
            font-size: 1.2rem;
            color: #000;
        }
        .btn-checkout {
            background-color: #000;
            color: white;
            width: 100%;
            padding: 15px;
            text-transform: uppercase;
            font-weight: 700;
            border-radius: 0;
            border: none;
            margin-top: 25px;
            transition: all 0.3s;
        }
        .btn-checkout:hover {
            background-color: #333;
            color: white;
        }
        /* Responsive */
        @media (max-width: 768px) {
            .cart-item { flex-direction: column; align-items: flex-start; }
            .cart-img-wrapper { margin-bottom: 15px; }
            .item-details { padding-left: 0; width: 100%; }
            .price-col { display: flex; justify-content: space-between; width: 100%; align-items: center; margin-top: 15px; }
        }
    </style>
</head>
<body>

    <?php include '../header.php'; ?>

    <div class="container page-header">
        <h1 class="page-title">Shopping Cart</h1>
        <p class="text-muted">2 items in your bag</p>
    </div>

    <div class="container mb-5">
        <div class="row">
            
            <div class="col-lg-8">
                
                <div class="cart-item d-flex align-items-center">
                    <div class="cart-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Shoe">
                    </div>
                    <div class="item-details d-md-flex justify-content-between align-items-center w-100">
                        <div class="me-auto">
                            <div class="item-brand">Adidas</div>
                            <h3 class="item-name">Ultraboost 22</h3>
                            <div class="item-meta">Size: 10 | Color: Red/White</div>
                            <button class="remove-btn"><i class="far fa-trash-alt me-1"></i> Remove</button>
                        </div>
                        
                        <div class="price-col text-end ps-md-4 mt-3 mt-md-0">
                            <div class="qty-input-group mb-2 ms-auto ms-md-0">
                                <button class="qty-btn">-</button>
                                <input type="text" class="qty-input" value="1">
                                <button class="qty-btn">+</button>
                            </div>
                            <div class="item-price">$189.99</div>
                        </div>
                    </div>
                </div>

                <div class="cart-item d-flex align-items-center">
                    <div class="cart-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Shoe">
                    </div>
                    <div class="item-details d-md-flex justify-content-between align-items-center w-100">
                        <div class="me-auto">
                            <div class="item-brand">Nike</div>
                            <h3 class="item-name">Air Zoom Pegasus</h3>
                            <div class="item-meta">Size: 9.5 | Color: Green/Black</div>
                            <button class="remove-btn"><i class="far fa-trash-alt me-1"></i> Remove</button>
                        </div>
                        
                        <div class="price-col text-end ps-md-4 mt-3 mt-md-0">
                            <div class="qty-input-group mb-2 ms-auto ms-md-0">
                                <button class="qty-btn">-</button>
                                <input type="text" class="qty-input" value="1">
                                <button class="qty-btn">+</button>
                            </div>
                            <div class="item-price">$120.00</div>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <a href="men.php" class="text-dark text-decoration-none fw-bold small"><i class="fas fa-arrow-left me-2"></i> CONTINUE SHOPPING</a>
                </div>

            </div>

            <div class="col-lg-4">
                <div class="summary-card">
                    <h4 class="summary-title">Order Summary</h4>
                    
                    <div class="summary-row">
                        <span>Subtotal</span>
                        <span>$309.99</span>
                    </div>
                    <div class="summary-row">
                        <span>Shipping Estimate</span>
                        <span>$0.00</span>
                    </div>
                    <div class="summary-row">
                        <span>Tax Estimate</span>
                        <span>$24.80</span>
                    </div>

                    <div class="summary-total">
                        <span>Total</span>
                        <span>$334.79</span>
                    </div>

                    <a href="checkout.php" class="btn btn-checkout text-decoration-none">Proceed to Checkout</a>
                    
                    <div class="text-center mt-3">
                        <i class="fab fa-cc-visa fa-lg mx-1 text-muted"></i>
                        <i class="fab fa-cc-mastercard fa-lg mx-1 text-muted"></i>
                        <i class="fab fa-cc-amex fa-lg mx-1 text-muted"></i>
                        <i class="fab fa-cc-paypal fa-lg mx-1 text-muted"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include '../footer.php'; ?>

</body>
</html>