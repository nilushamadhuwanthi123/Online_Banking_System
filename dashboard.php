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
<title>Dashboard</title>
<link rel="stylesheet" href="Css/dashboard.css">
</head>
<body>

<div class="container">

<h1>Welcome,
<?php echo $_SESSION['fullName']; ?>
</h1>

<div class="cards">

<div class="card">
<h2>Deposit</h2>
</div>

<div class="card">
<h2>Withdraw</h2>
</div>

<div class="card">
<h2>Transfer</h2>
</div>

<div class="card">
<h2>Transactions</h2>
</div>

</div>

<a href="logout.php" class="logout-btn">Logout</a>

</div>

</body>
</html>