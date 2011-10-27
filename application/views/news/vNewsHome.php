<div id="dvContent">
    <div class="spnTitle Page">Новости образования</div>
    <div id="dvNews">
    <?php foreach($news as $one_news){ ?>
        <div class="dvOneNews">
            <div class="dvHeaderNews">
                <div class="dvHTitleNews"><a href=""><?=$one_news['title']?></a></div>
                <div class="dvTInfoNews">Опубликовано: <?= date('d.m.Y H.i',$one_news['date_public']); ?></div>
            </div>
            <div class="dvBodyNews">
                <?php
                    echo $one_news['text_pre'];
                    if(!empty($flag_full)){echo $one_news['text_full'];}
                ?>
            </div>
            <div class="dvFooterNews">
                <div class="dvReadMore"><a href="/news/public/<?=$one_news['id'];?>">Читать далее</a></div>
                <div class="dvSocialButtons"><img src="../../../stfile/img/soc.PNG" alt=""></div>
            </div>
        </div>
<?php } ?>

    </div>
    <div id="dvWidgets">1</div>
</div>