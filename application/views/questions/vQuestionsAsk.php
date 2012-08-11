<div id="dvContent">
    <div class="spnTitle Page">Задать вопрос</div>
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
            <header><h4>Категории</h4></header>
            <div class="content">
                <? foreach($categories as $category): ?>
                <div class="catBlock">
                    <div class="catTitle">
                        <a href="/questions/all?cat=<?=$category->id_category;?>"><?=$category->title;?></a>
                    </div>
                    <div class="subcatBlock">
                        <? foreach($category->subcategories->find_all() as $k=>$subcategory): ?>
                        <a href="/questions/all?subcat=<?=$subcategory->id_subcategory ?>" ><?=$subcategory->title ?></a>
                        <? if($k >= 7) break; ?>
                        <? endforeach; ?>
                        <div style="clear: both;"></div>
                    </div>
                </div>
                <? endforeach; ?>
            </div>
            <footer>
                <a class="pull-right">Все категории</a>
            </footer>
        </div>
    </section>
    <section id="vio_content">
        <menu class="tools-menu unpadding">
            <li><a href="/questions"> Главная ВиО </a> <small>/</small></li>
            <li> <small>Задать вопрос</small></li>
        </menu>
        <div class="page-header">
            <h4>Создание нового вопроса <small> заголовок обязателен.</small></h4>
        </div>

        <form action="/questions/ask" method="POST" id="ask-new-question">
                <div class="control-group">
                    <label for="question-title"> Заголовок вопроса</label>
                    <input type="text" name="question_title" id="question-title" value="<?=$question_title;?>" placeholder="Краткое содержание вопроса, до 100 символов" class="span10">
                </div>
                <div class="control-group">
                <label for="question-full"> Текст вопроса</label>
                <textarea name="question_title" id="question-full" class="span10" placeholder="Детальное описание вопроса"></textarea>
                    </div>
            <div class="control-group">
                <label>Категории</label>
                <!--  Блок с выбором категорий вопроса  -->
                <div class="tabbable tabs-left">
                    <ul class="nav nav-tabs">
                        <?php $k = true; foreach ($categories as $category): ?>
                        <li class="<?php if($k) { echo 'active'; $k = false; } ?>">
                            <a href="#<?php echo $category->id_category; ?>" data-toggle="tab"><?php echo $category->title; ?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="tab-content">
                        <?php $k = true; foreach ($categories as $category): $counter = 0;?>
                        <div class="tab-pane <?php if($k) { echo 'active'; $k = false; } ?>" id="<? echo $category->id_category; ?>">
                            <div class="innerTabPane">
                                <?php foreach($category->subcategories->find_all() as $subcategory): ?>
                                <div class="dv-tags-item">
                                    <label class="checkbox">
                                        <input type="checkbox" class="existing-tag" value="<? echo $subcategory->title ?>" data-existing-tag-id="<? echo $subcategory->id_subcategory ?>" name="tags[]">
                                        <? echo $subcategory->title; ?>
                                    </label>
                                </div>
                                <? endforeach; ?>
                            </div>
                        </div>
                        <? endforeach; ?>
                    </div>
                </div>
                </div>
            <!--  Блок с добавлением своих меток-категорий  -->
            <div id="dvAddingCategory">
                <div class="control-group">
                    <label for="new-tag-title">Добавить свою категорию</label>
                    <input type="text" class="unmargin" id="new-tag-title" placeholder="Введите свою категорию">
                    <a class="btn" id="btn-add-new-tag"> Добавить</a>
                    </div>
                <div class="dvCategoryLabel">
<!--                    <h6>Выбранные категории:</h6>-->
                    <ul class="tags" id="selected-tags">
                    </ul>
                    <div style="clear: both;"></div>
                </div>
            </div>
            <div class="form-actions">
                <a class="btn btn-large btn-primary" id="add-question">Задать вопрос</a>
                <a href="/questions/all" class="btn btn-large">Перейти к списку вопросов</a>
            </div>
            </form>

    </section>
</div>