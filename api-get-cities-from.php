<?php

ini_set('display_errors',1);
// Always start with a try catch in af PHP function

// Tell the server to try this
try{
    //If the user doesn't put at from city, fallback to '' - nothing, that shows everything
    $from_city = $_GET['from_city_name'] ?? 0;
    // Connection to the database (put in a variable)
    $db = new PDO('sqlite:'.__DIR__.'/momondo.db');
    // Searches for the flight
    $q = $db->prepare('SELECT * FROM flights WHERE from_city_name LIKE :from_city');
    $q->bindValue(':from_city', '%'.$from_city.'%');
    // Run the previous statements
    $q->execute();
    // Extract the data and put it in a variable as an associative array
    //                        (associative array)
    $flights = $q->fetchAll(PDO::FETCH_ASSOC);

    // If from_city_name is empty
    if ( ! isset($_GET['from_city_name']) ){
        http_response_code(400);
        echo json_encode(['Info'=>'Missing from_city_name variable']);
        exit();
    }

    // If from_city_name too short
    if( strlen($from_city) < 1 ){
        http_response_code(400);
        echo json_encode(['Info'=>'City name is too short.']);
        exit();
    }

    // If from_city_name is too long
    if( strlen($from_city) > 20 ){
        http_response_code(400);
        echo json_encode(['Info'=>'City name is too long.']);
        exit();
    }
    echo json_encode($flights);
    exit();
}

// If it fails, catch it with this
catch(Exception $ex){
    //echo $ex;
    http_response_code(400);
    echo json_encode(['Info:'=>'Sorry, error']);
}
