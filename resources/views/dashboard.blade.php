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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<title>Menu Management</title>
<style>
.toastify {
    position: fixed !important; /* Ensure it's not relative to any parent */
    z-index: 9999 !important; /* Place it above all other elements */
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
    border-radius: 8px; /* Make it visually smoother */
    background-color: #4CAF50 !important; /* Ensure background color is solid */
}


.toastify--animate {
    transition: opacity 0.3s, transform 0.3s;
}

.toastify--close-button {
    color: #fff; /* Ensure the close button is visible */
}
</style>
</head>
<body class="admin-body">

<div class="section">
    <div class="navbar">
        <div class="navbar-logo">Tomasilog</div>
        <div class="navbar-links d-flex">
    <a href="{{ route('dashboard') }}">Manage Menu</a>
    <a href="{{ route('trashFoodMenu') }}">Trash</a>
</div>
        <div class="navbar-profile">
            <a href="{{ route('userprofile') }}">
                <i class="fas fa-user" style="color: #da8359; font-size: 1.5rem;"></i>
            </a>
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit">Logout</button>
            </form>
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
                                @foreach ($menuItems as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td><img src="{{ asset('storage/' . $item->image) }}" alt="Product" style="width: 50px; height: auto;"></td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>₱{{ number_format($item->price, 2) }}</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#updateModal{{ $item->id }}">Update</button>
                                        <form action="{{ route('food_menu.destroy', $item->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-warning btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                                <!-- Update Modal -->
                                <div class="modal fade" id="updateModal{{ $item->id }}" tabindex="-1" aria-labelledby="updateModalLabel{{ $item->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Update Product</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('food_menu.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="name{{ $item->id }}" class="form-label">Product Name</label>
                                                        <input type="text" class="form-control" name="name" value="{{ $item->name }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="description{{ $item->id }}" class="form-label">Product Description</label>
                                                        <textarea class="form-control" name="description" required>{{ $item->description }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="price{{ $item->id }}" class="form-label">Product Price</label>
                                                        <input type="number" step="0.01" class="form-control" name="price" value="{{ $item->price }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="image{{ $item->id }}" class="form-label">Product Image</label>
                                                        <input type="file" class="form-control" name="image">
                                                        <img src="{{ asset('storage/' . $item->image) }}" alt="Current Image" style="max-width: 100px; height: auto; margin-top: 10px;">
                                                    </div>
                                                </div>
                                                <div class="modal-footer d-flex justify-content-center">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
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
                        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Product Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Product Description</label>
                                <textarea class="form-control" name="description" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Product Price</label>
                                <input type="number" step="0.01" class="form-control" name="price" required>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Product Image</label>
                                <input type="file" class="form-control" name="image" accept="image/*">
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>


            <div class="col-md-12 mt-5">
    <div class="card">
        <div class="card-header">Order History</div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>User</th>
                        <th>Total Price</th>
                        <th>Status</th>
                        <th>Summary</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->user->name }}</td>
                            <td>₱{{ number_format($order->total_price, 2) }}</td>
                            <td>{{ $order->status }}</td>
                            <td>{{ $order->summary }}</td>
                            <td>{{ $order->created_at->format('Y-m-d H:i:s') }}</td>
                            <td>
                                <form action="{{ route('admin.orders.updateStatus', $order->id) }}" method="POST">
                                    @csrf
                                    <select name="status" onchange="this.form.submit()" class="form-select form-select-sm">
                                        <option value="Pending" {{ $order->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="Confirmed" {{ $order->status == 'Confirmed' ? 'selected' : '' }}>Confirmed</option>
                                        <option value="Ready" {{ $order->status == 'Ready' ? 'selected' : '' }}>Ready</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<script>
    @if (session('success'))
        .showToast();
    @endif
</script>

        </div>
    </div>
</div>
 
</body>
</html>
