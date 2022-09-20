<?php
ini_set('display_errors',1);

define('_USER_NAME_MIN_LEN', 2);
define('_USER_NAME_MAX_LEN', 15);

define('_USER_PASSWORD_MIN_LEN', 8);

define('_REGEX_EMAIL', '/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/');

define('_USER_EMAIL', 'a@a.com');

// ##############################
function _validate_user_name(){
    $error_message = 'user_name must be min '._USER_NAME_MIN_LEN.' and max '._USER_NAME_MAX_LEN.' characters long';
    if ( ! isset($_POST['user_name']) ){
        _respond($error_message, 400); 
    };
    $_POST['user_name'] = trim($_POST['user_name']); 
    if ( strlen($_POST['user_name']) < _USER_NAME_MIN_LEN){
        _respond($error_message, 400);
    }
    if ( strlen($_POST['user_name']) > _USER_NAME_MAX_LEN){
        _respond($error_message, 400);
    }
    return $_POST['user_name'];
}

// ##############################
function _validate_user_email(){
    $error_message = 'user_email missing or not valid';
    if ( ! isset($_POST['user_email']) ){
        _respond($error_message, 400); 
    }
    if ( ! preg_match(_REGEX_EMAIL, $_POST['user_email']) ){
        _respond($error_message, 400);
    }
    if ( _USER_EMAIL == $_POST['user_email'] ){
        _respond($error_message, 400);
    }
    return $_POST['user_email'];
}

// ##############################
function _validate_user_password(){
    $error_message = 'user_password missing or not valid';
    if ( ! isset($_POST['user_password']) ){
        _respond($error_message, 400); 
    };
    if ( strlen($_POST['user_password']) < _USER_PASSWORD_MIN_LEN){
        _respond($error_message, 400);
    }
    return $_POST['user_password'];
}

// ##############################
function _validate_user_password_confirm(){
    $error_message = 'password does not match';
    if ( ! isset($_POST['user_password_confirm']) ){
        _respond($error_message, 400); 
    };
    if ( $_POST['user_password_confirm'] != $_POST['user_password'] ) {
        _respond($error_message, 400);
    }
    return $_POST['user_password_confirm'];
}

// ##############################
// function _validate_item_image(){
//     if($_FILES['item_image']['error'] === UPLOAD_ERR_INI_SIZE) {
//       _respond('item_image too large', 400);
//     }
    
//     $item_image_temp_name = $_FILES["item_image"]["tmp_name"]; // C:\xampp\tmp\php791.tmp || C:\xampp\tmp\php5245.tmp
//     $target_dir = "images/";
//     $target_file = $target_dir . basename($_FILES["img"]["name"]);
//     $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // just reads the extension of the file
//     $image_mime = mime_content_type($_FILES["img"]["tmp_name"]); // reads the mime inside the file
//     $accepted_image_formats = ['image/png', 'image/jpeg'];
//     if( ! in_array($image_mime, $accepted_image_formats) ){
//       http_response_code(400);
//       echo 'image not allowed';
//       exit();
//     }
//     $random_image_name = bin2hex(random_bytes(16));
//     switch($image_mime){
//       case 'image/png':
//         $random_image_name .= '.png';
//       break;
//       case 'image/jpeg':
//         $random_image_name .= '.jpeg';
//       break;
//     }
  
//     if(move_uploaded_file($_FILES["img"]["tmp_name"], 'images/2.png')){
//       echo 'ok';
//       exit();
//     }  
//   }

// ##############################
function _respond( $message = '', $http_response_code = 200 ){
    header('Content-Type: application/json');
    http_response_code($http_response_code);
    $response = is_array($message) ? $message : ['info:'=>$message];
    echo json_encode($response);
    exit();
}