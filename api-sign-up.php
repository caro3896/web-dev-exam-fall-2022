<?php
require_once __DIR__.'/_x.php';

_validate_user_name();
_validate_user_email();
_validate_user_password();
_validate_user_password_confirm();

$user = [
    'user_id'=>uniqid(),
    'user_name'=>$_POST['user_name'],
    'user_email'=>$_POST['user_email'],
    'user_password'=>$_POST['user_password']
];

// Success
session_start();
$_SESSION['user_name'] = $_POST['user_name'];
_respond($user);