<!doctype html>
<html lang="zh-Hant-TW">

<head>
    {include file='header.tpl'}
</head>

<body>
    {include file='nav.tpl'}

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

            {include file='op_article_form.tpl'}

        </div>
    </div>

    {include file='footer.tpl'}

</body>

</html>