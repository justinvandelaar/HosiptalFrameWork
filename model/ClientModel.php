<?php

function getClient($id) {
	$db = openDatabaseConnection();
	$sql = 'SELECT * FROM client WHERE id=:id';
	$client = $db->prepare($sql);
	$client->execute(array(
		':id' => $id
		));

	$db = null;

	return $client->fetchAll();
}

function getAllClients() {
	$db = openDatabaseConnection();
	$sql = 'SELECT * FROM client';
	$client = $db->prepare($sql);
	$client->execute();

	$db = null;

	return $client->fetchAll();
}

function createClient($name, $adress, $age, $email, $pet_name) 
{
	$db = openDatabaseConnection();

	$sql = "INSERT INTO client(name, adress, age, email, pet_name) VALUES (:name, :adress, :age, :email, :pet_name)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $name,
		':adress' => $adress,
		':age' => $age,
		':email' => $email,
		':pet_name' => $pet_name
		));

	$db = null;
	header("Location:" . URL . "client/index");
}

function editClient($name, $species, $status, $gender, $id) {
	$db = openDatabaseConnection();

	$sql = "UPDATE client SET name=':name', species=':species', status=':status', gender=':gender' WHERE id=:id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $name,
		':species' => $species,
		':status' => $status,
		':gender' => $gender,
		':id' => $id
		));

	$db = null;
	header("Location:" . URL . "client/index");
}

function deleteClient($id) 
{
	$db = openDatabaseConnection();

	$sql = "DELETE FROM client WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id
		));

	$db = null;
	echo "Deleted succesful";
	header("Location:" . URL . "client/index");
}