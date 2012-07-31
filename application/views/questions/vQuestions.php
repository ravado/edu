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
                            <li><a>Избранное:</a> <?=$favorites->count();?></li>
                            <li><a>Вопросов:</a> <?=$user_questions->count(); ?></li>
                            <li><a>Ответов:</a> <?=$user_answers->count(); ?></li>
                        </ul>
                    </div>
                    <div class="popular-tags">
                        <div>Популярное:</div>
                        <div class="subcatBlock">
                        <? foreach($popular_tags as $popular_tag): ?>
                            <a href="<?=$popular_tag->id_subcategory;?>"><?=$popular_tag->title;?></a>
                        <? endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <a class="pull-right"> Редактировать </a>
            </footer>
            <? else: ?>
            <div class="content pagination-centered">
                Вы не <a>Авторизированы</a>
            </div>
            <? endif; ?>
        </div>
        <div class="pull-left   content-block">
            <header><h4>Категории</h4></header>
            <div class="content">
                <? foreach($categories as $category): ?>
                <div class="catBlock">
                    <div class="catTitle">
                        <a href="<?=$category->id_category;?>"><?=$category->title;?></a>
                    </div>
                    <div class="subcatBlock">
                        <? foreach($category->subcategories->find_all() as $k=>$subcategory): ?>
                        <a href="<?=$subcategory->id_subcategory ?>" ><?=$subcategory->title ?></a>
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
        <div class=" content-block">
            <div class="content unpadding">
                <table class="table  questionsList unmargin">
                    <thead>
                    <tr class="light-blue">
                        <th colspan="2" class="header">
                            <h4>Популярные вопросы</h4>
                        </th>
                        <th class="span0 ">
                            <span data-original-title="Пользователь" class="tips icon20 icon20-man centered"></span>
                        </th>
                        <th class="span0">
                            <span data-original-title="Рейтинг" class="tips icon20 icon20-graph"></span>
                        </th>
                        <th class="span0">
                            <span data-original-title="Количество ответов" class="tips icon20 icon20-lamp-on"></span>
                        </th>
                        <th class="span0 ">
                            <span data-original-title="Дата добавления" class="tips icon20 icon20-clock centered"></span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <? foreach($populars as $popular) : ?>
                    <tr>
                        <td class="pull-center span0"><a data-original-title="Добавить в избранное" class="delQuestion tips"><i class="icon-star"></i></a></td>
                        <td>
                            <a class="" href="/vio/question/<?=$popular->id_question;?>"><?=$popular->title; ?></a>
                                <span class="spnTags">
                                <? foreach($popular->subcategories->find_all() as $subcategory): ?>
                                    <a href="?<?='&subcat=' .$subcategory->id_subcategory; ?>" class=""><?=$subcategory->title; ?></a>
                                    <? endforeach; ?>
                                </span>
                        </td>
                        <td class="rating"><a><?=$popular->user->username; ?></a></td>
                        <td class="rating"><?=$popular->rating; ?></td>
                        <td class="answers"><?=$popular->answers_count; ?></a></td>
                        <td class="time"><?= date('d/m/y',strtotime($popular->public_date)); ?></td>
                    </tr>
                        <? endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
        <div class=" content-block">
            <div class="content unpadding">
                <table class="table  questionsList unmargin">
                    <thead>
                    <tr class="light-blue">
                        <th colspan="2" class="header">
                            <h4>Новые вопросы</h4>
                        </th>
                        <th class="span0">
                            <span data-original-title="Пользователь" class="tips icon20 centered icon20-man"></span>
                        </th>
                        <th class="span0">
                            <span data-original-title="Рейтинг" class="tips icon20 icon20-graph"></span>
                        </th>
                        <th class="span0">
                            <span data-original-title="Количество ответов" class="tips icon20 icon20-lamp-on"></span>
                        </th>
                        <th class="span0 ">
                            <span data-original-title="Дата добавления" class="tips icon20 icon20-clock centered"></span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <? foreach($lasts as $last) : ?>
                    <tr>
                        <td class="pull-center"><a class="delQuestion"><i class="icon-star"></i></a></td>
                        <td>
                            <a href="/vio/question/<?=$last->id_question;?>"><?=$last->title; ?></a>
                                <span class="spnTags">
                                <? foreach($last->subcategories->find_all() as $subcategory): ?>
                                    <a href="?<?='&subcat=' .$subcategory->id_subcategory; ?>" class=""><?=$subcategory->title; ?></a>
                                    <? endforeach; ?>
                                </span>
                        </td>
                        <td class="rating"><a><?=$last->user->username; ?></a></td>
                        <td class="rating"><?=$last->rating; ?></td>
                        <td class="answers"><?=$last->answers_count; ?></a></td>
                        <td class="time"><?= date('H:i',strtotime($last->public_date)); ?></td>
                    </tr>
                    <? endforeach; ?>
                    </tbody>
                </table>
            </div>

            <footer>
                <a class="pull-right">Перейти ко всем вопросам</a>
            </footer>
        </div>

    </section>


