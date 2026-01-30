<?php
$base_url = '';
if (basename(dirname($_SERVER['PHP_SELF'])) == 'user') {
    $base_url = '../';
}
?>
<style>
    /* --- Footer Styles --- */
    footer { background-color: #1e1e1e; color: #fff; padding: 80px 0 30px; margin-top: auto; }
    .footer-brand { font-weight: 800; font-size: 1.5rem; margin-bottom: 20px; display: block; font-family: 'Montserrat', sans-serif; }
    .footer-heading { font-weight: 700; text-transform: uppercase; font-size: 0.9rem; margin-bottom: 20px; letter-spacing: 1px; font-family: 'Montserrat', sans-serif; }
    .footer-links { list-style: none; padding: 0; }
    .footer-links li { margin-bottom: 10px; }
    .footer-links a { color: #888; text-decoration: none; font-size: 0.9rem; transition: 0.2s; }
    .footer-links a:hover { color: white; }
    .newsletter-input { background: #333; border: none; padding: 10px 15px; color: white; width: 70%; }
    .newsletter-btn { background: #ff3c3c; border: none; width: 25%; color: white; }
    .bottom-bar { border-top: 1px solid #333; margin-top: 60px; padding-top: 30px; font-size: 0.8rem; color: #666; }
</style>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <span class="footer-brand">Fastfist</span>
                <p class="footer-text">Premium footwear for every step of your journey. Quality, style, and comfort combined.</p>
                <div class="mt-3">
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
            <div class="col-6 col-lg-2 mb-4">
                <h5 class="footer-heading">Shop</h5>
                <ul class="footer-links">
                    <li><a href="<?php echo $base_url; ?>user/men.php">Men</a></li>
                    <li><a href="<?php echo $base_url; ?>user/women.php">Women</a></li>
                    <li><a href="<?php echo $base_url; ?>user/kids.php">Kids</a></li>
                    <li><a href="<?php echo $base_url; ?>user/sports.php">Sports</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-2 mb-4">
                <h5 class="footer-heading">Help</h5>
                <ul class="footer-links">
                    <li><a href="<?php echo $base_url; ?>user/faq.php">FAQ</a></li>
                    <li><a href="<?php echo $base_url; ?>user/shipping.php">Shipping</a></li>
                    <li><a href="<?php echo $base_url; ?>user/returns.php">Returns</a></li>
                    <li><a href="<?php echo $base_url; ?>user/contect.php">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-4 mb-4">
                <h5 class="footer-heading">Newsletter</h5>
                <p class="footer-text mb-3">Subscribe for exclusive offers and updates.</p>
                <div class="d-flex">
                    <input type="email" class="newsletter-input" placeholder="Your email">
                    <button class="newsletter-btn"><i class="far fa-envelope"></i></button>
                </div>
            </div>
        </div>
        <div class="bottom-bar text-center">
            <p class="mb-0">&copy; 2025 Fastfist. All rights reserved.</p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function() {
        $('.search-trigger').on('click', function(e) { e.preventDefault(); $('.search-overlay').addClass('active'); $('.search-panel').addClass('active'); setTimeout(function() { $('#mainSearchInput').focus(); }, 300); });
        $('.close-search, .search-overlay').on('click', function() { $('.search-overlay').removeClass('active'); $('.search-panel').removeClass('active'); });
        $(window).scroll(function() { if ($(this).scrollTop() > 50) { $('.navbar').addClass('shadow-sm').css('padding', '10px 0'); } else { $('.navbar').removeClass('shadow-sm').css('padding', '20px 0'); } });
    });
</script>