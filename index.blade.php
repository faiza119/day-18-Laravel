<!DOCTYPE html>
<html>
<head>
    <title>Category Wise Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f0f4f7;
        }
        .category-title {
            color: #185a9d;
            margin-top: 40px;
            font-size: 28px;
            border-bottom: 2px solid #2ebf91;
            display: inline-block;
        }
        .card {
            border-radius: 15px;
            transition: 0.3s ease;
        }
        .card:hover {
            transform: scale(1.02);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
<div class="container py-5">
    <h1 class="text-center mb-5">🛍️ Products By Category</h1>

    @foreach($categories as $category)
        <div>
            <h2 class="category-title">{{ $category->name }}</h2>
            <div class="row mt-3">
                @foreach($category->products as $product)
                    <div class="col-md-3 mb-4">
                        <div class="card p-3">
                            <h5 class="text-primary">{{ $product->name }}</h5>
                            <p>₹ {{ number_format($product->price, 2) }}</p>
                            <button class="btn btn-outline-primary btn-sm">View</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
</body>
</html>
