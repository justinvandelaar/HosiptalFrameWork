<?php
/* Smarty version 3.1.29, created on 2017-03-28 15:44:56
  from "C:\wamp64\www\HosiptalFramework\view\client\create.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58da68d8d87729_42508197',
  'file_dependency' => 
  array (
    'c987b302fac6b9a016d286a14fbe142aec0febb2' => 
    array (
      0 => 'C:\\wamp64\\www\\HosiptalFramework\\view\\client\\create.php',
      1 => 1490708694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58da68d8d87729_42508197 ($_smarty_tpl) {
?>
<h1> Make a client </h1>
<div id="createForm">
<a href="index"> Go back </a>
<form method="post">
	Name: <br>
	<input type="text" name="name"> <br>
    Adress: <br>
	<input type="text" name="adress"> <br>
	Age: <br>
	<input type="number" name="age"><br>
	Email: <br>
	<input type="text" name="email"><br>
	Pet-name: <br>
	<input type="text" name="pet_name"><br>
	<input type="submit" name="submit" value="Create client">
</form><?php }
}
