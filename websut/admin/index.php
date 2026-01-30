<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | STRIDE Admin</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        :root {
            --primary-color: #000000;
            --accent-blue: #3b82f6;
            --accent-green: #10b981;
            --accent-purple: #8b5cf6;
            --accent-orange: #f59e0b;
            --accent-red: #ef4444;
            --bg-light: #f3f4f6;
            --card-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
            --sidebar-width: 260px;
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

        .nav-item {
            margin-bottom: 8px;
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
        }

        .nav-link i {
            width: 24px;
            margin-right: 12px;
            font-size: 1.1rem;
        }

        .nav-link:hover {
            background-color: #f3f4f6;
            color: #000;
        }

        .nav-link.active {
            background-color: #000;
            color: #fff;
        }

        .sidebar-user {
            margin-top: auto;
            display: flex;
            align-items: center;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
        }
        
        .sidebar-user img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 12px;
        }

        /* --- Main Content --- */
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 30px;
        }

        /* --- Top Header --- */
        .top-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .search-bar {
            background: #fff;
            padding: 10px 20px;
            border-radius: 50px;
            display: flex;
            align-items: center;
            width: 300px;
            border: 1px solid #e5e7eb;
        }

        .search-bar input {
            border: none;
            outline: none;
            background: transparent;
            margin-left: 10px;
            width: 100%;
        }

        .header-icons .btn-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #fff;
            border: 1px solid #e5e7eb;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #6b7280;
            margin-left: 10px;
            cursor: pointer;
            transition: 0.2s;
        }
        .header-icons .btn-icon:hover {
            background: #f9fafb;
            color: #000;
        }

        /* --- Dashboard Cards --- */
        .dash-card {
            background: #fff;
            border-radius: 16px;
            padding: 24px;
            border: 1px solid #e5e7eb;
            box-shadow: var(--card-shadow);
            height: 100%;
            position: relative;
        }

        .stat-icon-box {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            position: absolute;
            top: 24px;
            right: 24px;
        }

        .bg-blue-light { background: #eff6ff; color: var(--accent-blue); }
        .bg-green-light { background: #ecfdf5; color: var(--accent-green); }
        .bg-purple-light { background: #f5f3ff; color: var(--accent-purple); }
        .bg-orange-light { background: #fff7ed; color: var(--accent-orange); }

        .stat-label { font-size: 0.875rem; color: #6b7280; font-weight: 500; margin-bottom: 5px; }
        .stat-value { font-size: 1.75rem; font-weight: 700; color: #111; margin-bottom: 5px; font-family: 'Montserrat', sans-serif; }
        
        .trend-badge {
            display: inline-flex;
            align-items: center;
            padding: 2px 8px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        .trend-up { background: #dcfce7; color: #166534; }
        .trend-down { background: #fee2e2; color: #991b1b; }

        /* --- Charts Section --- */
        .chart-container {
            position: relative;
            height: 300px;
            width: 100%;
        }

        /* --- Tables & Lists --- */
        .table-custom thead th {
            font-size: 0.75rem;
            text-transform: uppercase;
            color: #6b7280;
            font-weight: 600;
            background-color: #f9fafb;
            border-bottom: 1px solid #e5e7eb;
            padding: 12px 16px;
        }
        .table-custom tbody td {
            padding: 16px;
            vertical-align: middle;
            border-bottom: 1px solid #f3f4f6;
            font-size: 0.9rem;
        }
        .user-cell { display: flex; align-items: center; gap: 10px; font-weight: 600; color: #111; }
        .user-cell img { width: 32px; height: 32px; border-radius: 50%; object-fit: cover; }
        
        .status-badge {
            padding: 4px 12px;
            border-radius: 6px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
        }
        .status-delivered { background: #d1fae5; color: #065f46; }
        .status-shipped { background: #dbeafe; color: #1e40af; }
        .status-pending { background: #ffedd5; color: #9a3412; }

        /* --- Progress Bars (Low Stock) --- */
        .stock-item { margin-bottom: 20px; }
        .stock-info { display: flex; justify-content: space-between; margin-bottom: 6px; font-size: 0.9rem; font-weight: 500; }
        .progress { height: 8px; border-radius: 10px; background-color: #f3f4f6; }
        .progress-bar-orange { background-color: var(--accent-orange); }
        .progress-bar-red { background-color: var(--accent-red); }

        /* --- Top Selling List --- */
        .top-product-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #f3f4f6;
        }
        .product-rank {
            width: 24px;
            height: 24px;
            background: #f3f4f6;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            font-weight: 700;
            margin-right: 10px;
        }
        .product-meta h6 { margin: 0; font-size: 0.9rem; font-weight: 600; }
        .product-stats { text-align: right; }
        .stat-small { font-size: 0.75rem; color: #6b7280; display: block; }
        .stat-money { font-weight: 700; color: var(--accent-green); font-size: 0.9rem; }

        @media (max-width: 992px) {
            .sidebar { transform: translateX(-100%); transition: 0.3s; }
            .sidebar.active { transform: translateX(0); }
            .main-content { margin-left: 0; }
        }
    </style>
</head>
<body>

    <aside class="sidebar">
        <a href="#" class="brand-text">STRIDE</a>
        
        <nav class="nav flex-column">
            <a href="#" class="nav-link active">
                <i class="fas fa-th-large"></i> Dashboard
            </a>
            <a href="#" class="nav-link">
                <i class="fas fa-box"></i> Products
            </a>
            <a href="#" class="nav-link">
                <i class="fas fa-shopping-cart"></i> Orders
            </a>
            <a href="#" class="nav-link">
                <i class="fas fa-users"></i> Customers
            </a>
            <a href="#" class="nav-link">
                <i class="fas fa-chart-bar"></i> Analytics
            </a>
            <a href="#" class="nav-link">
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
                <h2 class="h4 fw-bold mb-1">Dashboard</h2>
                <p class="text-muted small m-0">Welcome back, John!</p>
            </div>
            <div class="d-flex align-items-center">
                <div class="search-bar me-3 d-none d-md-flex">
                    <i class="fas fa-search text-muted"></i>
                    <input type="text" placeholder="Search...">
                </div>
                <div class="header-icons">
                    <span class="btn-icon"><i class="far fa-bell"></i></span>
                    <span class="btn-icon"><i class="far fa-envelope"></i></span>
                </div>
            </div>
        </header>

        <div class="row g-4 mb-4">
            <div class="col-xl-3 col-md-6">
                <div class="dash-card">
                    <div class="stat-icon-box bg-blue-light"><i class="fas fa-dollar-sign"></i></div>
                    <div class="stat-label">Total Revenue</div>
                    <div class="stat-value">$284,750</div>
                    <span class="trend-badge trend-up"><i class="fas fa-arrow-up me-1"></i> 12.5%</span> <span class="text-muted small ms-1">vs last month</span>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="dash-card">
                    <div class="stat-icon-box bg-purple-light"><i class="fas fa-shopping-cart"></i></div>
                    <div class="stat-label">Total Orders</div>
                    <div class="stat-value">1,847</div>
                    <span class="trend-badge trend-up"><i class="fas fa-arrow-up me-1"></i> 8.3%</span> <span class="text-muted small ms-1">vs last month</span>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="dash-card">
                    <div class="stat-icon-box bg-orange-light"><i class="fas fa-box"></i></div>
                    <div class="stat-label">Total Products</div>
                    <div class="stat-value">342</div>
                    <span class="trend-badge trend-down"><i class="fas fa-arrow-down me-1"></i> 5.2%</span> <span class="text-muted small ms-1">vs last month</span>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="dash-card">
                    <div class="stat-icon-box bg-green-light"><i class="fas fa-users"></i></div>
                    <div class="stat-label">Total Customers</div>
                    <div class="stat-value">12,450</div>
                    <span class="trend-badge trend-up"><i class="fas fa-arrow-up me-1"></i> 15.7%</span> <span class="text-muted small ms-1">vs last month</span>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-lg-8">
                <div class="dash-card">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="fw-bold m-0">Revenue Overview</h5>
                        <select class="form-select form-select-sm w-auto border-0 bg-light">
                            <option>Last 12 Months</option>
                            <option>Last 6 Months</option>
                        </select>
                    </div>
                    <div class="chart-container">
                        <canvas id="revenueChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="dash-card">
                    <h5 class="fw-bold mb-4">Sales by Category</h5>
                    <div class="chart-container" style="height: 250px;">
                        <canvas id="categoryChart"></canvas>
                    </div>
                    <div class="mt-4">
                        <div class="d-flex justify-content-between small mb-2">
                            <span><i class="fas fa-circle text-primary me-2"></i>Running</span>
                            <span class="fw-bold">35%</span>
                        </div>
                        <div class="d-flex justify-content-between small mb-2">
                            <span><i class="fas fa-circle text-info me-2"></i>Casual</span>
                            <span class="fw-bold">28%</span>
                        </div>
                        <div class="d-flex justify-content-between small">
                            <span><i class="fas fa-circle text-success me-2"></i>Basketball</span>
                            <span class="fw-bold">37%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-8">
                <div class="dash-card p-0 overflow-hidden">
                    <div class="p-4 d-flex justify-content-between align-items-center border-bottom">
                        <h5 class="fw-bold m-0">Recent Orders</h5>
                        <a href="#" class="small text-primary fw-bold text-decoration-none">View All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-custom mb-0">
                            <thead>
                                <tr>
                                    <th>Customer</th>
                                    <th>Order ID</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="user-cell">
                                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                                            James Wilson
                                        </div>
                                    </td>
                                    <td class="text-muted">#ORD-2024-001</td>
                                    <td class="fw-bold">$485.00</td>
                                    <td><span class="status-badge status-delivered">Delivered</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="user-cell">
                                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="">
                                            Emily Chen
                                        </div>
                                    </td>
                                    <td class="text-muted">#ORD-2024-002</td>
                                    <td class="fw-bold">$340.00</td>
                                    <td><span class="status-badge status-shipped">Shipped</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="user-cell">
                                            <img src="https://randomuser.me/api/portraits/men/85.jpg" alt="">
                                            Michael Brown
                                        </div>
                                    </td>
                                    <td class="text-muted">#ORD-2024-003</td>
                                    <td class="fw-bold">$210.00</td>
                                    <td><span class="status-badge status-pending">Processing</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="user-cell">
                                            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="">
                                            Sarah Davis
                                        </div>
                                    </td>
                                    <td class="text-muted">#ORD-2024-004</td>
                                    <td class="fw-bold">$620.00</td>
                                    <td><span class="status-badge status-pending">Pending</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="dash-card mb-4">
                    <h5 class="fw-bold mb-4"><i class="fas fa-exclamation-triangle text-warning me-2"></i>Low Stock Alerts</h5>
                    
                    <div class="stock-item">
                        <div class="stock-info">
                            <span>Jordan Retro 4</span>
                            <span class="text-warning">23 units</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-orange" style="width: 30%"></div>
                        </div>
                    </div>

                    <div class="stock-item">
                        <div class="stock-info">
                            <span>Under Armour HOVR</span>
                            <span class="text-warning">12 units</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-orange" style="width: 15%"></div>
                        </div>
                    </div>

                    <div class="stock-item mb-0">
                        <div class="stock-info">
                            <span>New Balance 990v5</span>
                            <span class="text-danger">0 units</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-red" style="width: 2%"></div>
                        </div>
                    </div>
                </div>

                <div class="dash-card">
                    <h5 class="fw-bold mb-3">Top Selling Products</h5>
                    
                    <div class="top-product-item">
                        <div class="d-flex align-items-center">
                            <div class="product-rank">1</div>
                            <div class="product-meta">
                                <h6>Jordan Retro 4</h6>
                                <span class="small text-muted">1,245 sales</span>
                            </div>
                        </div>
                        <div class="product-stats">
                            <span class="stat-money">$261k</span>
                        </div>
                    </div>

                    <div class="top-product-item">
                        <div class="d-flex align-items-center">
                            <div class="product-rank">2</div>
                            <div class="product-meta">
                                <h6>Nike Air Max 270</h6>
                                <span class="small text-muted">847 sales</span>
                            </div>
                        </div>
                        <div class="product-stats">
                            <span class="stat-money">$127k</span>
                        </div>
                    </div>
                    
                    <div class="top-product-item border-0">
                        <div class="d-flex align-items-center">
                            <div class="product-rank">3</div>
                            <div class="product-meta">
                                <h6>Adidas Ultra Boost</h6>
                                <span class="small text-muted">692 sales</span>
                            </div>
                        </div>
                        <div class="product-stats">
                            <span class="stat-money">$131k</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </main>

    <script>
        // Revenue Chart (Line)
        const ctxRev = document.getElementById('revenueChart').getContext('2d');
        new Chart(ctxRev, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Revenue',
                    data: [25000, 29000, 27000, 32000, 35000, 36000, 33000, 42000, 45000, 50000, 58000, 62000],
                    borderColor: '#3b82f6',
                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                    borderWidth: 3,
                    tension: 0.4, // Curved lines
                    fill: true,
                    pointRadius: 0,
                    pointHoverRadius: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: {
                    x: { grid: { display: false }, ticks: { font: { size: 11 } } },
                    y: { grid: { borderDash: [5, 5] }, ticks: { callback: function(value) { return '$' + value/1000 + 'k'; } } }
                }
            }
        });

        // Category Chart (Doughnut)
        const ctxCat = document.getElementById('categoryChart').getContext('2d');
        new Chart(ctxCat, {
            type: 'doughnut',
            data: {
                labels: ['Running', 'Casual', 'Basketball'],
                datasets: [{
                    data: [35, 28, 37],
                    backgroundColor: ['#3b82f6', '#06b6d4', '#10b981'],
                    borderWidth: 0,
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '75%', // Thinner ring
                plugins: { legend: { display: false } }
            }
        });
    </script>
</body>
</html> 