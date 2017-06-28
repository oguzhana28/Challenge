<?php

function getSchedual($Id){
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM agenda WHERE Id = :Id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':Id' => $Id
	));

	$db = null;

	return $query->fetch();
}

function createAppointment(){

}
