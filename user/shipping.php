<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipping Policy | Fastfist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <style>
        :root { --primary-red: #ff3c3c; --dark-bg: #1a1a1a; }
        body { font-family: 'Open Sans', sans-serif; color: #1a1a1a; display: flex; flex-direction: column; min-height: 100vh; }
        h1, h2, h3, h4, h5, .navbar-brand { font-family: 'Montserrat', sans-serif; }
        
        .page-header { background-color: #f8f9fa; padding: 60px 0; margin-bottom: 40px; }
        .page-title { font-weight: 800; text-transform: uppercase; margin: 0; }

        .content-section h3 { font-weight: 700; margin-top: 30px; margin-bottom: 15px; font-size: 1.2rem; }
        .content-section p { color: #555; line-height: 1.8; margin-bottom: 20px; }
    </style>
</head>
<body>

    <?php include '../header.php'; ?>

    <section class="page-header">
        <div class="container text-center">
            <h1 class="page-title">Shipping Policy</h1>
        </div>
    </section>

    <div class="container mb-5 content-section">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h3>Domestic Shipping</h3>
                <p>We offer free standard shipping on all domestic orders over $100. For orders under $100, a flat rate of $9.95 applies. Standard shipping typically takes 3-5 business days from the date of dispatch.</p>
                
                <h3>Express Delivery</h3>
                <p>Need your gear sooner? We offer 2-Day Express shipping for $15.00 and Next Day Air for $25.00. Please note that orders must be placed before 2 PM EST to be processed the same day. Express orders placed on weekends will ship the following business day.</p>

                <h3>International Shipping</h3>
                <p>We proudly ship globally via DHL Express. International shipping rates are calculated at checkout based on destination and package weight. Please be aware that customs duties, taxes, and fees are the responsibility of the recipient and may be charged upon delivery.</p>

                <h3>Order Tracking</h3>
                <p>Once your order has been dispatched, you will receive an email containing your tracking number and a link to track your package. You can also log in to your account to check the status of your shipment at any time.</p>
            </div>
        </div>
    </div>

    <?php include '../footer.php'; ?>
</body>
</html>