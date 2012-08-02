
<div id="dvContent">
    <div class="spnTitle Page">Вопросы и ответы
        <div class="search-bar">
            <form action="/search" method="post" id="frm-search">
                <fieldset>
                    <input type="text" placeholder="Поиск" class="search-input" name="search_query">
                    <input type="submit" value="ss " class="btn-search">
                </fieldset>
            </form>
        </div>
    </div>
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
        <div>
            <form action="" id="vioSearchBar">
                <fieldset class="">
                    <input type="text" class="search-input" id="vioSearchInput" placeholder="Введите свой вопрос">
                    <input type="button" class="btnFind " value="Найти">
                    <input type="button" class="btnAsk " value="Спросить">
                </fieldset>
            </form>
        </div>

        <menu class="tools-menu unpadding">
            <li><a href="/questions"> Главная ВиО </a></li>
            <li><a href="/questions"><small>/</small> Все вопросы</a></li>
            <li> <small>/ Вопрос</small></li>
        </menu>

        <div class="content-block">
            <header>
                <h4><span class="icon-star pull-left"></span>
                    <?=$question->title;?>
                </h4>
            </header>
            <div class="content">
                <div class="vote">
                    <?
                        $voted_up = '';
                        $voted_down = '';
                        if($user_auth) {
                            if($question->votes->where('user_id','=',$user_id)->where('value','=','1')->count_all() > 0 ) $voted_up = 'active';
                                elseif($question->votes->where('user_id','=',$user_id)->where('value','=','-1')->count_all() > 0) $voted_down = 'active';
                        }
                    ?>
                    <input type="hidden" class="hQuestionId" value="<?=$question->id_question;?>">
                    <button class="vote-up icon24 icon24-vote-up <?=$voted_up; ?>"></button>
                    <div class="votes">
                        <div class="iconLoading centered"><img alt="loading" src="/stfile/img/1loading.gif"></div>
                        <span class="current"><?=$question->rating;?></span>
                    </div>
                    <button class="vote-down icon24 icon24-vote-down <?=$voted_down; ?>"></button>
                </div>

                <div class="question-text">
                    <?=$question->full;?>
                </div>
                <div style="clear: both;"></div>
            </div>
            <footer>
                <? foreach($question->subcategories->find_all() as $subcategory): ?>
                <a href="/questions/all?subcat=<?=$subcategory->id_subcategory;?>"><?=$subcategory->title;?></a>
                <? endforeach; ?>
            </footer>
        </div>
        <div style="margin-bottom: 15px;"><button href="" class="btn">Добавить ответ</button></div>
        <div class="content-block">
            <header>
                <h4>Ответы</h4>
            </header>
            <div class="content">
                <? foreach($question->answers->find_all() as $answer):?>
                 <div class="answer-block">
                    <div class="answer-info">
                        <a href="#"><?=$question->user->username;?></a>  <?=$question->public_date;?>
                    </div>
                    <div class="answer"><?=$answer->text;?></div>
                     <a href="#" class="hovered">Пожаловаться на нарушение</a>
                 </div>

                <? endforeach; ?>
            </div>
        </div>



    </section>
</div>