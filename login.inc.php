<?php

session_start();

require_once "connection.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * FROM users WHERE email='$email'";
    $result=$conn->query($sql);

    if($result->num_rows>0){

        $row=$result->fetch_assoc();

        if(password_verify($password,$row['password'])){

            $_SESSION['user_id']=$row['id'];
            $_SESSION['fullName']=$row['fullName'];

            header("Location: dashboard.php");
            exit();

        }
        else{
            echo "Incorrect Password!";
        }

    }
    else{
        echo "Email not found!";
    }

}

$conn->close();

?>