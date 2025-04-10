<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>ثبت‌نام</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="text-center mb-4">ثبت‌نام</h2>
    <form action="" method="post" class="mx-auto" style="max-width: 400px;">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->execute([$email]);

            if ($stmt->rowCount() > 0) {
                echo '<div class="alert alert-warning">این ایمیل قبلاً ثبت شده است.</div>';
            } else {
                $insert = $pdo->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
                $insert->execute([$email, $password]);
                echo '<div class="alert alert-success">ثبت‌نام با موفقیت انجام شد. حالا می‌تونی وارد بشی.</div>';
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
        <button type="submit" class="btn btn-success w-100">ثبت‌نام</button>
        <a href="index.php" class="btn btn-link w-100 mt-2">بازگشت به ورود</a>
    </form>
</div>
</body>
</html>
