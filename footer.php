<?php
//define(_PAGE_TPL, str_replace('.php', '.tpl', basename($_SERVER['PHP_SELF'])));
//die($op);
$smarty->assign('op', $op);
$smarty->assign('Title', $page_title);
$smarty->display(_PAGE_TPL);
