<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>ورود</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="text-center mb-4">فرم ورود</h2>
    <form action="" method="post" class="mx-auto" style="max-width: 400px;">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user['email'];
                header("Location: dashboard.php");
                exit();
            } else {
                echo '<div class="alert alert-danger">ایمیل یا رمز عبور اشتباه است.</div>';
            }
        }
        ?>
        <div class="mb-3">
            <label class="form-label">ایمیل</label>
            <input type="email" name="email" class="form-control" required />
        </div>
        <div class="mb-3">
            <label class="form-label">رمز عبور</label>
            <input type="password" name="password" class="form-control" required />
        </div>
        <button type="submit" class="btn btn-primary w-100">ورود</button>
        <a href="register.php" class="btn btn-link w-100 mt-2">ثبت‌نام</a>
    </form>
</div>
</body>
</html>
