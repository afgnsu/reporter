<?php
// $title = 'INDEX';

require_once 'header.php';
//define('_PAGE_TPL', 'index.tpl');
$page_title = '首頁';

$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op']) : '';
$sn = isset($_REQUEST['sn']) ? (int)$_REQUEST['sn']: 0;

switch ($op) {
    // case 'show_article':
    //     show_article($sn);
    //     $op = 'show_article';
    //     break;
       
    // default:
    //     list_article();
    //     $op = 'list_article';
    //     break;

        
    default:
        if ($sn) {
            show_article($sn);
            $op = 'show_article';
        } else {
            list_article();
            $op = 'list_article';
        }
        break;
}

//@$smarty->assign('title', $_POST['title']);
// $smarty->display('index.tpl');
require_once 'footer.php';
// $smarty->assign('Title', 'INDEX');
