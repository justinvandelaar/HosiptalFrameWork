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

// Edit sql for the client 
function editClient($name, $adress, $age, $email, $pet_name, $id) {
	$db = openDatabaseConnection();

	$sql = "UPDATE client SET name='%s', adress='%s', age='%s', email='%s', pet_name='%s' WHERE id=%d";
	$sql = sprintf($sql, $name, $adress, $age, $email, $pet_name, $id);
	$query = $db->prepare($sql);
	$query->execute();

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