<?php

session_start();
$pdo = require_once 'conn.php';

//get the email from database
$stmt = $pdo->prepare("SELECT * FROM user_auth WHERE user_email = :email");
$stmt->execute([':email' => $_POST['email']]);
$user = $stmt->fetch();


//check if the password enterd and the hashed password stored match
if ($user && password_verify($_POST['password'], $user['user_password']))
{
    echo "valid!";
} else {
    echo "invalid";
}
