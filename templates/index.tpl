<!doctype html>
<html lang="zh-Hant-TW">

<head>
    {include file='header.tpl'}
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/my.css"> -->
</head>

<body>
    {include file='nav.tpl'}



    <!-- <div class="container"></div> -->

    <!-- 自動載入 $op 對應的樣板檔 -->
    {include file="op_`$op`.tpl"}
    <!-- {foreach $all as $article}
        <h3>
            <a href="index.php?op=show&sn={$article.sn}">{$article.title}</a>
        </h3>
        {foreachelse}
        <h1>尚無內容</h1>
        {/foreach}
    </div> -->

    {include file='footer.tpl'}

</body>

</html>