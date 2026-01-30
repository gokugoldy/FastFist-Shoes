<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers | STRIDE Admin</title>
    
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

        /* --- Customer Table Styles --- */
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

        .btn-add {
            background-color: #000;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: 0.2s;
        }
        .btn-add:hover { background-color: #333; color: #fff; }

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

        .user-cell { display: flex; align-items: center; gap: 15px; }
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #f3f4f6;
            object-fit: cover;
            border: 1px solid #e5e7eb;
        }
        .user-info h6 { margin: 0; font-weight: 600; font-size: 0.95rem; color: #111; }
        .user-info span { font-size: 0.8rem; color: #6b7280; }

        .status-badge {
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        .status-active { background: #dcfce7; color: #166534; }
        .status-inactive { background: #fee2e2; color: #991b1b; }

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
            <a href="admin-orders.html" class="nav-link">
                <i class="fas fa-shopping-cart"></i> Orders
            </a>
            <a href="#" class="nav-link active">
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
                <h2 class="h4 fw-bold mb-1">Customers</h2>
                <p class="text-muted small m-0">Manage your customer base</p>
            </div>
            <div class="header-icons">
                <span class="btn-icon"><i class="far fa-bell"></i></span>
                <span class="btn-icon"><i class="far fa-envelope"></i></span>
            </div>
        </header>


        <div class="card-table">
            
            <div class="filters-toolbar">
                <div class="d-flex gap-3 justify-content-between w-100">
                    <div class="search-input">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search customers...">
                    </div>
                    <select class="form-select w-25 border-gray-200">
                        <option>Status: All</option>
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                    <select class="form-select w-25 border-gray-200">
                        <option>Location: All</option>
                        <option>USA</option>
                        <option>UK</option>
                        <option>Canada</option>
                    </select>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-custom">
                    <thead>
                        <tr>
                            <th width="35%">Customer</th>
                            <th>Location</th>
                            <th>Total Orders</th>
                            <th>Total Spent</th>
                            <th>Last Active</th>
                            <th>Status</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="user-cell">
                                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="user-avatar">
                                    <div class="user-info">
                                        <h6>James Wilson</h6>
                                        <span>james.w@example.com</span>
                                    </div>
                                </div>
                            </td>
                            <td>New York, USA</td>
                            <td>12</td>
                            <td class="fw-bold">$1,240.00</td>
                            <td>2 mins ago</td>
                            <td><span class="status-badge status-active">Active</span></td>
                            <td class="text-end">
                                <a href="#" class="action-btn"><i class="far fa-edit"></i></a>
                                <a href="#" class="action-btn"><i class="far fa-envelope"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="user-cell">
                                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User" class="user-avatar">
                                    <div class="user-info">
                                        <h6>Emily Chen</h6>
                                        <span>emily.chen@mail.com</span>
                                    </div>
                                </div>
                            </td>
                            <td>London, UK</td>
                            <td>8</td>
                            <td class="fw-bold">$850.50</td>
                            <td>1 day ago</td>
                            <td><span class="status-badge status-active">Active</span></td>
                            <td class="text-end">
                                <a href="#" class="action-btn"><i class="far fa-edit"></i></a>
                                <a href="#" class="action-btn"><i class="far fa-envelope"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="user-cell">
                                    <img src="https://randomuser.me/api/portraits/men/85.jpg" alt="User" class="user-avatar">
                                    <div class="user-info">
                                        <h6>Michael Brown</h6>
                                        <span>mike.b@work.com</span>
                                    </div>
                                </div>
                            </td>
                            <td>Toronto, CA</td>
                            <td>3</td>
                            <td class="fw-bold">$210.00</td>
                            <td>5 days ago</td>
                            <td><span class="status-badge status-inactive">Inactive</span></td>
                            <td class="text-end">
                                <a href="#" class="action-btn"><i class="far fa-edit"></i></a>
                                <a href="#" class="action-btn"><i class="far fa-envelope"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="user-cell">
                                    <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="User" class="user-avatar">
                                    <div class="user-info">
                                        <h6>Sarah Davis</h6>
                                        <span>sarah.d@gmail.com</span>
                                    </div>
                                </div>
                            </td>
                            <td>Chicago, USA</td>
                            <td>15</td>
                            <td class="fw-bold">$2,100.00</td>
                            <td>12 hours ago</td>
                            <td><span class="status-badge status-active">Active</span></td>
                            <td class="text-end">
                                <a href="#" class="action-btn"><i class="far fa-edit"></i></a>
                                <a href="#" class="action-btn"><i class="far fa-envelope"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="user-cell">
                                    <img src="https://randomuser.me/api/portraits/men/11.jpg" alt="User" class="user-avatar">
                                    <div class="user-info">
                                        <h6>David Lee</h6>
                                        <span>david.lee@tech.io</span>
                                    </div>
                                </div>
                            </td>
                            <td>Austin, USA</td>
                            <td>1</td>
                            <td class="fw-bold">$125.00</td>
                            <td>1 month ago</td>
                            <td><span class="status-badge status-inactive">Inactive</span></td>
                            <td class="text-end">
                                <a href="#" class="action-btn"><i class="far fa-edit"></i></a>
                                <a href="#" class="action-btn"><i class="far fa-envelope"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="table-footer">
                <span class="text-muted small">Showing 1 to 5 of 2,450 entries</span>
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