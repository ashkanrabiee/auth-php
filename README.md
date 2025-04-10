# 🔐 PHP Login & Registration System with Bootstrap 5

A clean and simple login/register system using **PHP**, **MySQL**, and **Bootstrap 5**. This project is ideal for beginners who want to learn how authentication works in a procedural PHP environment.


## 📁 Folder Structure
```bash
login-register/ ├── config.php # Session init + DB include
├── db.php # PDO database connection
├── index.php # Login form & login logic
├── register.php # Registration form & logic
├── dashboard.php # Protected page for logged-in users
├── logout.php # Destroys session & logs out user
├── assets/ # Custom CSS or assets (optional)
 ```

   ## 🚀 Features

✅ Register new users  
✅ Login with email and password  
✅ Passwords stored securely with `password_hash()`  
✅ Prevent duplicate email registration  
✅ Secure session-based login system  
✅ Fully responsive design using Bootstrap 5  
✅ Clean UI and simple UX  

---

## 🔧 Requirements

- PHP 7.4 or higher  
- MySQL or MariaDB  
- Local server (XAMPP, WAMP, Laragon, etc.)

---

## 🛠️ Setup Instructions

### 1. Clone the repository
```bash
git clone https://github.com/ashkanrabiee/auth-php.git

```
2. Create the database
Use the following SQL to create the login_system database and users table:

```bash

CREATE DATABASE login_system CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE login_system;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

```

3. Update database credentials
Edit db.php and set your local MySQL credentials:

```bash
$host = 'localhost';
$db   = 'login_system';
$user = 'root';
$pass = ''; // Change if needed
```

4. Run the project
Open index.php in your local server (e.g., http://localhost/php-login-bootstrap/index.php)


✅ Usage Flow
🔒 Go to register.php and create an account

🔑 Go to index.php and log in

👋 After successful login, you'll be redirected to dashboard.php

🚪 Click "Logout" to destroy session and return to login

📄 License
This project is open-source under the MIT License.







