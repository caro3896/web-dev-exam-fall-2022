<?php
ini_set('display_errors',1);

// Validate the flight ID
if( ! isset($_POST['flight_id']) ){
    http_response_code(400);
    echo json_encode(['info'=>'flight_id missing']);
    exit();
};

if( !ctype_digit($_POST['flight_id']) ){
    http_response_code(400);
    echo json_encode(['info'=>'flight_id must be a digit']);
    exit();
};

// Delete the flight from the database
try{
    $db = new PDO('sqlite:'.__DIR__.'/momondo.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $q = $db->prepare('DELETE FROM flights WHERE flight_id = :id');
    $q->bindValue(':id', $_POST['flight_id']);
    $q->execute();
    echo json_encode(['info'=>'flight delete', 'flight_id'=>$_POST['flight_id']]);
    exit();
  }
  catch(Exception $ex){
    echo $ex;
    exit();
    http_response_code(500);
    echo json_encode(['info'=>'System under maintainance']);
    exit();  
  }
