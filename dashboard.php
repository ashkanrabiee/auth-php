<?php
require 'config.php';
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>داشبورد</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5 text-center">
    <h3>سلام <?= $_SESSION['user']; ?> 👋</h3>
    <a href="logout.php" class="btn btn-danger mt-3">خروج</a>
</div>
</body>
</html>
