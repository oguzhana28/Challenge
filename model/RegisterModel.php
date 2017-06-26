<?php

function register(){
    $db = openDatabaseConnection();
    
    $Naam = isset($_POST['Naam']) ? $_POST['Naam'] : '';
	$Adres = isset($_POST['Adres']) ? $_POST['Adres'] : '';
	$Postcode = isset($_POST['Postcode']) ? $_POST['Postcode'] : '';
    $Plaats = isset($_POST['Plaats']) ? $_POST['Plaats'] : '';
	$Telefoon = isset($_POST['Telefoon']) ? $_POST['Telefoon'] : '';
	$Mobiel = isset($_POST['Mobiel']) ? $_POST['Mobiel'] : '';
    $Email = isset($_POST['Email']) ? $_POST['Email'] : '';
	$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
	
    if (strlen($Naam) == 0 || strlen($Adres) == 0 || strlen($Postcode) == 0 || strlen($Plaats) == 0 || strlen($Telefoon) == 0 || strlen($Mobiel) == 0 || strlen($Email) == 0 || strlen($Password) == 0) {
		return "niet alle velden zijn correct ingevuld";
	}
	
	$sql = "INSERT INTO Register(Naam, Adres, Postcode, Plaats, Telefoon, Mobiel, Email,Password) VALUES (:Naam, :Adres, :Postcode, :Plaats, :Telefoon,:Mobiel,:Email, :Password)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':Naam' => $Naam,
		':Adres' => $Adres,
        ':Postcode' => $Postcode,
        ':Plaats' => $Plaats,
        ':Telefoon' => $Telefoon,
        ':Mobiel' => $Mobiel,
        ':Email' => $Email,
        ':Password' => $Password));
}