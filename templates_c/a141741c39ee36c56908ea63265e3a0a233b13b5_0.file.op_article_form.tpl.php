<?php
/* Smarty version 3.1.30, created on 2017-11-18 14:52:23
  from "C:\UniServerZ\www\reporter\templates\op_article_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0fd8a745f6b1_59112689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a141741c39ee36c56908ea63265e3a0a233b13b5' => 
    array (
      0 => 'C:\\UniServerZ\\www\\reporter\\templates\\op_article_form.tpl',
      1 => 1510987940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0fd8a745f6b1_59112689 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<br>
<form action="admin.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title" class="col-form-label sr-only">文章標題</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="請輸入文章標題">
    </div>
    <div class="form-group">
        <label for="content" class="col-form-label sr-only">文章內容</label>
        <textarea name="content" id="content" rows="20" class="form-control" placeholder="請輸入文章內容"></textarea>
    </div>
    <div class="form-group">
        <label for="pic" class="col-form-label sr-only">上傳圖片</label>
        <input type="file" class="form-control" name="pic" id="pic" placeholder="請上傳一張封面圖">
    </div>
    <div class="text-center">
        <input type="hidden" name="op" value="insert">
        <input type="hidden" name="username" value="<?php echo $_SESSION['username'];?>
">
        <button type="submit" class="btn btn-primary">儲存</button>
    </div>
</form>

<?php echo '<script'; ?>
>
    CKEDITOR.replace('content');
<?php echo '</script'; ?>
><?php }
}
