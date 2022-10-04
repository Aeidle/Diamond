<?php
    session_start();
    $pdo = require_once 'conn.php';

    //get the variables send by POST methode
    $user_id = uniqid('user');
    $user_Fname = $_POST['firstname'];
    $user_Lname = $_POST['lastname'];
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];

    $data1 = [
        'user_id' => $user_id,
        'user_email' => $user_email,
        'user_password' => password_hash($user_password, PASSWORD_BCRYPT),
    ];
    $data2 = [
        'user_id' => $user_id,
        'user_Fname' => $user_Fname,
        'user_Lname' => $user_Lname,
    ];

    $sql = 'INSERT INTO user_auth(user_id, user_email, user_password) VALUES(:user_id, :user_email, :user_password)';
    $statement = $pdo->prepare($sql);
    $statement->execute($data1);

    $sql = 'INSERT INTO user_info(user_id, user_Fname, user_Lname) VALUES(:user_id, :user_Fname, :user_Lname)';
    $statement = $pdo->prepare($sql);
    $statement->execute($data2);

    header('Location: http://localhost:4000/www/website/login.php');

    