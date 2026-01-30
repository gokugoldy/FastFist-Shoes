<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Fastfist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <style>
        :root { --primary-red: #ff3c3c; --dark-bg: #1a1a1a; }
        body { font-family: 'Open Sans', sans-serif; color: #1a1a1a; display: flex; flex-direction: column; min-height: 100vh; }
        h1, h2, h3, h4, h5, .navbar-brand, .btn { font-family: 'Montserrat', sans-serif; }
        
        .page-header { background-color: #f8f9fa; padding: 60px 0; margin-bottom: 40px; }
        .page-title { font-weight: 800; text-transform: uppercase; margin: 0; }
        
        /* Form & Info Styles */
        .form-label { font-size: 0.8rem; font-weight: 700; text-transform: uppercase; color: #888; }
        .form-control { border-radius: 0; padding: 12px; border: 1px solid #ddd; }
        .form-control:focus { box-shadow: none; border-color: #000; }
        .btn-black { background: #000; color: #fff; padding: 12px 30px; border: none; font-weight: 700; text-transform: uppercase; border-radius: 0; transition: 0.3s; }
        .btn-black:hover { background: #333; color: white; }
        
        .contact-info-card { background: #f9f9f9; padding: 40px; height: 100%; }
        .info-item { margin-bottom: 25px; }
        .info-label { font-weight: 700; display: block; margin-bottom: 5px; text-transform: uppercase; font-size: 0.85rem; color: #000; }
    </style>
</head>
<body>

    <?php include '../header.php'; ?>

    <section class="page-header">
        <div class="container text-center">
            <h1 class="page-title">Contact Us</h1>
        </div>
    </section>

    <div class="container mb-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <h3 class="fw-bold mb-4 h4">Get in Touch</h3>
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Your name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Your email">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Subject</label>
                        <input type="text" class="form-control" placeholder="What can we help you with?">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Message</label>
                        <textarea class="form-control" rows="5" placeholder="Your message..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-black">Send Message</button>
                </form>
            </div>
            
            <div class="col-lg-5">
                <div class="contact-info-card">
                    <h4 class="fw-bold mb-4 h5 text-uppercase">Customer Support</h4>
                    <div class="info-item">
                        <span class="info-label">Address</span>
                        <p class="text-muted mb-0 small">123 Footwear Blvd, Suite 100<br>New York, NY 10012</p>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Email</span>
                        <p class="text-muted mb-0 small">support@fastfiststore.com</p>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Phone</span>
                        <p class="text-muted mb-0 small">+1 (800) 123-4567</p>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Hours</span>
                        <p class="text-muted mb-0 small">Mon - Fri: 9am - 6pm EST</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../footer.php'; ?>
</body>
</html>