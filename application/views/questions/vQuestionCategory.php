<div id="dvContent">
    <div class="spnTitle Page">Вопросы и ответы: категории</div>
    <section id="vio_menu">
        <div class="pull-left   content-block">
            <header><h4>Профиль</h4></header>
            <? if($user_auth): ?>
            <div class="content">
                <div class="vio-mini-profile">
                    <div class="avatar" style="">
                        <? if($sex): ?><img src="../../../stfile/img/vio/default_male.png" alt="">
                        <? else: ?><img src="../../../stfile/img/vio/default_female.png" alt="">
                        <? endif; ?>
                    </div>
                    <div class="profile-info">
                        <ul class="unstyled">
                            <li><strong><?=$username ?></strong></li>
                            <li><a>Избранное:</a> <span class="favorite-count"><?=$favorites->count();?></span></li>
                            <li><a>Вопросов:</a> <?=$user_questions->count(); ?></li>
                            <li><a >Ответов:</a> <?=$user_answers->count(); ?></li>
                        </ul>
                    </div>
                    <div class="popular-tags">
                        <div>Популярное:</div>
                        <div class="subcatBlock">
                            <? if($popular_tags) foreach($popular_tags as $popular_tag): ?>
                            <a href="/questions/all?subcat=<?=$popular_tag->id_subcategory;?>"><?=$popular_tag->title;?></a>
                            <? endforeach; else echo 'Вы пока еще не отвечали на вопросы.';?>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <a class="pull-right"> Редактировать </a>
            </footer>
            <? else: ?>
            <div class="content pagination-centered">
                Вы не <a href="/">Авторизированы</a>
            </div>
            <? endif; ?>
        </div>
        <div class="pull-left   content-block">
            <header><h4>Реклама</h4></header>
            <div class="content">
                <img src="../../../stfile/img/ad.jpg" alt="реклама" />
            </div>
            <footer>

            </footer>
        </div>
    </section>
    <section id="vio_content">
        <div class="control-group"></div>
        <menu class="tools-menu unpadding">
            <li><a href="/questions"> Главная ВиО </a></li>
            <li> <small>/ Список категорий</small></li>
        </menu>
        <? foreach($categories as $category): ?>
            <div class="content-block">
                <header>
                    <h4><a href="/questions/all?cat=<?= $category->id_category;?>"><?= $category->title;?></a></h4>
                </header>
                <div class="subcategory-list content">
                    <? foreach($category->subcategories->find_all() as $subcategory): ?>
                    <div class="subcategory-item"><a href="/questions/all?subcat=<?= $subcategory->id_subcategory;?>"><?=$subcategory->title;?></a></div>
                    <? endforeach; ?>
                </div>
                <footer>
                    <div class="pull-right"><a href="/questions/all?cat=<?=$category->id_category?>">Все вопросы с этими категориями</a></div>
                </footer>
            </div>
        <? endforeach; ?>
    </section>
</div>