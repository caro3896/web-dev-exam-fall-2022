<?php

$email_already_in_system = 'a@a.com';

if ( $email_already_in_system == $_POST['user_email'] ) {
    http_response_code(400);
    echo json_encode(['Info'=>'Email already in use.']);
    exit();
};