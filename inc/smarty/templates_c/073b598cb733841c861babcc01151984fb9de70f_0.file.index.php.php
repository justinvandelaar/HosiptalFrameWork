<?php
/* Smarty version 3.1.29, created on 2017-03-28 15:33:50
  from "C:\wamp64\www\HosiptalFramework\view\client\index.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58da663ea1c1e3_74682295',
  'file_dependency' => 
  array (
    '073b598cb733841c861babcc01151984fb9de70f' => 
    array (
      0 => 'C:\\wamp64\\www\\HosiptalFramework\\view\\client\\index.php',
      1 => 1490708028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58da663ea1c1e3_74682295 ($_smarty_tpl) {
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
      <th>Adress &nbsp;</th>
      <th>Age &nbsp;</th>
      <th>Email &nbsp;</th>
      <th>Pet Name &nbsp;</th>
      <th>Checked in &nbsp;</th>
      <th>Checked out &nbsp;</th>
      <th></th>
      <th></th>
    </tr>
</thead>

<tbody>
<!-- loop twice because we get a multi array back -->
  <?php
$_from = $_smarty_tpl->tpl_vars['clients']->value;
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
$__foreach_client_1_saved_item = isset($_smarty_tpl->tpl_vars['client']) ? $_smarty_tpl->tpl_vars['client'] : false;
$_smarty_tpl->tpl_vars['client'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['client']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
$__foreach_client_1_saved_local_item = $_smarty_tpl->tpl_vars['client'];
?> 
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['client']->value['name'];?>
&nbsp; </td>
    <td><?php echo $_smarty_tpl->tpl_vars['client']->value['adress'];?>
 &nbsp; </td>
    <td><?php echo $_smarty_tpl->tpl_vars['client']->value['age'];?>
 &nbsp; </td>
    <td><?php echo $_smarty_tpl->tpl_vars['client']->value['email'];?>
 &nbsp; </td>
    <td><?php echo $_smarty_tpl->tpl_vars['client']->value['pet_name'];?>
 &nbsp; </td>
    <td><?php echo $_smarty_tpl->tpl_vars['client']->value['cheked_in'];?>
 &nbsp; </td>
    <td><?php echo $_smarty_tpl->tpl_vars['client']->value['cheked_out'];?>
 &nbsp; </td>
    <td><a href="edit/?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
"> Edit </a></td>
    <td><a href="delete/?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
"> Delete</a></td>   
  </tr>
      <?php
$_smarty_tpl->tpl_vars['client'] = $__foreach_client_1_saved_local_item;
}
if ($__foreach_client_1_saved_item) {
$_smarty_tpl->tpl_vars['client'] = $__foreach_client_1_saved_item;
}
?>
  <?php
$_smarty_tpl->tpl_vars['info'] = $__foreach_info_0_saved_local_item;
}
if ($__foreach_info_0_saved_item) {
$_smarty_tpl->tpl_vars['info'] = $__foreach_info_0_saved_item;
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
