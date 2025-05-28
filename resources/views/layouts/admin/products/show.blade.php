<!DOCTYPE html>
<html>
<head>
    <title>View Product</title>
    <!-- Add your CSS and JS links here -->
</head>
<body>
    @include('layouts.admin.sidebar')

    @include('layouts.admin.navbar')

    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Admin /</span> View Product
            </h4>

            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Product Details</h5>

                    <p><strong>ID:</strong> {{ $product->id }}</p>
                    <p><strong>Name:</strong> {{ $product->name }}</p>
                    <p><strong>Description:</strong> {{ $product->description }}</p>
                    <p><strong>Quantity:</strong> {{ $product->quantity }}</p>
                </div>
            </div>

            <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
            <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Edit Product</a>
        </div>
    </div>
</body>
</html>
