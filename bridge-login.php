<?php
$_correct_email = 'a@a.com';
$_correct_password = 'password';

// Validate - check if it's an actual email
if( ! filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL )){
    header('Location: login');
    exit();
}

// Check if the users email matches the correct email
if( $_correct_email != $_POST['email'] ){
    header('Location: login');
    exit();
}

// Check if the users email matches the correct email
if( $_correct_password != $_POST['password'] ){
    header('Location: login');
    exit();
}

// Start a session 
session_start();
$_SESSION['user_name'] = 'Caroline';
header("Location: admin");