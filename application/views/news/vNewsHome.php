<div id="dvContent">
    <div class="spnTitle Page">Новости образования</div>
    <div id="dvNews">
    <?php foreach($news as $one_news){ ?>
        <div class="dvOneNews">
            <div class="dvHeaderNews">
                <div class="dvHTitleNews"><a href="/news/public/<?=$one_news['id'];?>"><?=$one_news['title']?></a></div>
                <div class="dvTInfoNews">Опубликовано: <?= date('d.m.Y H.i',$one_news['date_public']); ?> | Источник: <a href="<?=$one_news['refer_link'];?>"><?=$one_news['refer_name'];?></a></div>
            </div>
            <div class="dvBodyNews">
                <?php
                    echo $one_news['text_pre'];
                    if(!empty($flag_full)){echo $one_news['text_full'];}
                ?>
            </div>
            <div class="dvFooterNews">
                <div class="dvReadMore">
                    <?php if(empty($flag_full)){ ?>
                    <a href="/news/public/<?=$one_news['id'];?>">Читать далее</a>
                    <?php } ?>
                </div>
                <div class="dvSocialButtons"><img src="../../../stfile/img/soc.PNG" alt=""></div>
            </div>
        </div>
<?php } ?>
       <div id="dvNavigation">
           <?php if($prev_flag){?> <a href="/news?page=<?=$prev_page;?>">Назад</a> <?php } ?>
           <?php if($next_flag){?> <a href="/news?page=<?=$next_page;?>">Вперед</a> <?php } ?>
       </div>
    </div>
    <div id="dvWidgets">
        <div id="datepicker">
                        
        </div>
    </div>
</div>