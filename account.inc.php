<?php

session_start();
require_once "connection.php";

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $user_id = $_SESSION['user_id'];
    $account_type = $_POST['account_type'];

    // Check whether account already exists
    $check = "SELECT * FROM accounts WHERE user_id='$user_id'";
    $result = $conn->query($check);

    if($result->num_rows > 0){
        echo "You already have a bank account.";
        exit();
    }

    // Generate Account Number
    $account_number = rand(1000000000,9999999999);

    $sql = "INSERT INTO accounts(user_id,account_number,account_type)
            VALUES('$user_id','$account_number','$account_type')";

    if($conn->query($sql)===TRUE){

        header("Location: dashboard.php");
        exit();

    }else{

        echo "Error : ".$conn->error;

    }

}

$conn->close();

?>