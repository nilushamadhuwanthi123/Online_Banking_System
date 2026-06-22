<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>

    <link rel="stylesheet" href="Css/register.css">
</head>
<body>

<div class="container">

    <form action="register.inc.php" method="POST">

        <h1>Create Account</h1>

        <label>Full Name</label>
        <input type="text" name="fullName" placeholder="Enter your full name" required>

        <label>Email Address</label>
        <input type="email" name="email" placeholder="example@gmail.com" required>

        <label>Phone Number</label>
        <input type="text" name="phone" placeholder="07XXXXXXXX" required>

        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password" required>

        <label>Confirm Password</label>
        <input type="password" name="confirmPassword" placeholder="Confirm password" required>

        <button type="submit">Register</button>

        <p class="login-link">
            Already have an account?
            <a href="login.php">Login</a>
        </p>

    </form>

</div>

</body>
</html>