<?php

function loginUser(){
    $_SESSION['loggedIn'] = 0;
    $db = openDatabaseConnection();
    
    $Password = $_POST['Password'];
    $Email = $_POST['Email'];
    
    $sql = "SELECT * FROM Register where Email=:email";
    $stmt = $db->prepare( $sql); 
    $stmt->execute(array(':email' => $Email)); 
    $user = $stmt->fetch();
    var_dump($user);
        
    if(!empty($user['Naam'])){
        
        $Naam = $user['Naam'];
        $_SESSION['Naam'] = $Naam;
        
        $email = $user['email'];
        $_SESSION['email'] = $email;
        
        //Set session logged in
        $_SESSION['loggedIn'] = 1;
    }
    if($user != null){    
        if($Password == $user['Password']){
            header("Location:" . URL . "Home/index");
        }else{
        echo "This password does not exist. Please try again.";
        }
    }else{
        echo "This email does not exist. Please try again or register.";
    }
}