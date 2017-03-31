<?php
/* Smarty version 3.1.29, created on 2017-03-31 09:39:02
  from "C:\wamp64\www\HosiptalFramework\view\patient\create.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58de0796469f93_47010462',
  'file_dependency' => 
  array (
    'e5b873f1ea63147e99a059cba2668dec2a851a35' => 
    array (
      0 => 'C:\\wamp64\\www\\HosiptalFramework\\view\\patient\\create.php',
      1 => 1490943938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58de0796469f93_47010462 ($_smarty_tpl) {
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
	<select name="species">
		<?php
$_from = $_smarty_tpl->tpl_vars['specie']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_info_0_saved_item = isset($_smarty_tpl->tpl_vars['info']) ? $_smarty_tpl->tpl_vars['info'] : false;
$_smarty_tpl->tpl_vars['info'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['info']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
$__foreach_info_0_saved_local_item = $_smarty_tpl->tpl_vars['info'];
?>
		<?php
$_from = $_smarty_tpl->tpl_vars['info']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_species_1_saved_item = isset($_smarty_tpl->tpl_vars['species']) ? $_smarty_tpl->tpl_vars['species'] : false;
$_smarty_tpl->tpl_vars['species'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['species']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['species']->value) {
$_smarty_tpl->tpl_vars['species']->_loop = true;
$__foreach_species_1_saved_local_item = $_smarty_tpl->tpl_vars['species'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['species']->value['sort'];?>
"><?php echo $_smarty_tpl->tpl_vars['species']->value['sort'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['species'] = $__foreach_species_1_saved_local_item;
}
if ($__foreach_species_1_saved_item) {
$_smarty_tpl->tpl_vars['species'] = $__foreach_species_1_saved_item;
}
?>
		<?php
$_smarty_tpl->tpl_vars['info'] = $__foreach_info_0_saved_local_item;
}
if ($__foreach_info_0_saved_item) {
$_smarty_tpl->tpl_vars['info'] = $__foreach_info_0_saved_item;
}
?>
	</select> <br>
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
