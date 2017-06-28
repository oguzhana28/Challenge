<?php
include_once('../model/RegisterModel.php');
include_once('../model/LoginModel.php');

function index(){
	render("login/index");
}

function register(){
    render("login/register");
}

function login(){
	loginUserDB();
}

function registerSave(){
     if ($_SERVER["REQUEST_METHOD"] == "POST"){
         registerDB();
    }
 header("Location:" . URL . "login/index");
}

function logout(){
    session_destroy();
    $_SESSION['loggedIn'] = 0;
    header("Location:" . URL . "Barber/index");
}
