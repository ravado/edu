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
            <div class="content pagination-centered">
                Вы не <a>Авторизированы</a>
            </div>

        </div>
        <div class="pull-left   content-block">
            <header><h4>Категории</h4></header>
            <div class="content">
                <div class="catBlock">
                    <div class="catTitle">
                        <a href="">Категория</a>
                    </div>
                    <div class="subcatBlock">
                        <a href="" >подкатегория</a>
                        <a href="">подкария</a>
                        <a href="" >подкатеоря</a>
                        <a href="">подкатегория</a>
                        <div style="clear: both;"></div>
                    </div>
                </div>
                <div class="catBlock">
                    <div class="catTitle">
                        <a href="">Категория</a>
                    </div>
                    <div class="subcatBlock">
                        <a href="" >подкатегория</a>
                        <a href="">подкария</a>
                        <a href="" >подкатеоря</a>
                        <a href="">подкатегория</a>
                        <div style="clear: both;"></div>
                    </div>
                </div>
                <div class="catBlock">
                    <div class="catTitle">
                        <a href="">Категория</a>
                    </div>
                    <div class="subcatBlock">
                        <a href="" >подкатегория</a>
                        <a href="">подкария</a>
                        <a href="" >подкатеоря</a>
                        <a href="">подкатегория</a>
                        <div style="clear: both;"></div>
                    </div>
                </div>
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
            <header><h4>Самые популярные вопросы</h4></header>
            <div class="content">
                <table class="table  questionsList">
                    <thead>
                    <tr>
                        <th class="span0"></th>
                        <th></th>
                        <th class="span0">
                            <span data-original-title="Рейтинг" class="tips icon24 icon24-graph"></span>
                        </th>
                        <th class="span0">
                            <span data-original-title="Количество ответов" class="tips icon24 icon24-lamp-on"></span>
                        </th>
                        <th class="span0 ">
                            <span data-original-title="Дата добавления" class="tips icon24 icon24-clock centered"></span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <? foreach($populars as $popular) : ?>
                    <tr>
                        <td><a class="delQuestion"><i class="icon-star"></i></a></td>
                        <td>
                            <a class="" href="/adm/vio/fixquestion/<?=$popular->id_question;?>"><?=$popular->title; ?></a>
                                <span class="spnTags">
                                <? foreach($popular->subcategories->find_all() as $subcategory): ?>
                                    <a href="?<?='&subcat=' .$subcategory->id_subcategory; ?>" class=""><?=$subcategory->title; ?></a>
                                    <? endforeach; ?>
                                </span>
                        </td>
                        <td class="rating"><?=$popular->rating; ?></td>
                        <td class="answers"><?=$popular->answers_count; ?></a></td>
                        <td class="time"><?= date('y/m/d',strtotime($popular->public_date)); ?></td>
                    </tr>
                        <? endforeach; ?>
                    </tbody>
                </table>

            </div>
            <footer>
                <a class="pull-right">Перейти ко всем вопросам</a>
            </footer>
        </div>
        <div class=" content-block">
            <header><h4>Новые вопросы</h4></header>
            <div class="content">
                <table class="table  questionsList ">
                    <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th class="span0">
                            <span data-original-title="Рейтинг" class="tips icon24 icon24-graph"></span>
                        </th>
                        <th class="span0">
                            <span data-original-title="Количество ответов" class="tips icon24 icon24-lamp-on"></span>
                        </th>
                        <th class="span0 ">
                            <span data-original-title="Дата добавления" class="tips icon24 icon24-clock centered"></span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <? foreach($lasts as $last) : ?>
                    <tr>
                        <td><a class="delQuestion"><i class="icon-star"></i></a></td>
                        <td>
                            <a class="" href="/adm/vio/fixquestion/<?=$last->id_question;?>"><?=$last->title; ?></a>
                                <span class="spnTags">
                                <? foreach($last->subcategories->find_all() as $subcategory): ?>
                                    <a href="?<?='&subcat=' .$subcategory->id_subcategory; ?>" class=""><?=$subcategory->title; ?></a>
                                    <? endforeach; ?>
                                </span>
                        </td>
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


