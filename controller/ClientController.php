<?php
require (ROOT . 'model/ClientModel.php');

// Make the read section for client
function index()
{
	require (ROOT . 'inc/loadsmarty.php');
	$pagetitle = 'Hosiptal';
	$clients = array('clients' => getAllClients());
	render($smarty->assign('pagetitle', $pagetitle),
		$smarty->assign('clients', $clients),
		$smarty->display('client/index.php'));
}

// Make the create section on localhost/HosiptalFramework/client/create
function create() {
	require (ROOT . 'inc/loadsmarty.php');
	$pagetitle = 'Hosiptal';

	if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$adress = $_POST['adress'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$pet_name = $_POST['pet_name'];
	createClient($name, $adress, $age, $email, $pet_name, $id);
	 echo "Created succesful";
	}

	render($smarty->assign('pagetitle', $pagetitle),
		$smarty->display('client/create.php'));
}

function edit() {	
	require (ROOT . 'inc/loadsmarty.php');
	$pagetitle = 'Hosiptal';
	$id = $_GET['id'];
	$client = getClient($id);

	if(isset($_POST['submit'])) {
		$name = $_POST['name'];
		$adress = $_POST['adress'];
		$age = $_POST['age'];
		$email = $_POST['email'];
		$pet_name = $_POST['pet_name'];
		editClient($name, $adress, $age, $email, $pet_name, $id);
	}

	render($smarty->assign('clients', $client),
		$smarty->assign('pagetitle', $pagetitle),
		$smarty->display('client/edit.php'));
}

function delete() {
	require (ROOT . 'inc/loadsmarty.php');
	$id = $_GET['id'];
	$pagetitle = 'Hosiptal';
	$client = getClient($id);

		if(isset($_POST['yes'])) {
			deleteClient($id);
		} elseif (isset($_POST['no'])) {
			echo "Okay press go back";
		}

	render($smarty->assign('id', $id),
		$smarty->assign('client', $client),
		$smarty->assign('pagetitle', $pagetitle),
		$smarty->display('client/delete.php'));
}