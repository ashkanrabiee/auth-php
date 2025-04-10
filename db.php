<?php
$host = 'localhost';
$db   = 'login_system';
$user = 'root';
$pass = ''; // در صورت داشتن رمز برای MySQL، اینجا وارد کن
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    die("خطا در اتصال به دیتابیس: " . $e->getMessage());
}
?>
