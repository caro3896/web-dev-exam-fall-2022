<?php

$lang_allowed = ['en','da'];
$lang = $_GET['lang'] ?? 'en';

if ( ! in_array($lang, $lang_allowed) ){
    $lang = 'en';
}

$dictionary = [
    'en_signin' => 'Sign in',
    'da_signin' => 'Log in',
    'en_logout' => 'Log out',
    'da_logout' => 'Log ud',
    'en_flights' => 'Flights',
    'da_flights' => 'Fly',
    'en_stays' => 'Stays',
    'da_stays' => 'Overnatning',
    'en_cars' => 'Car rental',
    'da_cars' => 'Biler',
    'en_things_to_do' => 'Things to do',
    'da_things_to_do' => 'Oplevelser',
    'en_holidays' => 'Holidays',
    'da_holidays' => 'Ferier',
    'en_explore' => 'Explore',
    'da_explore' => 'Explore',
    'en_trips' => 'Trips',
    'da_trips' => 'Trips',
    'en_welcome' => 'Welcome! Find a flexible flight for your next trip.',
    'da_welcome' => 'Velkommen! Find en fleksibel flybillet til din næste rejse.',
    'en_from' => 'From?',
    'da_from' => 'Fra?',
    'en_to' => 'To?',
    'da_to' => 'Til?',
    'en_search' => 'Search',
    'da_search' => 'Søg',
];