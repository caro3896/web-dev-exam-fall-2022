<?php

ini_set('display_errors',1);
require_once __DIR__.'/_x.php';

_validate_to_city_name();
// Always start with a try catch in af PHP function

// Tell the server to try this
try{
    //If the user doesn't put at to city, fallback to '' - nothing, that shows everything
    $to_city = $_GET['to_city_name'] ?? 0;
    // Connection to the database (put in a variable)
    $db = new PDO('sqlite:'.__DIR__.'/momondo.db');
    // Searches for the city
    $q = $db->prepare('SELECT DISTINCT to_city_name, to_city_airport_name, to_city_img FROM flights WHERE to_city_name LIKE :to_city');
    $q->bindValue(':to_city', '%'.$to_city.'%');
    // Run the previous statements
    $q->execute();
    // Extract the data and put it in a variable as an associative array
    //                        (associative array)
    $flights = $q->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($flights);
    exit();
}

// If it fails, catch it with this
catch(Exception $ex){
    http_response_code(400);
    echo json_encode(['Info:'=>'Sorry, error']);
}
