<?php
require_once __DIR__.'/_x.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mobile">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
    <title> <?=$_title ?? Upps ?></title>
</head>
<body>
    <header>
        <div id="header_left">
            <button onclick="toggleMenu()">☰</button>
            <a href="/"><img src="images/small-logo.png" alt=""></a>
        </div>
        <div id="header_right">
            <a href="trips">Trips</a>
            <a href="#" onclick="toggleSignIn()">Sign in</a>
            <a href="login">Dansk</a>   
        </div>     
    </header>

    <div id="menu" onclick="toggleMenu()">
        <nav class="left_nav">
            <div id="signup">
                <a href="signup">Sign up</a>
                <a href="admin">Admin</a>
            </div>
            <div id="links">
                <a href="flights">Flights</a>
                <a href="stays">Stays</a>
                <a href="cars">Car rental</a>
                <a href="campers">Campers</a>
                <a href="things_to_do">Things to do</a>
                <a href="holidays">Holidays</a>
                <a href="trains_and_buses">Trains and Buses</a>
            </div>
            <div id="explore">
                <a href="explore">Explore</a>
            </div>
            <div id="trips">
                <a href="trips">Trips</a>
            </div>
        </nav>
    </div>

    <div id="sign-in-modal">
        <div class="sign-in-modal-top">
            <img src="images/logo.png" alt="">
            <button onclick="toggleSignIn()">X</button>
        </div>
        <div class="sign-in-modal-bottom sign-in">
            <img src="images/sign-in.png" alt="">
            <h3 class="mt1"><em>Sign in</em> or create an account</h3>
            <form action="bridge-login.php" method="POST" class="mt1">
                <div>
                    <label for="email">Email</label>
                    <input 
                        type="text"
                        name="email"
                        placeholder="Email"
                        data-validate="email">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input 
                        type="password"
                        name="password"
                        placeholder="Password"
                        data-validate="str">
                </div>
                <button class="mt1">Sign in</button>
                <p class="mt1">Don't have an account yet? <a href="#" onclick="toggleSignUp()">Sign up!</a></p>
            </form>
        </div>
        <div class="sign-in-modal-bottom sign-up hide">
            <img src="images/sign-in.png" alt="">
            <h3 class="mt1">Sign in or <em>create an account</em></h3>
            <form id="sign-up-form" class="mt1" onsubmit="validate(signup); return false">
                <div>
                    <label for="user name">User name</label>
                    <span>Min <?= _USER_NAME_MIN_LEN ?> and max <?= _USER_NAME_MAX_LEN ?> characters</span>
                    <input 
                        type="text"
                        name="user_name"
                        placeholder="User name"
                        data-validate="str">
                </div>
                <div>
                    <label for="user email">Email</label>
                    <input 
                        type="text"
                        name="user_email"
                        placeholder="Email"
                        data-validate="email"
                        onblur="validateEmail()">
                    <span class="error">Email is already in use</span>
                </div>
                <div>
                    <label for="user password">Password</label>
                    <span>Minimum <?= _USER_PASSWORD_MIN_LEN ?> characters)</span>   
                    <input 
                        type="password"
                        name="user_password"
                        placeholder="Password"
                        data-validate="str">
                </div>
                <div>
                    <label for="user_password_confirm">Confirm password</label>
                    <input 
                        type="password"
                        name="user_password_confirm"
                        placeholder="Confirm password"
                        data-validate="match"
                        data-match-name="user_password">
                </div>
                <button class="mt1">Sign up</button>
                <p class="mt1">Already have an account? <a href="#" onclick="toggleSignUp()">Sign in!</a></p>
            </form>
        </div>
    </div>
