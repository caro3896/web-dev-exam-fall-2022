<?php

ini_set('display_errors',1);
require_once __DIR__.'/_x.php';

_validate_from_city_name();
// Always start with a try catch in af PHP function

// Tell the server to try this
try{
    //If the user doesn't put at from city, fallback to '' - nothing, that shows everything
    $from_city = $_GET['from_city_name'] ?? 0;
    // Connection to the database (put in a variable)
    $db = new PDO('sqlite:'.__DIR__.'/momondo.db');
    // Searches for the city
    $q = $db->prepare('SELECT DISTINCT from_city_name, from_city_airport_name, from_city_img FROM flights WHERE from_city_name LIKE :from_city');
    $q->bindValue(':from_city', '%'.$from_city.'%');
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
