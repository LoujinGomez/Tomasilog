<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chonburi&family=Faculty+Glyphic&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">


<title>Menu</title>
<body class="admin-body">
<div class="section">
    <div class="navbar">
        <div class="navbar-logo">Tomasilog</div>
        <div class="navbar-links d-flex">
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('admin_menu') }}">Manage Menu</a>
        </div>
        <div class="navbar-profile">
            <a href="{{ route('userprofile') }}">
                <i class="fas fa-user" style="color: #da8359; font-size: 1.5rem;"></i>
            </a>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <!-- Menu Table -->
            <div class="col-md-8">
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <div class="card">
                    <div class="card-header">Menu</div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Picture</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img src="#" alt="Product" style="width: 50px; height: auto;"></td>
                                    <td>Sample Product</td>
                                    <td>Sample Description</td>
                                    <td>$10</td>
                                    <td>
                                    <button class="btn btn-primary custom-btn-size" data-bs-toggle="modal" data-bs-target="#updateModal">Update</button>
                                    <button class="btn btn-warning custom-btn-size">Delete</button>
                                </td>
                                <tr>
                                    <td>1</td>
                                    <td><img src="#" alt="Product" style="width: 50px; height: auto;"></td>
                                    <td>Sample Product</td>
                                    <td>Sample Description</td>
                                    <td>$10</td>
                                    <td>
                                    <button class="btn btn-primary custom-btn-size" data-bs-toggle="modal" data-bs-target="#updateModal">Update</button>
                                    <button class="btn btn-warning custom-btn-size">Delete</button>
                                </td>
                                <tr>
                                    <td>1</td>
                                    <td><img src="#" alt="Product" style="width: 50px; height: auto;"></td>
                                    <td>Sample Product</td>
                                    <td>Sample Description</td>
                                    <td>$10</td>
                                    <td>
                                    <button class="btn btn-primary custom-btn-size" data-bs-toggle="modal" data-bs-target="#updateModal">Update</button>
                                    <button class="btn btn-warning custom-btn-size">Delete</button>
                                </td>
                                </tr>

                                <!-- UPDATE MODAL -->
                                <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="#" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="#">Update Product</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="#" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="#" class="form-label">Product Name</label>
                                                        <input type="text" class="form-control" name="productName" value="#" id="productName#">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="productPrice#" class="form-label">Product Price</label>
                                                        <input type="text" class="form-control" name="productPrice" value="#" id="#">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="#" class="form-label">Product Image</label>
                                                        <input type="file" class="form-control" name="productImage" id="#">
                                                        <img src="#" alt="Current Image" style="max-width: 100px; height: auto; margin-top: 10px;">
                                                    </div>
                                                </div>
                                                <div class="modal-footer d-flex justify-content-center">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Add Product Form -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Add Product</div>
                    <div class="card-body">
                        <form action="#" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="productName" class="form-label">Product Name</label>
                                <input type="text" class="form-control" name="productName" required>
                            </div>
                            <div class="mb-3">
                                <label for="productPrice" class="form-label">Product Price</label>
                                <input type="text" class="form-control" name="productPrice" required>
                            </div>
                            <div class="mb-3">
                                <label for="productImage" class="form-label">Product Image</label>
                                <input type="file" class="form-control" name="productImage" accept="image/*">
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
