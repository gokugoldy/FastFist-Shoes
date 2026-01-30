<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders | STRIDE Admin</title>
    
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
        .header-icons .btn-icon:hover { background: #f9fafb; color: #000; }

        /* --- Order Table Styles --- */
        .card-table {
            background: #fff;
            border-radius: 16px;
            border: 1px solid #e5e7eb;
            box-shadow: var(--card-shadow);
            overflow: hidden;
        }

        .filters-toolbar {
            padding: 20px;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .search-input { position: relative; width: 300px; }
        .search-input i { position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: #9ca3af; }
        .search-input input { padding-left: 40px; border-radius: 8px; border: 1px solid #e5e7eb; width: 100%; padding-top: 10px; padding-bottom: 10px; }

        .btn-export {
            background-color: #fff;
            border: 1px solid #e5e7eb;
            color: #374151;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: 0.2s;
        }
        .btn-export:hover { background-color: #f9fafb; color: #000; border-color: #d1d5db; }

        /* Table */
        .table-custom { margin-bottom: 0; width: 100%; }
        .table-custom thead th {
            background-color: #f9fafb;
            font-size: 0.75rem;
            text-transform: uppercase;
            color: #6b7280;
            font-weight: 600;
            padding: 16px 24px;
            border-bottom: 1px solid #e5e7eb;
        }
        .table-custom tbody td {
            padding: 16px 24px;
            vertical-align: middle;
            border-bottom: 1px solid #f3f4f6;
            font-size: 0.9rem;
        }

        .customer-cell { display: flex; align-items: center; gap: 12px; }
        .customer-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: #e5e7eb;
            color: #6b7280;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.85rem;
            font-weight: 700;
        }
        .customer-info h6 { margin: 0; font-weight: 600; font-size: 0.9rem; color: #111; }
        .customer-info span { font-size: 0.8rem; color: #6b7280; display: block; }

        /* Badges */
        .badge-base { padding: 4px 10px; border-radius: 20px; font-size: 0.75rem; font-weight: 600; display: inline-block; }
        
        /* Payment Status */
        .pay-paid { background: #dcfce7; color: #166534; }
        .pay-pending { background: #ffedd5; color: #9a3412; }
        .pay-failed { background: #fee2e2; color: #991b1b; }

        /* Fulfillment Status */
        .ship-delivered { color: #065f46; position: relative; padding-left: 15px; }
        .ship-delivered::before { content: ''; width: 8px; height: 8px; background: #10b981; border-radius: 50%; position: absolute; left: 0; top: 50%; transform: translateY(-50%); }
        
        .ship-processing { color: #9a3412; position: relative; padding-left: 15px; }
        .ship-processing::before { content: ''; width: 8px; height: 8px; background: #f59e0b; border-radius: 50%; position: absolute; left: 0; top: 50%; transform: translateY(-50%); }

        .ship-shipped { color: #1e40af; position: relative; padding-left: 15px; }
        .ship-shipped::before { content: ''; width: 8px; height: 8px; background: #3b82f6; border-radius: 50%; position: absolute; left: 0; top: 50%; transform: translateY(-50%); }

        .action-btn {
            width: 32px;
            height: 32px;
            border-radius: 6px;
            border: 1px solid #e5e7eb;
            background: #fff;
            color: #6b7280;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: 0.2s;
            margin-right: 5px;
            text-decoration: none;
        }
        .action-btn:hover { background: #f9fafb; color: #000; border-color: #d1d5db; }

        /* Pagination */
        .table-footer {
            padding: 15px 24px;
            border-top: 1px solid #e5e7eb;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .page-link { color: #374151; border: 1px solid #e5e7eb; padding: 6px 12px; margin: 0 2px; border-radius: 6px; text-decoration: none; font-size: 0.9rem; }
        .page-link.active { background: #000; color: #fff; border-color: #000; }
        .page-link:hover:not(.active) { background: #f3f4f6; }

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
            <a href="#" class="nav-link active">
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
                <h2 class="h4 fw-bold mb-1">Orders</h2>
                <p class="text-muted small m-0">Manage customer orders and shipments</p>
            </div>
            <div class="header-icons">
                <span class="btn-icon"><i class="far fa-bell"></i></span>
                <span class="btn-icon"><i class="far fa-envelope"></i></span>
            </div>
        </header>

        <div class="card-table">
            
            <div class="filters-toolbar">
                <div class="d-flex gap-3">
                    <div class="search-input">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search orders (ID, Name, Email)...">
                    </div>
                    <select class="form-select w-auto border-gray-200">
                        <option>Status: All</option>
                        <option>Paid</option>
                        <option>Pending</option>
                        <option>Refunded</option>
                    </select>
                    <input type="date" class="form-control w-auto border-gray-200">
                </div>
                <button class="btn-export">
                    <i class="fas fa-download me-2"></i> Export CSV
                </button>
            </div>

            <div class="table-responsive">
                <table class="table table-custom">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Date</th>
                            <th>Total</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-bold text-primary">#ORD-001</td>
                            <td>
                                <div class="customer-cell">
                                    <div class="customer-avatar">JW</div>
                                    <div class="customer-info">
                                        <h6>James Wilson</h6>
                                        <span>james@example.com</span>
                                    </div>
                                </div>
                            </td>
                            <td>Oct 24, 2025</td>
                            <td class="fw-bold">$485.00</td>
                            <td><span class="badge-base pay-paid">Paid</span></td>
                            <td><span class="ship-delivered">Delivered</span></td>
                            <td class="text-end">
                                <a href="#" class="action-btn" title="View"><i class="far fa-eye"></i></a>
                                <a href="#" class="action-btn" title="Print Invoice"><i class="fas fa-print"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td class="fw-bold text-primary">#ORD-002</td>
                            <td>
                                <div class="customer-cell">
                                    <img src="https://randomuser.me/api/portraits/women/44.jpg" class="customer-avatar" alt="User">
                                    <div class="customer-info">
                                        <h6>Emily Chen</h6>
                                        <span>emily.chen@mail.com</span>
                                    </div>
                                </div>
                            </td>
                            <td>Oct 24, 2025</td>
                            <td class="fw-bold">$340.00</td>
                            <td><span class="badge-base pay-paid">Paid</span></td>
                            <td><span class="ship-shipped">Shipped</span></td>
                            <td class="text-end">
                                <a href="#" class="action-btn"><i class="far fa-eye"></i></a>
                                <a href="#" class="action-btn"><i class="fas fa-print"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td class="fw-bold text-primary">#ORD-003</td>
                            <td>
                                <div class="customer-cell">
                                    <div class="customer-avatar">MB</div>
                                    <div class="customer-info">
                                        <h6>Michael Brown</h6>
                                        <span>mike.b@work.com</span>
                                    </div>
                                </div>
                            </td>
                            <td>Oct 23, 2025</td>
                            <td class="fw-bold">$210.00</td>
                            <td><span class="badge-base pay-pending">Pending</span></td>
                            <td><span class="ship-processing">Processing</span></td>
                            <td class="text-end">
                                <a href="#" class="action-btn"><i class="far fa-eye"></i></a>
                                <a href="#" class="action-btn"><i class="fas fa-print"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td class="fw-bold text-primary">#ORD-004</td>
                            <td>
                                <div class="customer-cell">
                                    <img src="https://randomuser.me/api/portraits/women/65.jpg" class="customer-avatar" alt="User">
                                    <div class="customer-info">
                                        <h6>Sarah Davis</h6>
                                        <span>sdavis99@gmail.com</span>
                                    </div>
                                </div>
                            </td>
                            <td>Oct 22, 2025</td>
                            <td class="fw-bold">$620.00</td>
                            <td><span class="badge-base pay-paid">Paid</span></td>
                            <td><span class="ship-processing">Processing</span></td>
                            <td class="text-end">
                                <a href="#" class="action-btn"><i class="far fa-eye"></i></a>
                                <a href="#" class="action-btn"><i class="fas fa-print"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td class="fw-bold text-primary">#ORD-005</td>
                            <td>
                                <div class="customer-cell">
                                    <div class="customer-avatar">DL</div>
                                    <div class="customer-info">
                                        <h6>David Lee</h6>
                                        <span>david.lee@tech.io</span>
                                    </div>
                                </div>
                            </td>
                            <td>Oct 21, 2025</td>
                            <td class="fw-bold">$125.00</td>
                            <td><span class="badge-base pay-failed">Failed</span></td>
                            <td><span class="text-muted small">Cancelled</span></td>
                            <td class="text-end">
                                <a href="#" class="action-btn"><i class="far fa-eye"></i></a>
                                <a href="#" class="action-btn"><i class="fas fa-print"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="table-footer">
                <span class="text-muted small">Showing 1 to 5 of 120 entries</span>
                <nav>
                    <div class="d-flex">
                        <a href="#" class="page-link rounded-start">Previous</a>
                        <a href="#" class="page-link active">1</a>
                        <a href="#" class="page-link">2</a>
                        <a href="#" class="page-link">3</a>
                        <a href="#" class="page-link rounded-end">Next</a>
                    </div>
                </nav>
            </div>

        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>