<?php
function registerDB(){
    $db = openDatabaseConnection();

    $Name = isset($_POST['Name']) ? $_POST['Name'] : '';
	$Adress = isset($_POST['Adress']) ? $_POST['Adress'] : '';
	$PostalCode = isset($_POST['PostalCode']) ? $_POST['PostalCode'] : '';
    $City = isset($_POST['City']) ? $_POST['City'] : '';
	$Phone = isset($_POST['Phone']) ? $_POST['Phone'] : '';
	$Cell = isset($_POST['Cell']) ? $_POST['Cell'] : '';
    $Email = isset($_POST['Email']) ? $_POST['Email'] : '';
	$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
	$isBarberer = isset($_POST['isBarberer']) ? $_POST['isBarberer'] : '0';

    // Hash the password
    $Password = hash('sha256', $Password);
    if (!isset($Name) && !isset($Adress) && !isset($PostalCode) && !isset($City) && !isset($Phone) && !isset($Cell) && !isset($Email) && !isset($Password) && !isset($isBarberer)) {
		return "Not all fields have been filled in properly";
	}
	$sql = "INSERT INTO users (Name, Adress, PostalCode, City, Phone, Cell, Email, Password, isBarberer) VALUES (:Name, :Adress, :PostalCode, :City, :Phone, :Cell, :Email, :Password, :isBarberer)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':Name' => $Name,
		':Adress' => $Adress,
        ':PostalCode' => $PostalCode,
        ':City' => $City,
        ':Phone' => $Phone,
        ':Cell' => $Cell,
        ':Email' => $Email,
        ':Password' => $Password,
        'isBarberer' => $isBarberer
    ));
}
