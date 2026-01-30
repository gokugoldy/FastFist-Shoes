<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | Fastfist</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-red: #ff3c3c;
            --dark-bg: #1a1a1a;
            --light-gray: #f8f9fa;
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
        .page-header { background-color: #f8f9fa; padding: 40px 0; margin-bottom: 40px; }
        .page-title { font-weight: 800; text-transform: uppercase; margin: 0; }

        /* --- Forms --- */
        .section-title { font-size: 1.1rem; font-weight: 700; text-transform: uppercase; margin-bottom: 25px; padding-bottom: 15px; border-bottom: 1px solid #eee; }
        .form-label { font-size: 0.75rem; font-weight: 700; text-transform: uppercase; color: #888; margin-bottom: 8px; }
        .form-control, .form-select { border-radius: 0; padding: 12px 15px; border: 1px solid #ddd; font-size: 0.9rem; }
        .form-control:focus, .form-select:focus { box-shadow: none; border-color: #000; }
        
        /* --- Payment Section --- */
        .payment-option { border: 1px solid #eee; padding: 15px; margin-bottom: 10px; cursor: pointer; transition: 0.2s; display: flex; align-items: center; justify-content: space-between; }
        .payment-option:hover, .payment-option.active { border-color: #000; background-color: #fafafa; }
        .payment-option input { margin-right: 15px; }

        /* --- Order Summary Card --- */
        .summary-card { background: #f9f9f9; padding: 30px; position: sticky; top: 100px; }
        .item-row { display: flex; align-items: center; margin-bottom: 20px; }
        .item-img { width: 60px; height: 60px; background: #fff; object-fit: cover; border: 1px solid #eee; margin-right: 15px; padding: 5px; }
        .item-info h6 { margin: 0; font-size: 0.9rem; font-weight: 700; }
        .item-info small { color: #888; font-size: 0.8rem; }
        .item-price { margin-left: auto; font-weight: 600; font-size: 0.9rem; }
        
        .summary-totals { margin-top: 30px; border-top: 1px solid #ddd; padding-top: 20px; }
        .total-row { display: flex; justify-content: space-between; margin-bottom: 10px; font-size: 0.9rem; color: #555; }
        .total-row.final { font-size: 1.2rem; font-weight: 800; color: #000; margin-top: 15px; border-top: 1px solid #ddd; padding-top: 15px; }

        .btn-place-order { background: #000; color: #fff; width: 100%; padding: 15px; text-transform: uppercase; font-weight: 700; border: none; border-radius: 0; margin-top: 25px; transition: 0.3s; }
        .btn-place-order:hover { background: #333; color: white; }

        @media (max-width: 991px) {
            .summary-card { position: static; margin-top: 30px; }
        }
    </style>
</head>
<body>

    <?php include '../header.php'; ?>

    <section class="page-header">
        <div class="container">
            <h1 class="page-title text-center">Checkout</h1>
        </div>
    </section>

    <div class="container mb-5">
        <div class="row g-5">
            
            <div class="col-lg-7">
                
                <div class="mb-5">
                    <h4 class="section-title">Billing Details</h4>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Country</label>
                            <select class="form-select">
                                <option value="">Select Country...</option>
                                <option value="US">United States</option>
                                <option value="UK">United Kingdom</option>
                                <option value="CA">Canada</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Street Address</label>
                            <input type="text" class="form-control mb-2" placeholder="House number and street name">
                            <input type="text" class="form-control" placeholder="Apartment, suite, unit, etc. (optional)">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Town / City</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Postcode / ZIP</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Phone</label>
                            <input type="tel" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control">
                        </div>
                    </div>
                </div>

                <div>
                    <h4 class="section-title">Payment Method</h4>
                    
                    <div class="payment-option active" onclick="selectPayment(this)">
                        <div class="d-flex align-items-center">
                            <input type="radio" name="payment" checked>
                            <span class="fw-bold ms-2">Credit Card</span>
                        </div>
                        <div>
                            <i class="fab fa-cc-visa text-muted fa-lg"></i>
                            <i class="fab fa-cc-mastercard text-muted fa-lg"></i>
                        </div>
                    </div>
                    
                    <div class="bg-light p-3 mb-3 border">
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label">Card Number</label>
                                <input type="text" class="form-control" placeholder="0000 0000 0000 0000">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Expiry Date</label>
                                <input type="text" class="form-control" placeholder="MM/YY">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">CVV</label>
                                <input type="text" class="form-control" placeholder="123">
                            </div>
                        </div>
                    </div>

                    <div class="payment-option" onclick="selectPayment(this)">
                        <div class="d-flex align-items-center">
                            <input type="radio" name="payment">
                            <span class="fw-bold ms-2">PayPal</span>
                        </div>
                        <i class="fab fa-paypal text-primary fa-lg"></i>
                    </div>
                </div>

            </div>

            <div class="col-lg-5">
                <div class="summary-card">
                    <h4 class="section-title">Your Order</h4>
                    
                    <div class="item-row">
                        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Shoe" class="item-img">
                        <div class="item-info">
                            <h6>Ultraboost 22</h6>
                            <small>Size: 10 | Qty: 1</small>
                        </div>
                        <div class="item-price">$189.99</div>
                    </div>

                    <div class="item-row">
                        <img src="https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Shoe" class="item-img">
                        <div class="item-info">
                            <h6>Air Zoom Pegasus</h6>
                            <small>Size: 9.5 | Qty: 1</small>
                        </div>
                        <div class="item-price">$120.00</div>
                    </div>

                    <div class="summary-totals">
                        <div class="total-row">
                            <span>Subtotal</span>
                            <span>$309.99</span>
                        </div>
                        <div class="total-row">
                            <span>Shipping</span>
                            <span>Free</span>
                        </div>
                        <div class="total-row">
                            <span>Tax (8%)</span>
                            <span>$24.80</span>
                        </div>
                        <div class="total-row final">
                            <span>Total</span>
                            <span>$334.79</span>
                        </div>
                    </div>

                    <div class="form-check mt-3">
                        <input class="form-check-input" type="checkbox" id="terms" required>
                        <label class="form-check-label small" for="terms">
                            I have read and agree to the website <a href="#" class="text-dark fw-bold">terms and conditions</a>.
                        </label>
                    </div>

                    <button class="btn-place-order">Place Order</button>
                    
                    <div class="text-center mt-3 text-muted small">
                        <i class="fas fa-lock me-1"></i> Secure Checkout
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include '../footer.php'; ?>
    <script>
        function selectPayment(element) {
            // Remove active class from all options
            document.querySelectorAll('.payment-option').forEach(el => el.classList.remove('active'));
            document.querySelectorAll('input[name="payment"]').forEach(el => el.checked = false);
            
            // Add active class to clicked option
            element.classList.add('active');
            element.querySelector('input').checked = true;
        }
    </script>
</body>
</html>