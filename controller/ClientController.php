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
	createClient($name, $adress, $age, $email, $pet_name);
	 echo "Created succesful";
	}

	render($smarty->assign('pagetitle', $pagetitle),
		$smarty->display('client/create.php'));
}

function edit() {	
	require (ROOT . 'inc/loadsmarty.php');
	$pagetitle = 'Hosiptal';
	$id = $_GET['id'];

	render($smarty->assign('pagetitle', $pagetitle)
		);
}

function delete() {
	require (ROOT . 'inc/loadsmarty.php');
	$id = $_GET['id'];
	$pagetitle = 'Hosiptal';

	render($smarty->assign('pagetitle', $pagetitle)
		);
}