<?php
/* Smarty version 3.1.29, created on 2017-03-24 09:00:41
  from "C:\wamp64\www\HosiptalFramework\view\home\create.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58d4d22988dcc4_78329087',
  'file_dependency' => 
  array (
    '5fed542d6c4e6de172845b87928b804a7dac63a7' => 
    array (
      0 => 'C:\\wamp64\\www\\HosiptalFramework\\view\\home\\create.php',
      1 => 1490342431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d4d22988dcc4_78329087 ($_smarty_tpl) {
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
