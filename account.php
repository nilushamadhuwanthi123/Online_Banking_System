<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Bank Account</title>
    <link rel="stylesheet" href="Css/account.css">
</head>
<body>

<div class="container">

<form action="account.inc.php" method="POST">

<h1>Create Account</h1>

<label>Account Type</label>

<select name="account_type">

<option value="Savings">Savings Account</option>

<option value="Current">Current Account</option>

</select>

<button type="submit">Create Account</button>

</form>

</div>

</body>
</html>