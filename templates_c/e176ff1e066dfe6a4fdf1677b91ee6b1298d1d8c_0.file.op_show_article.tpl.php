<?php
/* Smarty version 3.1.30, created on 2017-11-18 16:18:44
  from "C:\UniServerZ\www\reporter\templates\op_show_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0fece444c921_88888909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e176ff1e066dfe6a4fdf1677b91ee6b1298d1d8c' => 
    array (
      0 => 'C:\\UniServerZ\\www\\reporter\\templates\\op_show_article.tpl',
      1 => 1510993120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0fece444c921_88888909 (Smarty_Internal_Template $_smarty_tpl) {
?>
<br>
<div class="container">
    <h1><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</p>
    <div class='alert alert-info text-center'>
        <a href='admin.php?op=modify_article&sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
' class='btn btn-warning'>編輯</a>
        <a href='admin.php?op=delete_article&sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
' class='btn btn-danger'>刪除</a>
    </div>

</div><?php }
}
