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
        {foreach $all as $article}
        <div class="col-sm-4">
            <!-- {assign var="cover" value="uploads/`$article.sn`.jpg"} -->
            {assign var="cover" value="uploads/thumb_`$article.sn`.png"} {if file_exists($cover)}
            <!-- <img src="uploads/{$article.sn}.jpg" alt="{$article.title}" class="rounded cover"> -->
            <img src="{$cover}" alt="{$article.title}" class="rounded cover"> {else}
            <img src="https://picsum.photos/400/300?image={$article@index}" alt="{$article.title}" class="rounded cover"> {/if}
            <h3>
                <a href="index.php?sn={$article.sn}">{$article.title}</a>
            </h3>
            {$article.summary}
        </div>
        {foreachelse}
        <h1>尚無內容</h1>
        {/foreach}
    </div>
</div>