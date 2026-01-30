<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ | Fastfist</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <style>
        :root { --primary-red: #ff3c3c; --dark-bg: #1a1a1a; --light-gray: #f8f9fa; }
        body { font-family: 'Open Sans', sans-serif; color: #1a1a1a; display: flex; flex-direction: column; min-height: 100vh; }
        h1, h2, h3, h4, h5, .navbar-brand, .btn, .accordion-button { font-family: 'Montserrat', sans-serif; }

        /* --- Page Header --- */
        .page-header { background-color: #f8f9fa; padding: 60px 0; margin-bottom: 40px; }
        .page-title { font-weight: 800; text-transform: uppercase; margin: 0; }

        /* --- FAQ Accordion --- */
        .accordion-item { border: none; border-bottom: 1px solid #eee; }
        .accordion-button { font-weight: 700; font-size: 1rem; color: #000; background: transparent; box-shadow: none !important; padding: 20px 0; }
        .accordion-button:not(.collapsed) { color: var(--primary-red); background: transparent; }
        .accordion-body { padding: 0 0 20px 0; color: #666; line-height: 1.8; }
    </style>
</head>
<body>

    <?php include '../header.php'; ?>

    <section class="page-header">
        <div class="container text-center">
            <h1 class="page-title">Frequently Asked Questions</h1>
        </div>
    </section>

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                How can I track my order?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Once your order has been dispatched, you will receive a confirmation email containing your tracking number. You can also view your order status in the 'My Orders' section of your profile.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                What is your return policy?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We accept returns within 30 days of purchase. Items must be unworn, in their original packaging, and with all tags attached. Please visit our Returns page to initiate a return.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                Do you ship internationally?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we ship to over 100 countries worldwide. Shipping costs and delivery times vary based on your location and will be calculated at checkout.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                Can I change or cancel my order?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We aim to process orders as quickly as possible. If you need to make changes, please contact our support team within 1 hour of placing your order. After that, we may not be able to modify it.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../footer.php'; ?>

</body>
</html>