<?php
require "loginheader.php";
require_once 'header.php';
// define('_PAGE_TPL', 'admin.tpl');
$page_title = '管理頁面';
/*
require_once 'function.php';
require_once 'smarty/libs/Smarty.class.php';
$smarty = new Smarty;
//@$smarty->assign('title', $_POST['title']);
$db = link_db();
 */

// $op = isset($_POST['op']) ? htmlspecialchars($_POST['op']) : '';
$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op']) : '';
$sn = isset($_REQUEST['sn']) ? (int) $_REQUEST['sn'] : 0;
//if (isset($_POST['op']) && $_POST['op'] == 'insert') {
//    echo "insert";

switch ($op) {
    case 'insert':
        $sn = insert_article();
        header("location: index.php?sn={$sn}");
        exit;
        // break;
    case 'delete_article':
        delete_article($sn);
        header("location: index.php");
        exit;

    case 'edit':
        edit_article();
        break;

    case 'update':
        update_article();
        break;
    case 'op_article_form':
        break;
}

// if ($op == 'insert') {

// echo '1234';

if (isset($_POST['sn'])) {
    echo "<h1>\$sn={$_POST['sn']}</h1>";
}

//echo "<h1>END</h1>";

// $db = new mysqli('localhost', 'root', '12345', 'reporter');
// if ($db->connect_error) {
//     die('無法連上資料庫' . $db->connect_error);
// }
// $db->set_charset('utf8');

// $smarty->display('admin.tpl');

require_once 'footer.php';
