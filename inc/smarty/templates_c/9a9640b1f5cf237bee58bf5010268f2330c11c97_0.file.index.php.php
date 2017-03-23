<?php
/* Smarty version 3.1.29, created on 2017-03-23 09:08:23
  from "C:\wamp64\www\HosiptalFramework\view\home\index.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58d38277109c17_35291557',
  'file_dependency' => 
  array (
    '9a9640b1f5cf237bee58bf5010268f2330c11c97' => 
    array (
      0 => 'C:\\wamp64\\www\\HosiptalFramework\\view\\home\\index.php',
      1 => 1490256501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d38277109c17_35291557 ($_smarty_tpl) {
echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../Js/jquery-latest.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../Js/jquery.tablesorter.js"><?php echo '</script'; ?>
>

  <h1> Welcome to the patient section </h1>
<ul>
    <li><a href="create"> Create patient </a></li>
</ul>

<table id="myTable">
  <thead>
    <tr class="head">
      <th>Name &nbsp;</th>
      <th>Species &nbsp;</th>
      <th>Stataus &nbsp;</th>
      <th>Gender &nbsp;</th>
      <th></th>
      <th></th>
    </tr>
</thead>

<tbody>
  <?php
$_from = $_smarty_tpl->tpl_vars['patients']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_treaded_0_saved_item = isset($_smarty_tpl->tpl_vars['treaded']) ? $_smarty_tpl->tpl_vars['treaded'] : false;
$_smarty_tpl->tpl_vars['treaded'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['treaded']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['treaded']->value) {
$_smarty_tpl->tpl_vars['treaded']->_loop = true;
$__foreach_treaded_0_saved_local_item = $_smarty_tpl->tpl_vars['treaded'];
?>
  <?php
$_from = $_smarty_tpl->tpl_vars['treaded']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_patient_1_saved_item = isset($_smarty_tpl->tpl_vars['patient']) ? $_smarty_tpl->tpl_vars['patient'] : false;
$_smarty_tpl->tpl_vars['patient'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['patient']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['patient']->value) {
$_smarty_tpl->tpl_vars['patient']->_loop = true;
$__foreach_patient_1_saved_local_item = $_smarty_tpl->tpl_vars['patient'];
?> 
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['patient']->value['name'];?>
&nbsp; </td>
    <td><?php echo $_smarty_tpl->tpl_vars['patient']->value['species'];?>
 &nbsp; </td>
    <td><?php echo $_smarty_tpl->tpl_vars['patient']->value['status'];?>
 &nbsp; </td>
    <td><?php echo $_smarty_tpl->tpl_vars['patient']->value['gender'];?>
 &nbsp; </td>
    <td><a href="edit/?id=<?php echo $_smarty_tpl->tpl_vars['patient']->value['id'];?>
"> Edit </a></td>
    <td><a href="delete/?id=<?php echo $_smarty_tpl->tpl_vars['patient']->value['id'];?>
"> Delete</a></td>   
  </tr>
      <?php
$_smarty_tpl->tpl_vars['patient'] = $__foreach_patient_1_saved_local_item;
}
if ($__foreach_patient_1_saved_item) {
$_smarty_tpl->tpl_vars['patient'] = $__foreach_patient_1_saved_item;
}
?>
  <?php
$_smarty_tpl->tpl_vars['treaded'] = $__foreach_treaded_0_saved_local_item;
}
if ($__foreach_treaded_0_saved_item) {
$_smarty_tpl->tpl_vars['treaded'] = $__foreach_treaded_0_saved_item;
}
?>
  </tbody>
</table>

<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function() 
    { 
        $("#myTable").tablesorter(); 
    } 
); 
<?php echo '</script'; ?>
><?php }
}
