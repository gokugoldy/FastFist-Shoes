<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product | STRIDE Admin</title>
    
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
            padding-bottom: 80px; /* Space for fixed bottom bar if needed */
        }

        /* --- Top Header --- */
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

        /* --- Form Styles --- */
        .card-section {
            background: #fff;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
            box-shadow: var(--card-shadow);
            padding: 24px;
            margin-bottom: 24px;
        }
        
        .card-title { font-weight: 700; font-size: 1.1rem; margin-bottom: 20px; color: #111; }
        
        .form-label { font-size: 0.85rem; font-weight: 600; color: #374151; margin-bottom: 8px; }
        .form-control, .form-select {
            border-radius: 8px;
            border: 1px solid #e5e7eb;
            padding: 10px 15px;
            font-size: 0.95rem;
        }
        .form-control:focus, .form-select:focus { border-color: #000; box-shadow: none; }
        
        /* Image Upload */
        .image-upload-box {
            border: 2px dashed #e5e7eb;
            border-radius: 12px;
            padding: 40px 20px;
            text-align: center;
            cursor: pointer;
            transition: 0.2s;
            background: #f9fafb;
        }
        .image-upload-box:hover { border-color: #9ca3af; background: #f3f4f6; }
        .upload-icon { font-size: 2rem; color: #9ca3af; margin-bottom: 10px; }
        
        /* Action Buttons */
        .page-actions {
            display: flex;
            gap: 10px;
        }
        .btn-cancel {
            background: #fff;
            border: 1px solid #e5e7eb;
            color: #374151;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            transition: 0.2s;
        }
        .btn-cancel:hover { background: #f3f4f6; }
        
        .btn-save {
            background: #000;
            color: #fff;
            border: none;
            padding: 10px 25px;
            border-radius: 8px;
            font-weight: 600;
            transition: 0.2s;
        }
        .btn-save:hover { background: #333; color: #fff; }

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
            <a href="admin-products.html" class="nav-link active">
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
                <h2 class="h4 fw-bold mb-1">Add Product</h2>
                <div class="d-flex align-items-center text-muted small">
                    <a href="admin-products.html" class="text-decoration-none text-muted">Products</a>
                    <span class="mx-2">/</span>
                    <span>Add New</span>
                </div>
            </div>
            <div class="page-actions">
                <a href="admin-products.html" class="btn btn-cancel">Cancel</a>
                <button class="btn btn-save">Save Product</button>
            </div>
        </header>

        <div class="row">
            
            <div class="col-lg-8">
                
                <div class="card-section">
                    <h5 class="card-title">General Information</h5>
                    <div class="mb-3">
                        <label class="form-label">Product Name</label>
                        <input type="text" class="form-control" placeholder="e.g. Nike Air Max">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" rows="5" placeholder="Product description..."></textarea>
                    </div>
                </div>

                <div class="card-section">
                    <h5 class="card-title">Product Media</h5>
                    <div class="image-upload-box">
                        <i class="far fa-image upload-icon"></i>
                        <h6 class="fw-bold mb-1">Click to upload image</h6>
                        <p class="text-muted small mb-0">or drag and drop here (Max 5MB)</p>
                        <input type="file" hidden>
                    </div>
                </div>

                <div class="card-section">
                    <h5 class="card-title">Inventory & Shipping</h5>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">SKU</label>
                            <input type="text" class="form-control" placeholder="NK-001">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Barcode / ISBN</label>
                            <input type="text" class="form-control" placeholder="00000">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Quantity</label>
                            <input type="number" class="form-control" placeholder="0">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Weight (kg)</label>
                            <input type="number" class="form-control" placeholder="0.0">
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-4">
                
                <div class="card-section">
                    <h5 class="card-title">Status</h5>
                    <select class="form-select mb-3">
                        <option value="active">Active</option>
                        <option value="draft">Draft</option>
                        <option value="archived">Archived</option>
                    </select>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="featureSwitch">
                        <label class="form-check-label small" for="featureSwitch">Featured Product</label>
                    </div>
                </div>

                <div class="card-section">
                    <h5 class="card-title">Organization</h5>
                    
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select class="form-select">
                            <option>Select Category...</option>
                            <option>Men</option>
                            <option>Women</option>
                            <option>Kids</option>
                            <option>Sports</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Sub-Category</label>
                        <select class="form-select">
                            <option>Select Sub-Category...</option>
                            <option>Running</option>
                            <option>Casual</option>
                            <option>Formal</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Vendor / Brand</label>
                        <input type="text" class="form-control" placeholder="e.g. Nike">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tags</label>
                        <input type="text" class="form-control" placeholder="Enter tags separated by comma">
                    </div>
                </div>

                <div class="card-section">
                    <h5 class="card-title">Pricing</h5>
                    <div class="mb-3">
                        <label class="form-label">Base Price ($)</label>
                        <input type="number" class="form-control" placeholder="0.00">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Discount Price ($)</label>
                        <input type="number" class="form-control" placeholder="0.00">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="tax">
                        <label class="form-check-label small" for="tax">Charge tax on this product</label>
                    </div>
                </div>

            </div>

        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple script to trigger file input when the box is clicked  
        document.querySelector('.image-upload-box').addEventListener('click', function() {
            this.querySelector('input[type="file"]').click();
        });
    </script>
</body>
</html>