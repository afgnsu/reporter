<?php

//106/10/28 教函數
function link_db()
{
    $db = new mysqli('localhost', 'root', '12345', 'reporter');

    if ($db->connect_error) {
        die('無法連上資料庫' . $db->connect_error);
    }

    $db->set_charset('utf8');
    return $db;
}

function insert_article()
{
    global $db; //宣告全域變數

    $title    = $db->real_escape_string($_POST['title']);
    $content  = $db->real_escape_string($_POST['content']);
    $username = $db->real_escape_string($_POST['username']);

    $sql = "INSERT INTO `article` (`title`, `content`,`username`, `create_time`, `update_time`) VALUES ('{$title}', '{$content}', '{$username}', NOW(), NOW())";
    $db->query($sql) or die($db->error);
    $sn = $db->insert_id;

    // if (isset($_FILES)) {
    //     $ext = pathinfo($_FILES['pic']['name'], PATHINFO_EXTENSION);
    //     if (!is_dir('uploads')) {
    //         mkdir ('uploads');
    //     }
    //     move_uploaded_file($_FILES['pic']['tmp_name'], "uploads/$sn.$ext");
    // }

    if (isset($_FILES)) {
        require_once 'class.upload.php';
        $foo = new Upload($_FILES['pic']);
        if ($foo->uploaded) {
            // save uploaded image with a new name
            $foo->file_new_name_body = 'cover_' . $sn;
            $foo->image_resize       = true;
            $foo->image_convert      = png;
            $foo->image_x            = 1200;
            $foo->image_ratio_y      = true;
            $foo->Process('uploads/');
            if ($foo->processed) {
                $foo->file_new_name_body = 'thumb_' . $sn;
                $foo->image_resize       = true;
                $foo->image_convert      = png;
                $foo->image_x            = 400;
                $foo->image_ratio_y      = true;
                $foo->Process('uploads/');
            }
        }
    }

    return $sn;
// } else {
    // echo "orz";
}

function delete_article($sn)
{
    global $db; //宣告全域變數

    $sql = "DELETE FROM `article` WHERE sn='{$sn}' and username='{$_SESSION['username']}'";
    $db->query($sql) or die($db->error);
}

// list_article();
function list_article()
{
    global $db, $smarty;
    $sql    = "SELECT * FROM `article` ORDER BY `update_time` DESC";
    $result = $db->query($sql) or die($db->error);

    // $data   = $result->fetch_assoc();
    // die(var_export($data));

    $all = [];
    $i   = 0;
    while ($data = $result->fetch_assoc()) {
        // var_export($data);
        // $all[] = $data;
        $all[$i]            = $data;
        $all[$i]['summary'] = mb_substr(strip_tags($data['content']), 0, 90);
        $i++;
    }
    // exit;
    //die(var_export($all));
    //var_export($all);
    $smarty->assign('all', $all);
}

// list_article();
function show_article($sn)
{
    global $db, $smarty;

    $sql    = "SELECT * FROM `article` WHERE `sn`='$sn'";
    $result = $db->query($sql) or die($db->error);
    $data   = $result->fetch_assoc();
    $smarty->assign('article', $data);
}
