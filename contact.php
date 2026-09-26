<?php

$message = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $msg = trim($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($msg)) {
        $message = "Thank you! Your message has been sent successfully.";
    } else {
        $message = "Please fill in all the fields.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us - FlavorVault</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">FlavorVault</a>
            <div>
                <a href="index.php" class="btn btn-outline-light me-2">Home</a>
                <a href="auth/login.php" class="btn btn-warning">Login</a>
            </div>
        </div>
    </nav>


    <div class="container mt-5" style="max-width: 600px;">
        <h2 class="text-center mb-4">Contact Us</h2>
        
        <?php if($message): ?>
            <div class="alert alert-info"><?= $message ?></div>
        <?php endif; ?>

        <form method="POST" class="card p-4 shadow-sm">
            <div class="mb-3">
                <label class="form-label">Your Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Your Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Message</label>
                <textarea name="message" rows="4" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Send Message</button>
        </form>
    </div>

</body>
</html>