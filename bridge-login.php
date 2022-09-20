<?php
$_correct_email = 'a@a.com';
$_correct_password = 'password';
$userName = 'Caroline';

// Validate
if( ! filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL )){
    header('Location: /');
    exit();
}

// Check if the users email matches the correct email
if( $_correct_email != $_POST['email'] ){
    header('Location: /');
    exit();
}

// Check if the users email matches the correct email
if( $_correct_password != $_POST['password'] ){
    header('Location: /');
    exit();
}

session_start();
$_SESSION['user_first_name'] = 'Caroline';
header("Location: admin");