<?php
$base_url = '';
if (basename(dirname($_SERVER['PHP_SELF'])) == 'user') {
    $base_url = '../';
}
?>
<style>
    /* --- Navbar & Search Styles --- */
    .navbar { padding: 20px 0; background: #fff; transition: all 0.3s ease; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
    .navbar-brand { font-weight: 800; font-size: 1.5rem; letter-spacing: 1px; font-family: 'Montserrat', sans-serif; }
    .nav-link { font-weight: 600; font-size: 0.85rem; text-transform: uppercase; color: #000 !important; margin: 0 10px; }
    .nav-icons a { color: #000; margin-left: 20px; font-size: 1.1rem; text-decoration: none; cursor: pointer; transition: color 0.2s; }
    .nav-icons a:hover { color: #ff3c3c; }

    /* Search Panel */
    .search-overlay { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.6); z-index: 1040; opacity: 0; visibility: hidden; transition: all 0.3s ease; backdrop-filter: blur(2px); }
    .search-overlay.active { opacity: 1; visibility: visible; }
    .search-panel { position: fixed; top: 0; right: -450px; width: 400px; height: 100vh; background: #fff; z-index: 1050; padding: 30px; box-shadow: -5px 0 15px rgba(0,0,0,0.1); transition: right 0.4s cubic-bezier(0.77, 0, 0.175, 1); overflow-y: auto; display: flex; flex-direction: column; }
    .search-panel.active { right: 0; }
    .search-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; }
    .close-search { font-size: 1.5rem; cursor: pointer; color: #000; transition: transform 0.3s; }
    .close-search:hover { transform: rotate(90deg); color: #ff3c3c; }
    .search-input-wrapper { position: relative; margin-bottom: 40px; }
    .search-input-field { width: 100%; border: none; border-bottom: 2px solid #eee; padding: 15px 0; font-size: 1.2rem; font-family: 'Montserrat', sans-serif; font-weight: 600; outline: none; transition: border-color 0.3s; }
    .search-input-field:focus { border-color: #000; }
    .search-submit { position: absolute; right: 0; top: 15px; background: none; border: none; font-size: 1.2rem; color: #000; }
    
    /* Filter Accordion in Search */
    .filter-section-title { font-size: 0.9rem; font-weight: 700; text-transform: uppercase; margin-bottom: 15px; color: #888; }
    .filter-btn { width: 100%; text-align: left; background: none; border: none; padding: 10px 0; border-bottom: 1px solid #f0f0f0; font-weight: 600; display: flex; justify-content: space-between; align-items: center; }
    .filter-btn:hover { color: #ff3c3c; }
    .filter-btn i { font-size: 0.8rem; transition: transform 0.3s; }
    .filter-btn[aria-expanded="true"] i { transform: rotate(180deg); }
    .filter-body { padding: 10px 0 20px; }
    .form-check-input:checked { background-color: #ff3c3c; border-color: #ff3c3c; }
    
    /* Top Searches */
    .top-searches-wrapper { margin-top: 30px; }
    .search-tag { display: inline-block; background: #f4f4f4; padding: 8px 16px; border-radius: 20px; font-size: 0.85rem; color: #333; text-decoration: none; margin-right: 8px; margin-bottom: 10px; transition: 0.2s; }
    .search-tag:hover { background: #000; color: #fff; }
    
    /* Animation */
    .anim-item { opacity: 0; transform: translateY(20px); transition: all 0.4s ease; }
    .search-panel.active .anim-item { opacity: 1; transform: translateY(0); }
    .search-panel.active .anim-item:nth-child(2) { transition-delay: 0.1s; }
    .search-panel.active .anim-item:nth-child(3) { transition-delay: 0.2s; }
    .search-panel.active .anim-item:nth-child(4) { transition-delay: 0.3s; }
    @media (max-width: 576px) { .search-panel { width: 100%; } }
</style>

<div class="search-overlay"></div>
<div class="search-panel">
    <div class="search-header anim-item">
        <h5 class="fw-bold m-0" style="font-family: 'Montserrat', sans-serif;">SEARCH</h5>
        <div class="close-search"><i class="fas fa-times"></i></div>
    </div>
    <div class="search-input-wrapper anim-item">
        <form action="<?php echo $base_url; ?>user/men.php" method="GET">
            <input type="text" class="search-input-field" name="search" placeholder="What are you looking for?" id="mainSearchInput">
            <button type="submit" class="search-submit"><i class="fas fa-arrow-right"></i></button>
        </form>
    </div>
    <div class="filter-wrapper anim-item">
        <div class="filter-section-title">Quick Filters</div>
        <div class="accordion" id="searchFilters">
            <div class="border-bottom">
                <button class="filter-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCat" aria-expanded="false">
                    Category <i class="fas fa-chevron-down"></i>
                </button>
                <div id="collapseCat" class="collapse filter-body" data-bs-parent="#searchFilters">
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="catMen"><label class="form-check-label" for="catMen">Men</label></div>
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="catWomen"><label class="form-check-label" for="catWomen">Women</label></div>
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="catKids"><label class="form-check-label" for="catKids">Kids</label></div>
                </div>
            </div>
            <div class="border-bottom">
                <button class="filter-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePrice" aria-expanded="false">
                    Price Range <i class="fas fa-chevron-down"></i>
                </button>
                <div id="collapsePrice" class="collapse filter-body" data-bs-parent="#searchFilters">
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="p1"><label class="form-check-label" for="p1">Under $50</label></div>
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="p2"><label class="form-check-label" for="p2">$50 - $100</label></div>
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="p3"><label class="form-check-label" for="p3">$100 - $200</label></div>
                </div>
            </div>
        </div>
    </div>
    <div class="top-searches-wrapper anim-item">
        <div class="filter-section-title">Top Searches</div>
        <div class="d-flex flex-wrap">
            <a href="<?php echo $base_url; ?>user/men.php?search=Ultraboost" class="search-tag">Ultraboost</a>
            <a href="<?php echo $base_url; ?>user/men.php?search=Air+Max" class="search-tag">Air Max</a>
            <a href="<?php echo $base_url; ?>user/sports.php?search=Running+Shoes" class="search-tag">Running Shoes</a>
            <a href="<?php echo $base_url; ?>user/men.php?search=Jordan" class="search-tag">Jordan</a>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $base_url; ?>index.php">Fastfist</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>user/men.php">Men</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>user/women.php">Women</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>user/kids.php">Kids</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>user/sports.php">Sports</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>user/casual.php">Casual</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>user/formal.php">Formal</a></li>
            </ul>
            <div class="d-lg-none mt-3 text-center border-top pt-3">
                <a href="#" class="text-dark mx-3 search-trigger" style="font-size: 1.2rem;"><i class="fas fa-search"></i></a>
                <a href="<?php echo $base_url; ?>user/wishlist.php" class="text-dark mx-3" style="font-size: 1.2rem;"><i class="far fa-heart"></i></a>
                <a href="<?php echo $base_url; ?>user/cart.php" class="text-dark mx-3" style="font-size: 1.2rem;"><i class="fas fa-shopping-bag"></i></a>
                <a href="<?php echo $base_url; ?>user/profile.php" class="text-dark mx-3" style="font-size: 1.2rem;"><i class="far fa-user"></i></a>
            </div>
        </div>
        <div class="nav-icons d-none d-lg-flex">
            <a href="#" class="search-trigger"><i class="fas fa-search"></i></a>
            <a href="<?php echo $base_url; ?>user/wishlist.php"><i class="far fa-heart"></i></a>
            <a href="<?php echo $base_url; ?>user/cart.php"><i class="fas fa-shopping-bag"></i></a>
            <a href="<?php echo $base_url; ?>user/profile.php"><i class="far fa-user"></i></a>
        </div>
    </div>
</nav>