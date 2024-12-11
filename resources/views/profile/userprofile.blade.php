<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chonburi&family=Faculty+Glyphic&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Profile</title>
</head>

<style>
        /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

    </style>
<body class="profile_css">
    <div class="profile-container">
        <div class="profile-header">
        <button class="back-btn" onclick="window.history.back();">&#8592;</button>
            <img src="profile-placeholder.png" alt="Profile Picture" class="profile-pic">
            <h2 class="user-name">John Doe</h2>
            <button class="edit-profile-btn">Edit Profile</button>
        </div>

        <div class="profile-details">
            <div class="info-group">
                <label for="username">Name:</label>
                <input type="text" id="username" value="johndoe" disabled>
            </div>
            <div class="info-group">
                <label for="email">Email:</label>
                <input type="email" id="email" value="john.doe@example.com" disabled>
            </div>
            <div class="info-group">
                <label for="phone">Phone:</label>
                <input type="text" id="phone" value="+1234567890" disabled>
            </div>
            <button class="save-changes-btn">Save Changes</button>
        </div>
    </div>
</body>
</html>