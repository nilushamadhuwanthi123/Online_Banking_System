# 🔐 Authentication Module - Online Banking System

This module implements the user authentication functionality for the Online Banking System. It provides secure user registration, login, session management, and logout features.

## ✨ Features

- User Registration
- User Login
- Password Hashing
- Password Verification
- Session Management
- Protected Dashboard Access
- User Logout
- Responsive User Interface

## 📂 Project Structure

```text
OnlineBankingSystem/
│
├── connection.php
├── register.php
├── register.inc.php
├── login.php
├── login.inc.php
├── dashboard.php
├── logout.php
│
├── Css/
│   ├── register.css
│   ├── login.css
│   └── dashboard.css
```

## 🛠 Technologies Used

- PHP
- MySQL
- HTML5
- CSS3
- JavaScript
- XAMPP

## 🔒 Security Features

- Password Hashing using `password_hash()`
- Password Verification using `password_verify()`
- Session-based Authentication
- Protected Routes

## 🚀 Setup Instructions

1. Clone the repository.

```bash
git clone https://github.com/your-username/OnlineBankingSystem.git
```

2. Move the project folder to:

```text
xampp/htdocs/
```

3. Create a database named:

```text
online_banking_system
```

4. Import the SQL table:

```sql
CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullName VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone VARCHAR(15) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

5. Start Apache and MySQL using XAMPP.

6. Open the application:

```text
http://localhost/OnlineBankingSystem/register.php
```

## 📌 Module Branch

```text
authentication_module
```

## 📈 Future Enhancements

- Dark / Light Mode
- Bank Account Management
- Deposit & Withdraw
- Money Transfer
- Transaction History
- Admin Dashboard
- Email Notifications
- PDF Statements

---
Developed as part of the **Online Banking System** project using PHP and MySQL.
