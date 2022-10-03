<?php
// ini_set('display_errors',1);

// Constants for username
define('_USER_NAME_MIN_LEN', 2);
define('_USER_NAME_MAX_LEN', 15);

// Constants for password
define('_USER_PASSWORD_MIN_LEN', 8);

// Constants for email
define('_REGEX_EMAIL', '/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/');
define('_USER_EMAIL', 'a@a.com');

// ##############################
// Validate user name - check user name is set and is not to long or to short
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
// Validate user email - check user email is set and is valid and not used before
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
// Validate user password - check user password is set and is not to short
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
// Validate user password confirm - check user password confirm is set and is equal to user password
function _validate_user_password_confirm(){
    $error_message = 'user_password_confirm missing or does not match';
    if ( ! isset($_POST['user_password_confirm']) ){
        _respond($error_message, 400); 
    };
    if ( $_POST['user_password_confirm'] != $_POST['user_password'] ) {
        _respond($error_message, 400);
    }
    return $_POST['user_password_confirm'];
}

// ##############################
// Validate image upload - check image is set and is not to large or wrong format
function _validate_image_upload(){
    $error_message = 'fileToUpload missing or invalid';
    if ( ! isset($_FILES['fileToUpload']) ){
        _respond($error_message, 400); 
    };
    if($_FILES['fileToUpload']['error'] === UPLOAD_ERR_INI_SIZE) {
        _respond('item_image too large', 400);
    }

    $item_image_temp_name = $_FILES["fileToUpload"]["tmp_name"]; // C:\xampp\tmp\php791.tmp || C:\xampp\tmp\php5245.tmp
    $target_dir = "images/uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // just reads the extension of the file
    $image_mime = mime_content_type($_FILES["fileToUpload"]["tmp_name"]); // reads the mime inside the file
    $accepted_image_formats = ['image/png', 'image/jpeg'];
    if( ! in_array($image_mime, $accepted_image_formats) ){
        _respond('image not allowed', 400);
        exit();
    }
    // Give image a random name/id
    $random_image_name = bin2hex(random_bytes(16));
    switch($image_mime){
        case 'image/png':
        $random_image_name .= '.png';
    break;
    case 'image/jpeg':
        $random_image_name .= '.jpeg';
    break;
    }

    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$random_image_name)){
        return $target_file;
    }  
    
}

// ##############################
// Validate from city name
function _validate_from_city_name(){
    //If the user doesn't put at from city, fallback to '' - nothing, that shows everything
    $from_city = $_GET['from_city_name'] ?? 0;
    // If from_city_name is empty
    if ( ! isset($_GET['from_city_name']) ){
        http_response_code(400);
        echo json_encode(['Info'=>'Missing from_city_name variable']);
        exit();
    }
    
    // If from_city_name too short
    if( strlen($from_city) < 1 ){
        http_response_code(400);
        echo json_encode(['Info'=>'from_city_name is too short.']);
        exit();
    }
    
    // If from_city_name is too long
    if( strlen($from_city) > 20 ){
        http_response_code(400);
        echo json_encode(['Info'=>'from_city_name is too long.']);
        exit();
    }
}

// ##############################
// Validate to city name
function _validate_to_city_name(){
    //If the user doesn't put at to city, fallback to '' - nothing, that shows everything
    $to_city = $_GET['to_city_name'] ?? 0;
    // If to_city_name is empty
    if ( ! isset($_GET['to_city_name']) ){
        http_response_code(400);
        echo json_encode(['Info'=>'Missing to_city_name variable']);
        exit();
    }

    // If to_city_name too short
    if( strlen($to_city) < 1 ){
        http_response_code(400);
        echo json_encode(['Info'=>'to_city_name is too short.']);
        exit();
    }

    // If to_city_name is too long
    if( strlen($to_city) > 20 ){
        http_response_code(400);
        echo json_encode(['Info'=>'to_city_name is too long.']);
        exit();
    }
}

// ##############################
// Create a response that shows an errormessage
function _respond( $message = '', $http_response_code = 200 ){
    header('Content-Type: application/json');
    http_response_code($http_response_code);
    // If message is an array, leave it. If it's text make it an associative array
    $response = is_array($message) ? $message : ['info:'=>$message];
    echo json_encode($response);
    exit();
}