<?php
include_once('../model/RegisterModel.php');
include_once('../model/LoginModel.php');

function loginIndex()
{
	render("login/indexlogin");	
}
function login()
{
	loginUser();
}

function registerSave()
{              
     if ($_SERVER["REQUEST_METHOD"] == "POST"){
         register();
    }
 header("Location:" . URL . "login/loginIndex");
     var_dump($_POST);
}

function logout(){
    session_destroy();
    header("Location:" . URL . "home/index");
}