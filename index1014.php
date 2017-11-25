<?php
require_once 'smarty/libs/Smarty.class.php';
$smarty = new Smarty;
//標題
// $title  = '標題';
@$smarty->assign('title', $_POST['title']);
//顏色
@$smarty->assign('color', $_POST['color']);
$smarty->assign('now', date("Y年m月d日 H:i:s"));
$smarty->display('index.tpl');
