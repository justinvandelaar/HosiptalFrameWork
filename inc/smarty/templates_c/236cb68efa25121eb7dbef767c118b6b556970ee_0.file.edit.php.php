<?php
/* Smarty version 3.1.29, created on 2017-03-31 09:41:03
  from "C:\wamp64\www\HosiptalFramework\view\patient\edit.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58de080fb17731_82599553',
  'file_dependency' => 
  array (
    '236cb68efa25121eb7dbef767c118b6b556970ee' => 
    array (
      0 => 'C:\\wamp64\\www\\HosiptalFramework\\view\\patient\\edit.php',
      1 => 1490946062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58de080fb17731_82599553 ($_smarty_tpl) {
?>
<h1> Edit the patient </h1>
<ul>
	<li><a href="../index"> Go back </a></li>
</ul>
<form method="post">
<?php
$_from = $_smarty_tpl->tpl_vars['files']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_patient_0_saved_item = isset($_smarty_tpl->tpl_vars['patient']) ? $_smarty_tpl->tpl_vars['patient'] : false;
$_smarty_tpl->tpl_vars['patient'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['patient']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['patient']->value) {
$_smarty_tpl->tpl_vars['patient']->_loop = true;
$__foreach_patient_0_saved_local_item = $_smarty_tpl->tpl_vars['patient'];
?>
	Name: <br>
	<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['patient']->value['name'];?>
"> <br>
    Species: <br>
    <select name="species">
		<?php
$_from = $_smarty_tpl->tpl_vars['specie']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_info_1_saved_item = isset($_smarty_tpl->tpl_vars['info']) ? $_smarty_tpl->tpl_vars['info'] : false;
$_smarty_tpl->tpl_vars['info'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['info']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
$__foreach_info_1_saved_local_item = $_smarty_tpl->tpl_vars['info'];
?>
		<?php
$_from = $_smarty_tpl->tpl_vars['info']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_species_2_saved_item = isset($_smarty_tpl->tpl_vars['species']) ? $_smarty_tpl->tpl_vars['species'] : false;
$_smarty_tpl->tpl_vars['species'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['species']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['species']->value) {
$_smarty_tpl->tpl_vars['species']->_loop = true;
$__foreach_species_2_saved_local_item = $_smarty_tpl->tpl_vars['species'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['species']->value['sort'];?>
"><?php echo $_smarty_tpl->tpl_vars['species']->value['sort'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['species'] = $__foreach_species_2_saved_local_item;
}
if ($__foreach_species_2_saved_item) {
$_smarty_tpl->tpl_vars['species'] = $__foreach_species_2_saved_item;
}
?>
		<?php
$_smarty_tpl->tpl_vars['info'] = $__foreach_info_1_saved_local_item;
}
if ($__foreach_info_1_saved_item) {
$_smarty_tpl->tpl_vars['info'] = $__foreach_info_1_saved_item;
}
?>
	</select> <br>
    <!-- <input type="text" name="species" value="<?php echo $_smarty_tpl->tpl_vars['patient']->value['species'];?>
"> <br> -->
	Status: <br>
	<textarea type="text" name="status" rows="5" cols="30"><?php echo $_smarty_tpl->tpl_vars['patient']->value['status'];?>
</textarea><br>
	Gender:<br>
    <input type="radio" name="male" value="male"> Male<br>
    <input type="radio" name="female" value="female"> Female<br>
    <input type="radio" name="unkown" value="unkown"> Unkown<br>
	<input type="submit" name="submit" value="Save"> <br>
<?php
$_smarty_tpl->tpl_vars['patient'] = $__foreach_patient_0_saved_local_item;
}
if ($__foreach_patient_0_saved_item) {
$_smarty_tpl->tpl_vars['patient'] = $__foreach_patient_0_saved_item;
}
?>
</form><?php }
}
