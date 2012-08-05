<?
// Создаем дополнительные теги для ссылок
if(!is_null($curr_page)) { $ext_page = '&page=' .$curr_page; } else {$ext_page = '';}
$ext_limit = '';
if(!is_null($order_by)) { $ext_orderby = '&orderby=' .$order_by; } else {$ext_orderby = '';}
if(!is_null($subcat)) { $ext_subcat = '&subcat=' .$subcat; } else {$ext_subcat = '';}
if(!is_null($cat)) { $ext_cat = '&cat=' .$cat; } else {$ext_cat = '';}
if(!is_null($status)) { $ext_status = '&status=' .$status; } else {$ext_status = '';}
?>
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
                <li><a href="/questions"> Главная ВиО </a> <small>/</small></li>
                <li> <small>Все вопросы</small></li>
                <li class="right">
                    <div class="btn-group">
                        <a href="?status=all" class="btn btn-mini <? if($status == 'all' || $status == null) echo 'active'; ?>">Все</a>
                        <a href="?status=opened" class="btn btn-mini <? if($status == 'opened') echo 'active'; ?>">Открытые</a>
                        <a href="?status=closed" class="btn btn-mini <? if($status == 'closed') echo 'active'; ?>">Закрытые</a>
                    </div>
                </li>
            </menu>

        <div class=" content-block">
            <div class="content unpadding">
                <table class="table  questionsList unmargin">
                    <thead>
                    <tr class="light-blue">
                        <th colspan="2" class="header">
                            <h4>Все вопросы</h4>
                        </th>
                        <th class="span0 ">
                            <span data-original-title="Пользователь" class="tips icon20 icon20-man centered"></span>
                        </th>
                        <th class="span0">
                            <a  href="?<?=$ext_limit .$ext_subcat .$ext_cat .'&orderby=rating' ?>">
                                <span data-original-title="Сортировать по рейтингу" class="tips icon20 icon20-graph <? if($order_by == 'rating') echo 'checked'; ?>"></span>
                            </a>
                        </th>
                        <th class="span0">
                            <a href="?<?=$ext_limit .$ext_subcat .$ext_cat .'&orderby=answers' ?>">
                                <span data-original-title="Сортировать по количеству ответов" class="tips icon20 icon20-lamp-on <? if($order_by == 'answers') echo 'checked'; ?>"></span>
                            </a>
                        </th>
                        <th class="span0 ">
                            <a href="?<?=$ext_limit .$ext_subcat .$ext_cat .'&orderby=date' ?>">
                                <span data-original-title="Сортировать по дате добавления" class="tips icon20 icon20-clock centered <? if($order_by == 'date') echo 'checked'; ?>"></span>
                            </a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <? foreach($questions as $question) : ?>
                        <?
                        $is_favorite = '';
                        $to_favorite = '';
                        $tip = 'Для добавления вопроса в избранное авторизируйтесь';
                        if( isset($user_id)) {
                            $tip = 'Добавить в избранное';
                            $to_favorite = ' toFavorite';
                            foreach($favorites as $favorite) {
                                if($question->id_question == $favorite->question_id) {
                                    $is_favorite = ' active';
                                    $tip = 'Удалить из избранного';
                                }
                            }
                        }?>
                    <tr>
                        <td class="pull-center span0">
                            <input type="hidden" class="hQuestionId" value="<?=$question->id_question;?>">
                            <a data-original-title="<?=$tip;?>" class="icon-hovered tips <?=$is_favorite; echo $to_favorite;?>">
                                <i class="icon-star"></i>
                            </a>
                        </td>
                        <td>
                            <a class="" href="/questions/question/<?=$question->id_question;?>"><?=$question->title; ?></a>
                                    <span class="spnTags">
                                    <? foreach($question->subcategories->find_all() as $subcategory): ?>
                                        <a href="?<?='&subcat=' .$subcategory->id_subcategory; ?>" class=""><?=$subcategory->title; ?></a>
                                        <? endforeach; ?>
                                    </span>
                        </td>
                        <td class="username"><a><?=$question->user->username; ?></a></td>
                        <td class="rating"><?=$question->rating; ?></td>
                        <td class="answers"><?=$question->answers_count; ?></a></td>
                        <td class="time"><?= date('d/m/y',strtotime($question->public_date)); ?></td>
                    </tr>
                        <? endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
        <? if($pages > 1) :?>
        <div class="pagination pagination-centered">
            <ul>
                <? $extra_tags = '?' .$ext_limit .$ext_orderby. $ext_subcat .$ext_cat .$ext_status; ?>

                <? if($curr_page > 1) echo '<li><a href="'.$extra_tags .'&page=' .($curr_page - 1) .'">«</a></li>';
                    else echo ''?>
                <?
                $start = 0;
                $end = $pages;
                if(($curr_page - 4) > 1) {
                    echo '<li class="active"><a>...</a></li>';
                    $start = ($curr_page - 5);
                }
                if(($curr_page + 4) < $pages) {
                    $end = ($curr_page + 4);
                }
                ?>
                <? for($i = $start; $i < $end; $i++): ?>
                <? if($curr_page == ($i+1)) {
                    echo '<li class="active"><a>'.$curr_page .'</a></li>';
                } else if($i >= 0 && $i < $pages) echo '<li><a href="'.$extra_tags .'&page=' .($i+1) .'">' .($i+1) .'</a></li>'; ?>
                <? endfor; ?>
                <? if($curr_page + 4 < ($pages)) echo '<li class="active"><a>...</a></li>'; ?>
                <? if($curr_page < $pages) echo '<li><a href="'.$extra_tags .'&page=' .($curr_page + 1) .'">»</a></li>'; else echo ''?>

            </ul>
        </div>
        <? endif; ?>
    </section>
</div>