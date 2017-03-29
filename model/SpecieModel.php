<?php

function getSpecie($id) {
	$db = openDatabaseConnection();
	$sql = 'SELECT * FROM species WHERE id=:id';
	$specie = $db->prepare($sql);
	$specie->execute(array(
		':id' => $id
		));

	$db = null;

	return $specie->fetchAll();
}

function getAllSpecies() {
	$db = openDatabaseConnection();
	$sql = 'SELECT * FROM species';
	$species = $db->prepare($sql);
	$species->execute();

	$db = null;

	return $species->fetchAll();
}

function createSpecie($sort) 
{
	$db = openDatabaseConnection();

	$sql = "INSERT INTO species(sort) VALUES (:sort)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':sort' => $sort
		));

	$db = null;
	header("Location:" . URL . "specie/index");
}

function editSpecie($sort, $id) {
	$db = openDatabaseConnection();

	$sql = "UPDATE species SET sort='%s' WHERE id=%d";
	$sql = sprintf($sql, $sort, $id);
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;
	header("Location:" . URL . "specie/index");
}

function deleteSpecie($id) 
{
	$db = openDatabaseConnection();

	$sql = "DELETE FROM species WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id
		));

	$db = null;
	echo "Deleted succesful";
	header("Location:" . URL . "specie/index");
}