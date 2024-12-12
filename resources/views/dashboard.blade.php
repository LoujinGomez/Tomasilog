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
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<title>Menu Management</title>
<style>
/* Body */
body {
    font-family: "Faculty Glyphic", serif;
    font-weight: 400;
    font-style: normal;
    color: #54473f;
    margin: 10; /* Adjust the outer margin */
}
.admin-body {
    background-color: #fcfaee; /* Background for the admin body */
    color: #54473f; /* Text color */
    font-family: "Faculty Glyphic", serif;
    margin-top: 20px; /* Add a small margin to the top */
}

/* Navbar */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #fcfaee;
    margin-bottom: 10px; /* Add spacing below the navbar */
}
.navbar-logo {
    font-size: 1.5em;
    font-weight: bold;
}
.navbar-links {
    display: flex;
    gap: 30px; /* Spacing between links */
    justify-content: center; /* Center-align the links */
    flex-grow: 1; /* Ensure links take up available space */
}

/* Navbar Links Styling */
.navbar-links a {
    text-decoration: none; /* Remove underline */
    color: #333; /* Link color */
    font-size: 1.1em; /* Font size for readability */
    font-weight: 500; /* Slightly bold font */
    padding: 5px 10px; /* Add padding for click area */
    transition: color 0.3s ease; /* Smooth color transition on hover */
}
.navbar-profile a {
    color: #da8359; /* Profile icon color */
    font-size: 1.5rem;
}

.navbar-links a:hover {
    color: #da8359; /* Theme color on hover */
}

/* Table */
.table {
    table-layout: fixed; /* Ensures table layout consistency */
    width: 100%; /* Full width */
    border-collapse: collapse; /* Remove gaps between table cells */
}
.table.custom-table thead {
    background-color: #da8359; /* Theme color for table header */
    color: #fff;
}
.table.custom-table tbody tr:nth-child(odd) {
    background-color: #fcfaee;
}
.table.custom-table tbody tr:nth-child(even) {
    background-color: #ecdfcc;
}
.table.custom-table tbody tr:hover {
    background-color: #f3e6d8; /* Hover effect for rows */
}
.table.custom-table th,
.table.custom-table td {
    text-align: center; /* Center-align text */
    vertical-align: middle; /* Center-align vertically */
}

/* Description Container */
.description-container {
    position: relative;
    max-width: 600px; /* Optional: Limit the width */
    text-align: left;
}
.description-text {
    margin: 0;
    max-height: 72px; /* Show 3 lines initially */
    line-height: 1.2em;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: normal;
    transition: max-height 0.3s ease-in-out; /* Smooth transition */
}
.description-text.expanded {
    max-height: none; /* Remove height limit when expanded */
}
.toggle-description {
    margin-top: 5px;
    background-color: transparent;
    color: #da8359;
    border: none;
    font-size: 14px;
    cursor: pointer;
    text-decoration: none;
    padding: 0;
}
.toggle-description:hover {
    color: #0056b3;
}


/* Add Button Style */
.add-btn-size {
    background-color: #da8359; /* Theme background */
    color: #fff; /* Text color */
    border: none; /* Remove border */
    border-radius: 25px; /* Rounded corners */
    padding: 10px 20px; /* Consistent padding */
    font-size: 14px; /* Font size for readability */
    cursor: pointer; /* Pointer cursor for interactivity */
    transition: background-color 0.3s ease; /* Smooth hover effect */
    width: 100%; /* Full-width button for the form */
    text-align: center; /* Center-align text */
    height: 40px; /* Fixed height for consistency */
}

/* Add Button Hover Effect */
.add-btn-size:hover {
    background-color: #ac6947; /* Darker shade on hover */
}



/* Uniform Button Style */
.upde-btn-size {
    background-color: #da8359; /* Theme background */
    color: #fff; /* Text color */
    border: none; /* Remove border */
    border-radius: 25px; /* Rounded corners */
    padding: 10px 20px; /* Consistent padding for all buttons */
    font-size: 14px; /* Font size for readability */
    cursor: pointer;
    transition: background-color 0.3s ease; /* Smooth hover effect */
    min-width: 120px; /* Set a minimum width for consistency */
    text-align: center; /* Center-align text inside the button */
    height: 40px; /* Ensure consistent button height */
    display: inline-flex; /* Prevent shrinking */
    align-items: center; /* Vertically align text */
    justify-content: center; /* Horizontally align text */
}

/* Hover Effect */
.upde-btn-size:hover {
    background-color: #ac6947; /* Darker shade on hover */
}


/* Button Container */
.button-container {
    display: flex;
    flex-direction: column; /* Stack buttons vertically */
    gap: 10px; /* Space between the buttons */
    justify-content: center; /* Align buttons vertically within the container */
    align-items: center; /* Center align buttons horizontally */
}

.button-container .btn.upde-btn-size {
    background-color: #da8359 !important; /* Theme background */
    color: #fff !important; /* Text color */
    border: none !important; /* Remove border */
    border-radius: 25px !important; /* Rounded corners */
    padding: 8px 15px !important; /* Padding for click area */
    font-size: 14px !important; /* Font size */
    cursor: pointer;
    transition: background-color 0.3s ease; /* Smooth hover effect */
    text-align: center;
}

.button-container .btn.upde-btn-size:hover {
    background-color: #ac6947 !important; /* Darker background on hover */
}

/* Cards */
.card-header {
    font-weight: bold;
    background-color: #da8359;
    color: #fff;
}

/* Modal */
.modal-content .form-label {
    font-weight: bold;
}

/* Buttons in Form */
.btn {
    padding: 8px 15px;
    background-color: #da8359;
    color: #fff;
    border-radius: 5px;
    text-decoration: none;
    font-size: 14px;
    transition: background-color 0.3s ease;
}
.btn:hover {
    background-color: #ac6947;
}
.btn-primary {
    background-color: #007bff;
    border: none;
}
.btn-primary:hover {
    background-color: #0056b3;
}
.btn-warning {
    background-color: #ffc107;
    border: none;
}
.btn-warning:hover {
    background-color: #e0a800;
}

</style>
</head>
<body class="admin-body">

<div class="section">
    <div class="navbar">
        <div class="navbar-logo">Tomasilog</div>
        <div class="navbar-links">
            <a href="{{ route('welcome') }}">Home</a>
            <a href="{{ route('dashboard') }}">Manage Menu</a>
            <a href="{{ route('trashFoodMenu') }}">Trash</a>
    </div>
        <div class="navbar-profile">
            <a href="{{ route('userprofile') }}">
                <i class="fas fa-user" style="color: #da8359; font-size: 1.5rem;"></i>
            </a>
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" style="background-color: red; color: white; border: none; padding: 10px 20px; font-size: 16px; border-radius: 5px; cursor: pointer;">Logout</button>
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

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>There were some errors with your submission:</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
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
                                    <td>{{ $loop->iteration + $menuItems->firstItem() - 1 }}</td>
                                    <td><img src="{{ asset('storage/' . $item->image) }}" alt="Product" style="width: 50px; height: auto;"></td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>₱{{ number_format($item->price, 2) }}</td>
                                    <td>
                                        <div class="button-container">
                                        <button class="btn upde-btn-size" data-bs-toggle="modal" data-bs-target="#updateModal{{$item->id}}">Update</button>
                                                <form action="{{ route('food_menu.destroy', $item->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn upde-btn-size" style="background-color: red; color: white;">Delete</button>
                                                </form>
                                        </div>
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
                    <div class="d-flex justify-content-center mt-3 pagination-container">
                      {{ $menuItems->links('pagination::simple-bootstrap-4') }}
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
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Product Description</label>
                                <textarea class="form-control" name="description"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Product Price</label>
                                <input type="number" step="0.01" class="form-control" name="price">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Product Image</label>
                                <input type="file" class="form-control" name="image" accept="image/*">
                            </div>
                            <button type="submit" class="btn add-btn-size">Add</button>
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
                            @if ($order->status === 'Cancelled')
                                <!-- Display Cancelled Text -->
                                <span class="text-danger font-weight-bold">Cancelled</span>
                            @else
                                <!-- Show Dropdown for Other Statuses -->
                                <form action="{{ route('admin.orders.updateStatus', $order->id) }}" method="POST">
                                    @csrf
                                    <select name="status" onchange="this.form.submit()" class="form-select form-select-sm">
                                        <option value="Pending" {{ $order->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="Confirmed" {{ $order->status == 'Confirmed' ? 'selected' : '' }}>Confirmed</option>
                                        <option value="Ready" {{ $order->status == 'Ready' ? 'selected' : '' }}>Ready</option>
                                    </select>
                                </form>
                            @endif
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