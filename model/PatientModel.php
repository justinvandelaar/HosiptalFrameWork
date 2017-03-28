<?php

function getPatient($id) {
	$db = openDatabaseConnection();
	$sql = 'SELECT * FROM patient WHERE id=:id';
	$patient = $db->prepare($sql);
	$patient->execute(array(
		':id' => $id
		));

	$db = null;

	return $patient->fetchAll();
}

function getAllPatients() {
	$db = openDatabaseConnection();
	$sql = 'SELECT * FROM patient';
	$patient = $db->prepare($sql);
	$patient->execute();

	$db = null;

	return $patient->fetchAll();
}

function createPatient($name, $species, $status, $gender) 
{
	$db = openDatabaseConnection();

	$sql = "INSERT INTO patient(name, species, status, gender) VALUES (:name, :species, :status, :gender)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $name,
		':species' => $species,
		':status' => $status,
		':gender' => $gender
		));

	$db = null;
	header("Location:" . URL . "patient/index");
}

function editPatient($name, $species, $status, $gender, $id) {
	$db = openDatabaseConnection();

	$sql = "UPDATE patient SET name=':name', species=':species', status=':status', gender=':gender' WHERE id=:id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $name,
		':species' => $species,
		':status' => $status,
		':gender' => $gender,
		':id' => $id
		));

	$db = null;
	header("Location:" . URL . "patient/index");
}

function deletePatient($id) 
{
	$db = openDatabaseConnection();

	$sql = "DELETE FROM patient WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id
		));

	$db = null;
	echo "Deleted succesful";
	header("Location:" . URL . "patient/index");
}