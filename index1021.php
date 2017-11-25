<!doctype html>
<html lang="zh-Hant-TW">
<!-- <html lang="en"> -->


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>106/10/21頁面標題</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/my.css">
</head>

<body>
    <div class="img-container">

        <div class="container">
            <nav class="nav">
                <a href="index.html" class="nav-link text-white active">首頁</a>
                <a href="admin.html" class="nav-link text-white">管理</a>
                <a href="b.html" class="nav-link text-white">b</a>
            </nav>
            <div class="row">
                <h1 class="text-white my-5">台南社大</h1>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-4 text-white">
                    <p>關心台南公園，不只是守護台南人僅有的百年公園、守護這片絕無僅有的城市生態環境，也因為：享有公園綠地實為我們的生活權力！保護自然環境，關乎人們的身、心、靈生活品質。</p>
                </div>
                <div class="col-sm-6 col-md-4 text-white">
                    <p>關心台南公園，不只是守護台南人僅有的百年公園、守護這片絕無僅有的城市生態環境，也因為：享有公園綠地實為我們的生活權力！保護自然環境，關乎人們的身、心、靈生活品質。</p>
                </div>
                <div class="col-sm-6 col-md-4 text-white">
                    <p>關心台南公園，不只是守護台南人僅有的百年公園、守護這片絕無僅有的城市生態環境，也因為：享有公園綠地實為我們的生活權力！保護自然環境，關乎人們的身、心、靈生活品質。</p>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <p class="lipsum(3,20-50)"></p>
        <p class="lipsum(4,20-50)"></p>
        <p class="lipsum(5,20-50)"></p>
    </div>

    <!--
    <div class='container'>
        <h1>
            <i class='fa-user'></i>Bootstrap4</h1>
        <table class='table table-hover'>
            <tr>
                <td>abcde</td>
            </tr>
            <tr>
                <td>1234</td>
            </tr>
            <tr>
                <td>台南社大</td>
            </tr>
        </table>
    </div>
-->

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            //$('.img-container').css('width', '2200px');
            //$('.img-container').css('height', '200px');
            $('.img-container').css('width', $(window).width());
            $('.img-container').css('height', $(window).height());
        });
        $(window).resize(function () {
            $('.img-container').css('width', $(window).width());
            $('.img-container').css('height', $(window).height());
        });
    </script>
    <script src="http://more.handlino.com/javascripts/moretext-1.2.js" type="text/javascript"></script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script> -->
</body>

</html>