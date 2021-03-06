<?php
require (ROOT . 'model/PatientModel.php');
require (ROOT . 'model/SpecieModel.php');

function index()
{
	require (ROOT . 'inc/loadsmarty.php');
	$pagetitle = 'Hosiptal';
	$patients = array('treaded' => getAllPatients());
	render($smarty->assign('patients', $patients),
		$smarty->assign('pagetitle', $pagetitle),
		$smarty->display('patient/index.php'));
}

function create() {
	require (ROOT . 'inc/loadsmarty.php');

	$pagetitle = 'Hosiptal';
	$specie = array('specie' => getAllSpecies());

	if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$species = $_POST['species'];
	$status = $_POST['status'];
	$gender = $_POST['gender'];
	createPatient($name, $species, $status, $gender);
		echo "Succesfull added";
	}

	render($smarty->assign('pagetitle', $pagetitle),
		$smarty->assign('specie', $specie),
		$smarty->display('patient/create.php'));
}

function edit() {	
	require (ROOT . 'inc/loadsmarty.php');
	$pagetitle = 'Hosiptal';
	$id = $_GET['id'];
	$specie = array('specie' => getAllSpecies());
	$patient = getPatient($id);

	if (isset($_POST['submit'])) {
	echo " Patient has been updated";
	$name = $_POST['name'];
	$species = $_POST['species'];
	$status = $_POST['status'];
	if (isset($_POST['male'])) {
		$gender = $_POST['male'];
	} elseif (isset($_POST['female'])) {
		$gender = $_POST['female'];
	} else {
		$gender = $_POST['unkown'];
	}
	editPatient($name, $species, $status, $gender, $id);
}
	render($smarty->assign('files', $patient),
		$smarty->assign('pagetitle', $pagetitle),
		$smarty->assign('specie', $specie),
		$smarty->display('patient/edit.php'));
}

function delete() {
	require (ROOT . 'inc/loadsmarty.php');
	$id = $_GET['id'];
	$patient = getPatient($id);

		if(isset($_POST['yes'])) {
			deletePatient($id);
		} elseif (isset($_POST['no'])) {
			echo "Okay press go back";
		}

		$pagetitle = 'Hosiptal';

		render($smarty->assign('id', $id),
		$smarty->assign('patient', $patient),
		$smarty->assign('pagetitle', $pagetitle),
		$smarty->display('patient/delete.php'));
}