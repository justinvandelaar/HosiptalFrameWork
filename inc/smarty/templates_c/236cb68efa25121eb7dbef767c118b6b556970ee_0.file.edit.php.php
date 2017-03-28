<?php
/* Smarty version 3.1.29, created on 2017-03-28 14:06:05
  from "C:\wamp64\www\HosiptalFramework\view\patient\edit.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58da51ad77a9d0_82436740',
  'file_dependency' => 
  array (
    '236cb68efa25121eb7dbef767c118b6b556970ee' => 
    array (
      0 => 'C:\\wamp64\\www\\HosiptalFramework\\view\\patient\\edit.php',
      1 => 1490702762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58da51ad77a9d0_82436740 ($_smarty_tpl) {
?>
<ul>
	<li><a href="../index"> Go back </a></li>
</ul>
<form action="../index" method="post">
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
    <input type="text" name="species" value="<?php echo $_smarty_tpl->tpl_vars['patient']->value['species'];?>
"> <br>
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
