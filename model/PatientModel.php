<?php

function getAllPatients() {
	$db = openDatabaseConnection();
	$sql = 'SELECT * FROM patient';
	$patient = $db->prepare($sql);
	$patient->execute();

	$db = null;

	return $patient->fetchAll();
}