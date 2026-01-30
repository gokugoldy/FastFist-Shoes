<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings | STRIDE Admin</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #000000;
            --accent-blue: #3b82f6;
            --bg-light: #f3f4f6;
            --sidebar-width: 260px;
            --card-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-light);
            color: #1f2937;
        }

        h1, h2, h3, h4, h5, .brand-text {
            font-family: 'Montserrat', sans-serif;
        }

        /* --- Sidebar --- */
        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            background: #ffffff;
            position: fixed;
            top: 0;
            left: 0;
            border-right: 1px solid #e5e7eb;
            display: flex;
            flex-direction: column;
            padding: 24px;
            z-index: 1000;
        }

        .brand-text {
            font-size: 1.5rem;
            font-weight: 800;
            color: #000;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 40px;
            display: block;
            text-decoration: none;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 12px 16px;
            color: #6b7280;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s;
            margin-bottom: 8px;
        }

        .nav-link i { width: 24px; margin-right: 12px; font-size: 1.1rem; }
        .nav-link:hover { background-color: #f3f4f6; color: #000; }
        .nav-link.active { background-color: #000; color: #fff; }

        .sidebar-user {
            margin-top: auto;
            display: flex;
            align-items: center;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
        }
        .sidebar-user img { width: 40px; height: 40px; border-radius: 50%; margin-right: 12px; }

        /* --- Main Content --- */
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 30px;
        }

        /* --- Header --- */
        .top-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        
        .btn-save {
            background-color: #000;
            color: #fff;
            padding: 10px 25px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: 0.2s;
        }
        .btn-save:hover { background-color: #333; color: white; }

        /* --- Settings Styles --- */
        .settings-card {
            background: #fff;
            border-radius: 16px;
            border: 1px solid #e5e7eb;
            box-shadow: var(--card-shadow);
            overflow: hidden;
        }

        /* Tabs */
        .settings-tabs {
            border-bottom: 1px solid #e5e7eb;
            background: #f9fafb;
            padding: 0 20px;
        }
        .nav-tabs { border-bottom: none; }
        .nav-tabs .nav-link {
            border: none;
            background: transparent;
            color: #6b7280;
            font-weight: 600;
            padding: 15px 20px;
            border-bottom: 2px solid transparent;
            border-radius: 0;
            margin-bottom: 0;
        }
        .nav-tabs .nav-link:hover { color: #000; background: transparent; }
        .nav-tabs .nav-link.active {
            color: #000;
            background: transparent;
            border-bottom: 2px solid #000;
        }

        /* Form Content */
        .settings-content { padding: 30px; }
        
        .section-title { font-weight: 700; font-size: 1.1rem; margin-bottom: 5px; color: #111; }
        .section-desc { font-size: 0.85rem; color: #6b7280; margin-bottom: 25px; }
        
        .form-label { font-size: 0.85rem; font-weight: 600; color: #374151; margin-bottom: 8px; }
        .form-control, .form-select {
            border-radius: 8px;
            border: 1px solid #e5e7eb;
            padding: 10px 15px;
            font-size: 0.95rem;
        }
        .form-control:focus, .form-select:focus { border-color: #000; box-shadow: none; }

        /* --- Profile Tab Specific Styles (Merged from Profile Page) --- */
        .profile-card-mini {
            background: #f9fafb;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
            overflow: hidden;
            text-align: center;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }
        .profile-cover { height: 100px; background: linear-gradient(135deg, #1f2937 0%, #000000 100%); }
        .profile-avatar-container { margin-top: -40px; margin-bottom: 10px; position: relative; display: inline-block; }
        .profile-avatar { width: 80px; height: 80px; border-radius: 50%; border: 4px solid #fff; object-fit: cover; background: #fff; }
        .profile-badge { background: #3b82f6; color: #fff; font-size: 0.6rem; padding: 3px 6px; border-radius: 10px; position: absolute; bottom: 5px; right: 0; border: 2px solid #fff; }
        
        .info-list { text-align: left; padding: 15px; border-top: 1px solid #e5e7eb; margin-top: 10px; }
        .info-item { display: flex; justify-content: space-between; margin-bottom: 10px; font-size: 0.85rem; }
        .info-label { font-weight: 600; color: #374151; }
        .info-value { color: #6b7280; }

        /* Timeline */
        .timeline { position: relative; padding-left: 20px; border-left: 2px solid #e5e7eb; margin-top: 10px; }
        .timeline-item { position: relative; margin-bottom: 20px; }
        .timeline-dot { width: 10px; height: 10px; background: #e5e7eb; border-radius: 50%; position: absolute; left: -26px; top: 5px; border: 2px solid #fff; }
        .timeline-dot.active { background: #3b82f6; }
        .timeline-content h6 { margin: 0; font-size: 0.85rem; font-weight: 600; }
        .timeline-content p { margin: 0; font-size: 0.75rem; color: #6b7280; }
        .timeline-time { font-size: 0.7rem; color: #9ca3af; margin-top: 2px; }

        /* Toggle Switches */
        .form-switch .form-check-input { width: 3em; height: 1.5em; margin-right: 10px; cursor: pointer; }
        .form-switch .form-check-input:checked { background-color: #000; border-color: #000; }
        .toggle-item { display: flex; justify-content: space-between; align-items: center; padding: 15px 0; border-bottom: 1px solid #f3f4f6; }
        .toggle-item:last-child { border-bottom: none; }
        .toggle-label h6 { margin: 0; font-weight: 600; font-size: 0.95rem; }
        .toggle-label p { margin: 0; font-size: 0.8rem; color: #6b7280; }

        @media (max-width: 992px) {
            .sidebar { display: none; }
            .main-content { margin-left: 0; }
        }
    </style>
</head>
<body>

    <aside class="sidebar">
        <a href="#" class="brand-text">STRIDE</a>
        
        <nav class="nav flex-column">
            <a href="admin.html" class="nav-link">
                <i class="fas fa-th-large"></i> Dashboard
            </a>
            <a href="admin-products.html" class="nav-link">
                <i class="fas fa-box"></i> Products
            </a>
            <a href="admin-orders.html" class="nav-link">
                <i class="fas fa-shopping-cart"></i> Orders
            </a>
            <a href="admin-customers.html" class="nav-link">
                <i class="fas fa-users"></i> Customers
            </a>
            <a href="admin-analytics.html" class="nav-link">
                <i class="fas fa-chart-bar"></i> Analytics
            </a>
            <a href="#" class="nav-link active">
                <i class="fas fa-cog"></i> Settings
            </a>
        </nav>

        <div class="sidebar-user">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Admin">
            <div>
                <div class="fw-bold text-dark small">John Admin</div>
                <div class="text-muted small" style="font-size: 0.75rem;">admin@stride.com</div>
            </div>
            <a href="#" class="ms-auto text-muted"><i class="fas fa-sign-out-alt"></i></a>
        </div>
    </aside>

    <main class="main-content">
        
        <header class="top-header">
            <div>
                <h2 class="h4 fw-bold mb-1">Settings</h2>
                <p class="text-muted small m-0">Manage your account and store preferences</p>
            </div>
            <button class="btn-save">Save Changes</button>
        </header>

        <div class="settings-card">
            
            <div class="settings-tabs">
                <ul class="nav nav-tabs" id="settingsTab" role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general" type="button">General</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button">My Profile</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="security-tab" data-bs-toggle="tab" data-bs-target="#security" type="button">Security</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="notification-tab" data-bs-toggle="tab" data-bs-target="#notification" type="button">Notifications</button>
                    </li>
                </ul>
            </div>

            <div class="tab-content settings-content" id="settingsTabContent">
                
                <div class="tab-pane fade show active" id="general" role="tabpanel">
                    <h5 class="section-title">Store Information</h5>
                    <p class="section-desc">Details about your store visible to customers.</p>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="form-label">Store Name</label>
                            <input type="text" class="form-control" value="STRIDE Footwear">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Support Email</label>
                            <input type="email" class="form-control" value="support@stride.com">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Timezone</label>
                            <select class="form-select">
                                <option>(GMT-05:00) Eastern Time (US & Canada)</option>
                                <option>(GMT+00:00) London</option>
                                <option>(GMT+01:00) Paris</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Currency</label>
                            <select class="form-select">
                                <option value="USD">USD ($)</option>
                                <option value="EUR">EUR (€)</option>
                                <option value="GBP">GBP (£)</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="profile" role="tabpanel">
                    <div class="row g-4">
                        
                        <div class="col-lg-4">
                            <div class="profile-card-mini">
                                <div class="profile-cover"></div>
                                <div class="profile-avatar-container">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Admin" class="profile-avatar">
                                    <span class="profile-badge"><i class="fas fa-check"></i></span>
                                </div>
                                <h6 class="fw-bold mb-1">John Admin</h6>
                                <p class="text-muted small mb-2" style="font-size: 0.75rem;">Super Administrator</p>
                                
                                <div class="info-list">
                                    <div class="info-item"><span class="info-label">Email</span><span class="info-value">admin@stride.com</span></div>
                                    <div class="info-item"><span class="info-label">Phone</span><span class="info-value">+1 (555) 123-4567</span></div>
                                    <div class="info-item"><span class="info-label">Location</span><span class="info-value">New York, USA</span></div>
                                    <div class="info-item"><span class="info-label">Joined</span><span class="info-value">Oct 20, 2024</span></div>
                                </div>
                            </div>

                            <div>
                                <h6 class="fw-bold mb-3 small text-uppercase text-muted">Recent Activity</h6>
                                <div class="timeline">
                                    <div class="timeline-item">
                                        <div class="timeline-dot active"></div>
                                        <div class="timeline-content">
                                            <h6>Updated Product #42</h6>
                                            <p>Changed stock quantity.</p>
                                            <div class="timeline-time">2 hours ago</div>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="timeline-dot"></div>
                                        <div class="timeline-content">
                                            <h6>Approved Refund</h6>
                                            <p>Order #ORD-005</p>
                                            <div class="timeline-time">Yesterday</div>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="timeline-dot"></div>
                                        <div class="timeline-content">
                                            <h6>Login Successful</h6>
                                            <p>From New IP</p>
                                            <div class="timeline-time">Oct 22</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <h5 class="section-title">Edit Profile</h5>
                            <p class="section-desc">Update your personal details.</p>
                            
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" value="John">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" value="Admin">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" class="form-control" value="admin@stride.com">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Phone Number</label>
                                        <input type="text" class="form-control" value="+1 (555) 123-4567">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" value="123 Admin St, Suite 100">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-control" value="New York">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Zip Code</label>
                                        <input type="text" class="form-control" value="10001">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Bio</label>
                                        <textarea class="form-control" rows="3">Senior administrator managing daily operations.</textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="security" role="tabpanel">
                    <h5 class="section-title">Password</h5>
                    <p class="section-desc">Update your password to keep your account secure.</p>

                    <div class="row g-4 mb-5">
                        <div class="col-md-4">
                            <label class="form-label">Current Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">New Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control">
                        </div>
                    </div>

                    <h5 class="section-title">Two-Factor Authentication</h5>
                    <p class="section-desc">Add an extra layer of security to your account.</p>
                    
                    <div class="toggle-item">
                        <div class="toggle-label">
                            <h6>Enable 2FA</h6>
                            <p>We will send a code to your mobile phone.</p>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="2faSwitch">
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="notification" role="tabpanel">
                    <h5 class="section-title">Email Notifications</h5>
                    <p class="section-desc">Choose what we email you about.</p>

                    <div class="toggle-item">
                        <div class="toggle-label">
                            <h6>New Orders</h6>
                            <p>Get notified when a customer places an order.</p>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" checked>
                        </div>
                    </div>

                    <div class="toggle-item">
                        <div class="toggle-label">
                            <h6>Low Stock Alerts</h6>
                            <p>Get notified when product stock runs low.</p>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" checked>
                        </div>
                    </div>

                    <div class="toggle-item">
                        <div class="toggle-label">
                            <h6>Customer Reviews</h6>
                            <p>Get notified when a customer leaves a review.</p>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox">
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>