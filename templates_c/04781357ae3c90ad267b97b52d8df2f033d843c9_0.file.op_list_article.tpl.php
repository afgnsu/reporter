<?php
/* Smarty version 3.1.30, created on 2017-11-18 15:57:00
  from "C:\UniServerZ\www\reporter\templates\op_list_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0fe7cc4ed319_27410112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04781357ae3c90ad267b97b52d8df2f033d843c9' => 
    array (
      0 => 'C:\\UniServerZ\\www\\reporter\\templates\\op_list_article.tpl',
      1 => 1510991800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0fe7cc4ed319_27410112 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="img-container">
    <div class="container">
        <!-- <h1 class="pt-5">巷集談-街道新聞</h1> -->
        <!-- <div class="row">
                    <div class="col-sm-6">
                        <p class="mt-3">以台南社大師生為主體寫作者的《巷集談-街道新聞》，秉持公民素人發聲 、開放以及非營利的宗旨，除希望培力更多公民記者、自由寫手之外，更希望以關注台南市未來城鄉永續發展過程中，保障公民參與審議的權利為精神，成為台南市公民傳播媒體的草根平台。</p>
                    </div>
                </div> -->
    </div>
</div>


<div class="container">
    <h1 class='my-3 text-center'>最新文章</h1>
    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all']->value, 'article');
$_smarty_tpl->tpl_vars['article']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->index++;
$__foreach_article_0_saved = $_smarty_tpl->tpl_vars['article'];
?>
        <div class="col-sm-4">
            <!-- <?php $_smarty_tpl->_assignInScope('cover', "uploads/".((string)$_smarty_tpl->tpl_vars['article']->value['sn']).".jpg");
?> -->
            <?php $_smarty_tpl->_assignInScope('cover', "uploads/thumb_".((string)$_smarty_tpl->tpl_vars['article']->value['sn']).".png");
?> <?php if (file_exists($_smarty_tpl->tpl_vars['cover']->value)) {?>
            <!-- <img src="uploads/<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" class="rounded cover"> -->
            <img src="<?php echo $_smarty_tpl->tpl_vars['cover']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" class="rounded cover"> <?php } else { ?>
            <img src="https://picsum.photos/400/300?image=<?php echo $_smarty_tpl->tpl_vars['article']->index;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" class="rounded cover"> <?php }?>
            <h3>
                <a href="index.php?sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a>
            </h3>
            <?php echo $_smarty_tpl->tpl_vars['article']->value['summary'];?>

        </div>
        <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_0_saved;
}
} else {
?>

        <h1>尚無內容</h1>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
</div><?php }
}
