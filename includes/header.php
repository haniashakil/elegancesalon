<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Elegance Salon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/index.php">Elegance Salon</a>
    <ul class="navbar-nav ms-auto">
      <?php if(isset($_SESSION['user_id'])): ?>
        <li class="nav-item"><a class="nav-link" href="/logout.php">Logout</a></li>
      <?php else: ?>
        <li class="nav-item"><a class="nav-link" href="/login.php">Login</a></li>
      <?php endif; ?>
    </ul>
  </div>
</nav>
<div class="container mt-4">
