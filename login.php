<?php
session_start();

if(isset($_SESSION['user_id'])){
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="Css/login.css">
</head>
<body>

<div class="container">

<form action="login.inc.php" method="POST">

    <h1>Login</h1>

    <label>Email Address</label>
    <input type="email" name="email" required>

    <label>Password</label>
    <input type="password" name="password" required>

    <button type="submit">Login</button>

    <p>
        Don't have an account?
        <a href="register.php">Register</a>
    </p>

</form>

</div>

</body>
</html>