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
<title>Menu Management</title>
</head>
<body class="admin-body">

<div class="section">
    <div class="navbar">
        <div class="navbar-logo">Tomasilog</div>
        <div class="navbar-links d-flex">
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
    <div class="row justify-content-center">
        <!-- Menu Table -->
        <div class="col-md-8">
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="card">
                <div class="card-header text-center">Deleted Entries</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover text-center">
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
                                @foreach ($trashedItems as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="Product" style="width: 50px; height: auto;">
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>₱{{ number_format($item->price, 2) }}</td>
                                    <td>
                                    <form action="{{ route('food_menu.restore', $item->id) }}" method="POST" style="display:inline;" 
                                    onsubmit="return confirm('Are you sure you want to restore this product?');">
                                            @csrf
                                            <button type="submit" class="btn btn-success btn-sm">Restore</button>
                                        </form>
                                        <form action="{{ route('food_menu.force_delete', $item->id) }}" method="POST" style="display:inline;" 
                                        onsubmit="return confirm('Are you sure you want to permanently delete this product?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm" style="background-color: red; color: white;">Delete Permanently</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
