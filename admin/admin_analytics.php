<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analytics | STRIDE Admin</title>
    
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
        .date-range-picker {
            background: #fff;
            border: 1px solid #e5e7eb;
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 0.9rem;
            color: #374151;
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        .date-range-picker i { margin-right: 10px; color: #6b7280; }

        /* --- KPI Cards --- */
        .analytics-card {
            background: #fff;
            border-radius: 16px;
            padding: 24px;
            border: 1px solid #e5e7eb;
            box-shadow: var(--card-shadow);
            height: 100%;
        }
        
        .kpi-title { font-size: 0.85rem; color: #6b7280; font-weight: 600; text-transform: uppercase; margin-bottom: 10px; }
        .kpi-value { font-size: 1.8rem; font-weight: 700; color: #111; margin-bottom: 5px; font-family: 'Montserrat', sans-serif; }
        
        .trend-indicator { font-size: 0.85rem; font-weight: 600; display: flex; align-items: center; }
        .trend-up { color: var(--accent-green); }
        .trend-down { color: #ef4444; }
        .trend-text { color: #9ca3af; font-weight: 400; margin-left: 5px; font-size: 0.8rem; }

        /* --- Charts Section --- */
        .chart-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        .chart-title { font-size: 1.1rem; font-weight: 700; margin: 0; }
        .chart-container { position: relative; height: 320px; width: 100%; }

        /* --- Data Table --- */
        .table-custom { margin-bottom: 0; width: 100%; }
        .table-custom thead th {
            background-color: #f9fafb;
            font-size: 0.75rem;
            text-transform: uppercase;
            color: #6b7280;
            font-weight: 600;
            padding: 12px 20px;
            border-bottom: 1px solid #e5e7eb;
        }
        .table-custom tbody td {
            padding: 16px 20px;
            vertical-align: middle;
            border-bottom: 1px solid #f3f4f6;
            font-size: 0.9rem;
            color: #374151;
        }
        .progress-slim { height: 6px; border-radius: 10px; background-color: #f3f4f6; width: 100px; display: inline-block; vertical-align: middle; margin-right: 10px; }
        .progress-bar { border-radius: 10px; }

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
            <a href="#" class="nav-link active">
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
                <h2 class="h4 fw-bold mb-1">Analytics</h2>
                <p class="text-muted small m-0">Monitor your store's performance</p>
            </div>
            <div class="date-range-picker">
                <i class="far fa-calendar-alt"></i>
                <span>Last 30 Days (Oct 24 - Nov 23)</span>
                <i class="fas fa-chevron-down ms-3 small"></i>
            </div>
        </header>

        <div class="row g-4 mb-4">
            <div class="col-md-6 col-xl-3">
                <div class="analytics-card">
                    <div class="kpi-title">Total Sales</div>
                    <div class="kpi-value">$128,450</div>
                    <div class="trend-indicator trend-up">
                        <i class="fas fa-arrow-up me-1"></i> 12.5% 
                        <span class="trend-text">vs last month</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="analytics-card">
                    <div class="kpi-title">Conversion Rate</div>
                    <div class="kpi-value">3.2%</div>
                    <div class="trend-indicator trend-up">
                        <i class="fas fa-arrow-up me-1"></i> 0.4% 
                        <span class="trend-text">vs last month</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="analytics-card">
                    <div class="kpi-title">Avg. Order Value</div>
                    <div class="kpi-value">$85.40</div>
                    <div class="trend-indicator trend-down">
                        <i class="fas fa-arrow-down me-1"></i> 2.1% 
                        <span class="trend-text">vs last month</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="analytics-card">
                    <div class="kpi-title">Total Visitors</div>
                    <div class="kpi-value">45,200</div>
                    <div class="trend-indicator trend-up">
                        <i class="fas fa-arrow-up me-1"></i> 8.4% 
                        <span class="trend-text">vs last month</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-lg-8">
                <div class="analytics-card">
                    <div class="chart-header">
                        <h5 class="chart-title">Revenue vs Traffic</h5>
                        <select class="form-select form-select-sm w-auto border-0 bg-light">
                            <option>Daily</option>
                            <option>Weekly</option>
                            <option>Monthly</option>
                        </select>
                    </div>
                    <div class="chart-container">
                        <canvas id="mainChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="analytics-card">
                    <div class="chart-header">
                        <h5 class="chart-title">Device Usage</h5>
                    </div>
                    <div class="chart-container" style="height: 250px;">
                        <canvas id="deviceChart"></canvas>
                    </div>
                    <div class="mt-4">
                        <div class="d-flex justify-content-between small mb-2 border-bottom pb-2">
                            <span><i class="fas fa-circle text-primary me-2"></i>Desktop</span>
                            <span class="fw-bold">55%</span>
                        </div>
                        <div class="d-flex justify-content-between small mb-2 border-bottom pb-2">
                            <span><i class="fas fa-circle text-info me-2"></i>Mobile</span>
                            <span class="fw-bold">35%</span>
                        </div>
                        <div class="d-flex justify-content-between small">
                            <span><i class="fas fa-circle text-secondary me-2"></i>Tablet</span>
                            <span class="fw-bold">10%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="analytics-card h-100 p-0 overflow-hidden">
                    <div class="p-4 border-bottom">
                        <h5 class="chart-title">Top Referral Sources</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-custom">
                            <thead>
                                <tr>
                                    <th>Source</th>
                                    <th>Visitors</th>
                                    <th>Revenue</th>
                                    <th>Conversion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><i class="fab fa-google me-2 text-primary"></i> Google Search</td>
                                    <td>24,500</td>
                                    <td>$45,200</td>
                                    <td><span class="text-success">2.4%</span></td>
                                </tr>
                                <tr>
                                    <td><i class="fab fa-instagram me-2 text-danger"></i> Instagram</td>
                                    <td>12,800</td>
                                    <td>$32,400</td>
                                    <td><span class="text-success">4.1%</span></td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-envelope me-2 text-warning"></i> Email Marketing</td>
                                    <td>5,200</td>
                                    <td>$18,900</td>
                                    <td><span class="text-success">5.8%</span></td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-share-alt me-2 text-secondary"></i> Direct</td>
                                    <td>2,700</td>
                                    <td>$12,050</td>
                                    <td><span class="text-success">3.2%</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="analytics-card h-100 p-0 overflow-hidden">
                    <div class="p-4 border-bottom">
                        <h5 class="chart-title">Top Selling Products</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-custom">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Units Sold</th>
                                    <th>Revenue</th>
                                    <th>Popularity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold">Nike Air Max 270</td>
                                    <td>1,240</td>
                                    <td>$186,000</td>
                                    <td>
                                        <div class="progress-slim"><div class="progress-bar bg-primary" style="width: 85%"></div></div> 85%
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Adidas Ultraboost</td>
                                    <td>980</td>
                                    <td>$176,400</td>
                                    <td>
                                        <div class="progress-slim"><div class="progress-bar bg-primary" style="width: 70%"></div></div> 70%
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Jordan Retro 4</td>
                                    <td>850</td>
                                    <td>$212,500</td>
                                    <td>
                                        <div class="progress-slim"><div class="progress-bar bg-primary" style="width: 65%"></div></div> 65%
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Puma RS-X</td>
                                    <td>620</td>
                                    <td>$68,200</td>
                                    <td>
                                        <div class="progress-slim"><div class="progress-bar bg-primary" style="width: 45%"></div></div> 45%
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script>
        // Main Line Chart
        const ctxMain = document.getElementById('mainChart').getContext('2d');
        new Chart(ctxMain, {
            type: 'line',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [
                    {
                        label: 'Revenue ($)',
                        data: [1200, 1900, 1500, 2200, 2800, 3500, 3100],
                        borderColor: '#000000',
                        backgroundColor: 'rgba(0, 0, 0, 0.05)',
                        tension: 0.4,
                        fill: true,
                        yAxisID: 'y'
                    },
                    {
                        label: 'Traffic',
                        data: [800, 1200, 1100, 1400, 1800, 2400, 2100],
                        borderColor: '#3b82f6',
                        borderDash: [5, 5],
                        tension: 0.4,
                        fill: false,
                        yAxisID: 'y1'
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                interaction: { mode: 'index', intersect: false },
                plugins: { legend: { position: 'top' } },
                scales: {
                    y: { type: 'linear', display: true, position: 'left', grid: { borderDash: [5, 5] } },
                    y1: { type: 'linear', display: true, position: 'right', grid: { drawOnChartArea: false } },
                    x: { grid: { display: false } }
                }
            }
        });

        // Device Doughnut Chart
        const ctxDevice = document.getElementById('deviceChart').getContext('2d');
        new Chart(ctxDevice, {
            type: 'doughnut',
            data: {
                labels: ['Desktop', 'Mobile', 'Tablet'],
                datasets: [{
                    data: [55, 35, 10],
                    backgroundColor: ['#000000', '#3b82f6', '#9ca3af'],
                    borderWidth: 0,
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '70%',
                plugins: { legend: { display: false } }
            }
        });
    </script>
</body>
</html>