<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account | Fastfist</title>

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
            background-color: #fcfcfc;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        h1, h2, h3, h4, h5, .navbar-brand, .btn {
            font-family: 'Montserrat', sans-serif;
        }

        /* --- Page Header --- */
        .page-header { background-color: #f8f9fa; padding: 40px 0; margin-bottom: 40px; }

        /* --- Sidebar Menu --- */
        .profile-sidebar { background: #fff; border: 1px solid #eee; position: sticky; top: 100px; }
        .user-badge { padding: 30px; text-align: center; border-bottom: 1px solid #eee; background-color: #fff; }
        .user-avatar { width: 80px; height: 80px; background-color: #1a1a1a; color: white; border-radius: 50%; margin: 0 auto 15px; display: flex; align-items: center; justify-content: center; font-size: 2rem; }
        .menu-list { list-style: none; padding: 0; margin: 0; }
        .menu-link { display: flex; align-items: center; padding: 15px 25px; color: #555; text-decoration: none; font-weight: 600; font-size: 0.9rem; border-bottom: 1px solid #f9f9f9; transition: all 0.2s; cursor: pointer; }
        .menu-link:hover { background-color: #f8f9fa; color: #000; }
        .menu-link.active { background-color: #000; color: #fff; border-bottom: none; }

        /* --- Content Tabs --- */
        .tab-content { display: none; }
        .tab-content.active { display: block; animation: fadeIn 0.3s ease-in-out; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }

        .content-card { background: #fff; padding: 30px; border: 1px solid #eee; margin-bottom: 30px; }
        .card-header-custom { border-bottom: 1px solid #eee; margin-bottom: 25px; padding-bottom: 15px; display: flex; justify-content: space-between; align-items: center; }

        /* Form & Button Styles */
        .form-label { font-size: 0.8rem; font-weight: 700; text-transform: uppercase; color: #888; }
        .form-control { border-radius: 0; padding: 10px 15px; border: 1px solid #ddd; }
        .form-control:focus { box-shadow: none; border-color: #000; }
        .btn-black { background: #000; color: #fff; padding: 10px 25px; border: none; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; border-radius: 0; transition: 0.3s; }
        .btn-black:hover { background: #333; color: white; }

        /* Order Table */
        .badge-status { padding: 5px 10px; font-size: 0.7rem; font-weight: 700; text-transform: uppercase; }
        .bg-processing { background-color: #fff3cd; color: #856404; }
        .bg-delivered { background-color: #d4edda; color: #155724; }
        .bg-cancelled { background-color: #f8d7da; color: #721c24; }

        /* Address Card */
        .address-card { border: 1px solid #eee; padding: 20px; position: relative; height: 100%; }
        .address-type { font-weight: 700; font-size: 0.8rem; text-transform: uppercase; color: #888; margin-bottom: 10px; display: block; }
        .address-actions { position: absolute; top: 20px; right: 20px; }
        .address-actions a { color: #999; margin-left: 10px; font-size: 0.9rem; }
        .address-actions a:hover { color: var(--primary-red); }

        @media (max-width: 991px) {
            .profile-sidebar { position: static; margin-bottom: 30px; }
        }
    </style>
</head>

<body>

    <?php include '../header.php'; ?>

    <section class="page-header">
        <div class="container">
            <h1 class="h3 fw-bold text-uppercase m-0">My Account</h1>
        </div>
    </section>

    <div class="container mb-5">
        <div class="row">

            <div class="col-lg-3 mb-4">
                <div class="profile-sidebar">
                    <div class="user-badge">
                        <div class="user-avatar"><i class="fas fa-user"></i></div>
                        <h5 class="fw-bold mb-0">Alex Doe</h5>
                        <p class="text-muted small">alex.doe@example.com</p>
                    </div>
                    <ul class="menu-list">
                        <li><a onclick="switchTab('profile')" id="nav-profile" class="menu-link active"><i class="fas fa-user-cog me-3"></i> Profile Settings</a></li>
                        <li><a onclick="switchTab('orders')" id="nav-orders" class="menu-link"><i class="fas fa-box me-3"></i> My Orders</a></li>
                        <li><a onclick="switchTab('addresses')" id="nav-addresses" class="menu-link"><i class="fas fa-map-marker-alt me-3"></i> Addresses</a></li>
                        <li><a href="wishlist.php" class="menu-link"><i class="far fa-heart me-3"></i> Wishlist</a></li>
                        <li><a href="../index.php" class="menu-link text-danger"><i class="fas fa-sign-out-alt me-3"></i> Log Out</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-9">

                <div id="tab-profile" class="tab-content active">
                    <div class="content-card">
                        <div class="card-header-custom">
                            <h4 class="h5 fw-bold m-0 text-uppercase">Edit Profile</h4>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" value="Alex">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" value="Doe">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" value="alex.doe@example.com">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control" value="+1 (555) 000-0000">
                                </div>
                            </div>
                            <button class="btn btn-black mt-2">Save Changes</button>
                        </form>
                    </div>

                    <div class="content-card">
                        <div class="card-header-custom">
                            <h4 class="h5 fw-bold m-0 text-uppercase">Change Password</h4>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Current Password</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">New Password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            <button class="btn btn-outline-dark rounded-0 fw-bold text-uppercase fs-6 px-4">Update Password</button>
                        </form>
                    </div>
                </div>

                <div id="tab-orders" class="tab-content">
                    <div class="content-card">
                        <div class="card-header-custom">
                            <h4 class="h5 fw-bold m-0 text-uppercase">Order History</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="bg-light">
                                    <tr>
                                        <th class="py-3 text-secondary small text-uppercase">Order ID</th>
                                        <th class="py-3 text-secondary small text-uppercase">Date</th>
                                        <th class="py-3 text-secondary small text-uppercase">Status</th>
                                        <th class="py-3 text-secondary small text-uppercase">Total</th>
                                        <th class="py-3 text-secondary small text-uppercase">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#FST-8842</td>
                                        <td>Jan 20, 2026</td>
                                        <td><span class="badge badge-status bg-processing">Processing</span></td>
                                        <td>$189.99</td>
                                        <td><button class="btn btn-sm btn-outline-dark rounded-0">View</button></td>
                                    </tr>
                                    <tr>
                                        <td>#FST-7021</td>
                                        <td>Dec 15, 2025</td>
                                        <td><span class="badge badge-status bg-delivered">Delivered</span></td>
                                        <td>$320.50</td>
                                        <td><button class="btn btn-sm btn-outline-dark rounded-0">View</button></td>
                                    </tr>
                                    <tr>
                                        <td>#FST-6500</td>
                                        <td>Nov 02, 2025</td>
                                        <td><span class="badge badge-status bg-cancelled">Cancelled</span></td>
                                        <td>$120.00</td>
                                        <td><button class="btn btn-sm btn-outline-dark rounded-0">View</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div id="tab-addresses" class="tab-content">
                    <div class="content-card">
                        <div class="card-header-custom">
                            <h4 class="h5 fw-bold m-0 text-uppercase">Saved Addresses</h4>
                            <button class="btn btn-sm btn-black"><i class="fas fa-plus me-2"></i> Add New</button>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="address-card">
                                    <div class="address-actions">
                                        <a href="#"><i class="fas fa-pen"></i></a>
                                        <a href="#"><i class="fas fa-trash"></i></a>
                                    </div>
                                    <span class="address-type">Home (Default)</span>
                                    <h6 class="fw-bold">Alex Doe</h6>
                                    <p class="mb-1 text-muted small">123 Fashion Ave, Apt 4B</p>
                                    <p class="mb-1 text-muted small">New York, NY 10012</p>
                                    <p class="text-muted small">United States</p>
                                    <p class="mb-0 text-muted small mt-2">Phone: +1 555-123-4567</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="address-card">
                                    <div class="address-actions">
                                        <a href="#"><i class="fas fa-pen"></i></a>
                                        <a href="#"><i class="fas fa-trash"></i></a>
                                    </div>
                                    <span class="address-type">Office</span>
                                    <h6 class="fw-bold">Alex Doe (Work)</h6>
                                    <p class="mb-1 text-muted small">450 Tech Plaza, Suite 200</p>
                                    <p class="mb-1 text-muted small">San Francisco, CA 94107</p>
                                    <p class="text-muted small">United States</p>
                                    <p class="mb-0 text-muted small mt-2">Phone: +1 555-987-6543</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include '../footer.php'; ?>

    <script>
        function switchTab(tabName) {
            const contents = document.querySelectorAll('.tab-content');
            contents.forEach(content => content.classList.remove('active'));

            const links = document.querySelectorAll('.menu-link');
            links.forEach(link => link.classList.remove('active'));

            document.getElementById('tab-' + tabName).classList.add('active');
            document.getElementById('nav-' + tabName).classList.add('active');
        }
    </script>
</body>

</html>