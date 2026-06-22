<?php

require_once "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if ($password != $confirmPassword) {
        die("Passwords do not match!");
    }

    // Check email exists
    $check = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($check);

    if ($result->num_rows > 0) {
        die("Email already exists!");
    }

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(fullName,email,phone,password)
            VALUES('$fullName','$email','$phone','$hashedPassword')";

    if ($conn->query($sql) === TRUE) {

        header("Location: login.php");
        exit();

    } else {

        echo "Error : " . $conn->error;
    }

}

$conn->close();

?>