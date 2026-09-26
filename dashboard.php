<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: auth/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - FlavorVault</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="#">FlavorVault Dashboard</a>
            <a href="auth/logout.php" class="btn btn-danger">Logout</a>
        </div>
    </nav>
    <div class="container mt-5">
        <h2>Welcome, <?= htmlspecialchars($_SESSION['username']); ?>!</h2>
        <p class="text-muted">You are successfully logged into your recipe dashboard.</p>
    </div>
</body>
</html>