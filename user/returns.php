<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Returns & Exchanges | Fastfist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <style>
        :root { --primary-red: #ff3c3c; --dark-bg: #1a1a1a; }
        body { font-family: 'Open Sans', sans-serif; color: #1a1a1a; display: flex; flex-direction: column; min-height: 100vh; }
        h1, h2, h3, h4, h5, .navbar-brand { font-family: 'Montserrat', sans-serif; }
        
        .page-header { background-color: #f8f9fa; padding: 60px 0; margin-bottom: 40px; }
        .page-title { font-weight: 800; text-transform: uppercase; margin: 0; }

        .step-card { background: #fff; border: 1px solid #eee; padding: 30px; height: 100%; text-align: center; }
        .step-number { font-size: 2.5rem; color: #eee; font-weight: 800; line-height: 1; margin-bottom: 15px; }
    </style>
</head>
<body>

    <?php include '../header.php'; ?>

    <section class="page-header">
        <div class="container text-center">
            <h1 class="page-title">Returns & Exchanges</h1>
        </div>
    </section>

    <div class="container mb-5">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <p class="lead text-muted">We want you to love your Fastfist shoes. If you aren't completely happy with your purchase, you can return it within 30 days of the delivery date, provided it is unworn and in original condition.</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="step-card">
                    <div class="step-number">01</div>
                    <h4 class="fw-bold mb-3">Initiate Return</h4>
                    <p class="text-muted small">Log in to your account and visit the "My Orders" section. Select the item you wish to return and choose your reason. You'll be able to print your prepaid shipping label instantly.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="step-card">
                    <div class="step-number">02</div>
                    <h4 class="fw-bold mb-3">Pack It Up</h4>
                    <p class="text-muted small">Place the item (unworn, with tags attached) back in its original box and packaging. Securely tape the box and attach the printed shipping label to the outside.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="step-card">
                    <div class="step-number">03</div>
                    <h4 class="fw-bold mb-3">Ship It</h4>
                    <p class="text-muted small">Drop the package off at any authorized carrier location. Once we receive your return, your refund will be processed to your original payment method within 5-7 days.</p>
                </div>
            </div>
        </div>
    </div>

    <?php include '../footer.php'; ?>
</body>
</html>