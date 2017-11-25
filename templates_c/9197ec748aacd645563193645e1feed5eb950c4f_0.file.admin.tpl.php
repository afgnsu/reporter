<?php
/* Smarty version 3.1.30, created on 2017-11-18 14:51:57
  from "C:\UniServerZ\www\reporter\templates\admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0fd88db62407_78900620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9197ec748aacd645563193645e1feed5eb950c4f' => 
    array (
      0 => 'C:\\UniServerZ\\www\\reporter\\templates\\admin.tpl',
      1 => 1510987895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:op_article_form.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a0fd88db62407_78900620 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh-Hant-TW">

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="img-container">
        <div class="container">

            <!-- <form action="admin.php" method="post">
                <div class="form-group">
                    <label for="title" class="col-form-label sr-only">文章標題</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="請輸入文章標題">
                </div>
                <div class="form-group">
                    <label for="content" class="col-form-label sr-only">文章內容</label>
                    <textarea name="content" id="content" rows="10" class="form-control" placeholder="請輸入文章內容"></textarea>
                </div>
                <input type="hidden" name="op" value="insert">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">儲存</button>
                </div>
            </form> -->

            <?php $_smarty_tpl->_subTemplateRender("file:op_article_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>

</html><?php }
}
