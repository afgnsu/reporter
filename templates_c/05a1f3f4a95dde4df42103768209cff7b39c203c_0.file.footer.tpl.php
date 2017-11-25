<?php
/* Smarty version 3.1.30, created on 2017-11-18 15:18:04
  from "C:\UniServerZ\www\reporter\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0fdeac9bad98_74352864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05a1f3f4a95dde4df42103768209cff7b39c203c' => 
    array (
      0 => 'C:\\UniServerZ\\www\\reporter\\templates\\footer.tpl',
      1 => 1510989481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0fdeac9bad98_74352864 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="footer"></div>
<footer class='bg-dark text-white py-3 fixed-bottom'>
    <div class="container">
        以台南社大師生為主體寫作者的《巷集談-街道新聞》，秉持公民素人發聲 、開放以及非營利的宗旨，除希望培力更多公民記者、自由寫手之外，更希望以關注台南市未來城鄉永續發展過程中，保障公民參與審議的權利為精神，成為台南市公民傳播媒體的草根平台。
    </div>
</footer>

<?php echo '<script'; ?>
 src="js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        var images = ['pic1.jpg', 'pic5.jpg', 'pic6.jpg'];
        $('.img-container').css({ 'background-image': 'url(images/' + images[Math.floor(Math.random() * images.length)] + ')' });

        $('.img-container').css('width', $(window).width());
        $('.img-container').css('height', $(window).height());
    });
    $(window).resize(function () {
        $('.img-container').css('width', $(window).width());
        $('.img-container').css('height', $(window).height());
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://more.handlino.com/javascripts/moretext-1.2.js" type="text/javascript"><?php echo '</script'; ?>
><?php }
}
