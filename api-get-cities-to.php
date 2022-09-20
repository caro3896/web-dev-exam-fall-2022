<?php

ini_set('display_errors',1);
// Always start with a try catch in af PHP function

// Tell the server to try this
try{
    //If the user doesn't put at to city, fallback to '' - nothing, that shows everything
    $to_city = $_GET['to_city_name'] ?? 0;
    // Connection to the database (put in a variable)
    $db = new PDO('sqlite:'.__DIR__.'/momondo.db');
    // Searches for the flight
    $q = $db->prepare('SELECT * FROM flights WHERE to_city_name LIKE :to_city');
    $q->bindValue(':to_city', '%'.$to_city.'%');
    // Run the previous statements
    $q->execute();
    // Extract the data and put it in a variable as an associative array
    //                        (associative array)
    $flights = $q->fetchAll(PDO::FETCH_ASSOC);

    // If to_city_name is empty
    if ( ! isset($_GET['to_city_name']) ){
        http_response_code(400);
        echo json_encode(['Info'=>'Missing to_city_name variable']);
        exit();
    }

    // If to_city_name too short
    if( strlen($to_city) < 1 ){
        http_response_code(400);
        echo json_encode(['Info'=>'City name is too short.']);
        exit();
    }

    // If to_city_name is too long
    if( strlen($to_city) > 20 ){
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
