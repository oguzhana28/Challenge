<?php
function loginUserDB(){
    $_SESSION['loggedIn'] = 0;
    $db = openDatabaseConnection();

    $Password = $_POST['Password'];
    $Email = $_POST['Email'];

    // Make the password compatible with the one in the database
    $Password = hash('sha256', $Password);

    $sql = "SELECT * FROM users where Email=:Email";
    $stmt = $db->prepare( $sql);
    $stmt->execute(array(':Email' => $Email));
    $user = $stmt->fetch();

    if(!empty($user['Name'])){
        $Id = $user['Id'];

        $Name = $user['Name'];
        $_SESSION['Username'] = $Name;

        $Email = $user['Email'];
        $_SESSION['Email'] = $Email;

        //Set session logged in
        $_SESSION['loggedIn'] = 1;


        if($user['isBarberer'] == 1){
            $_SESSION['isBarberer'] = 1;
        } else {
            $_SESSION['isBarberer'] = 0;
        }
    }

    if($user != null){
        if($Password == $user['Password']){
            $_SESSION['Id'] = $user['Id'];
            header("Location:" . URL . "Barber/index");
        }else{
        echo "This password does not exist. Please try again.";
        }
    }else{
        echo "This email does not exist. Please try again or register.";
    }
}
