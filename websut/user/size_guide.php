<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Size Guide | Fastfist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <style>
        :root { --primary-red: #ff3c3c; --dark-bg: #1a1a1a; }
        body { font-family: 'Open Sans', sans-serif; color: #1a1a1a; display: flex; flex-direction: column; min-height: 100vh; }
        h1, h2, h3, h4, h5, .navbar-brand { font-family: 'Montserrat', sans-serif; }
        
        .page-header { background-color: #f8f9fa; padding: 60px 0; margin-bottom: 40px; }
        .page-title { font-weight: 800; text-transform: uppercase; margin: 0; }

        .table-responsive { border: 1px solid #eee; margin-bottom: 40px; }
        .table th { background-color: #f8f9fa; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; padding: 15px; border-bottom: 2px solid #000; }
        .table td { padding: 15px; font-size: 0.9rem; border-bottom: 1px solid #eee; vertical-align: middle; }
    </style>
</head>
<body>

    <?php include '../header.php'; ?>

    <section class="page-header">
        <div class="container text-center">
            <h1 class="page-title">Size Guide</h1>
        </div>
    </section>

    <div class="container mb-5">
        <h3 class="fw-bold mb-3 text-uppercase h5">Men's Footwear</h3>
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th>US Size</th>
                        <th>UK Size</th>
                        <th>EU Size</th>
                        <th>CM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>7</td><td>6</td><td>40</td><td>25</td></tr>
                    <tr><td>7.5</td><td>6.5</td><td>40.5</td><td>25.5</td></tr>
                    <tr><td>8</td><td>7</td><td>41</td><td>26</td></tr>
                    <tr><td>8.5</td><td>7.5</td><td>42</td><td>26.5</td></tr>
                    <tr><td>9</td><td>8</td><td>42.5</td><td>27</td></tr>
                    <tr><td>9.5</td><td>8.5</td><td>43</td><td>27.5</td></tr>
                    <tr><td>10</td><td>9</td><td>44</td><td>28</td></tr>
                    <tr><td>11</td><td>10</td><td>45</td><td>29</td></tr>
                    <tr><td>12</td><td>11</td><td>46</td><td>30</td></tr>
                </tbody>
            </table>
        </div>

        <h3 class="fw-bold mb-3 text-uppercase h5 mt-5">Women's Footwear</h3>
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th>US Size</th>
                        <th>UK Size</th>
                        <th>EU Size</th>
                        <th>CM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>5</td><td>2.5</td><td>35.5</td><td>22</td></tr>
                    <tr><td>5.5</td><td>3</td><td>36</td><td>22.5</td></tr>
                    <tr><td>6</td><td>3.5</td><td>36.5</td><td>23</td></tr>
                    <tr><td>6.5</td><td>4</td><td>37.5</td><td>23.5</td></tr>
                    <tr><td>7</td><td>4.5</td><td>38</td><td>24</td></tr>
                    <tr><td>7.5</td><td>5</td><td>38.5</td><td>24.5</td></tr>
                    <tr><td>8</td><td>5.5</td><td>39</td><td>25</td></tr>
                    <tr><td>9</td><td>6.5</td><td>40.5</td><td>26</td></tr>
                    <tr><td>10</td><td>7.5</td><td>42</td><td>27</td></tr>
                </tbody>
            </table>
        </div>
    </div>

    <?php include '../footer.php'; ?>
</body>
</html>