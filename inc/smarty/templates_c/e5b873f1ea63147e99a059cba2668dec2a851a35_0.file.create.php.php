<?php
/* Smarty version 3.1.29, created on 2017-03-28 14:06:53
  from "C:\wamp64\www\HosiptalFramework\view\patient\create.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58da51dd800325_60569757',
  'file_dependency' => 
  array (
    'e5b873f1ea63147e99a059cba2668dec2a851a35' => 
    array (
      0 => 'C:\\wamp64\\www\\HosiptalFramework\\view\\patient\\create.php',
      1 => 1490702811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58da51dd800325_60569757 ($_smarty_tpl) {
?>
<h1> Welcome to the patient section </h1>
<ul>
	<li><a href="index"> go back </a></li>
</ul>

<div id="createForm">
<form  method="post">
	Name: <br>
	<input type="text" name="name"> <br>
	Species: <br>
	<input type="text" name="species"><br>
	Status: <br>
	<input type="text" name="status"><br>	
	Gender:<br>
    <input type="radio" name="gender" value="male"> Male<br>
    <input type="radio" name="gender" value="female"> Female<br>
    <input type="radio" name="gender" value="unkown"> Unkown<br>
	<input type="submit" name="submit" value="Create patient">
</form>
</div><?php }
}
