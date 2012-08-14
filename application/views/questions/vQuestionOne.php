
<div id="dvContent">
    <input type="hidden" id="hUserAuth" value="<?=$user_auth?>">
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
                            <li><a>Вопросов:</a> <span class="question-count"><?=$user_questions->count(); ?></span></li>
                            <li><a >Ответов:</a> <span class="answer-count"><?=$user_answers->count(); ?></span></li>
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
            <li><a href="/questions/all"><small>/</small> Все вопросы</a></li>
            <li> <small>/ Вопрос</small></li>
        </menu>
        <div class="content-block ">


            <header>
                <h4>
                    <?=$question->title;?>
                </h4>
            </header>
            <div class="content question-block">
                <div class="question-info">
                    <a href="#"><?=$question->user->username;?></a> <?=date('d-m-Y H:i', strtotime($question->public_date));?>
                    <? if($user_auth): ?>
                    <ul class="unstyled pull-right violation">
                        <li class="dropdown ">
                            <input type="hidden" value="<?=$question->id_question?>" class="hItemId">
                            <span class="icon-loading hide"><img alt="loading" src="/stfile/img/1loading.gif"></span>
                            <? if($question->user->id != $user_id): ?>
                            <a class="dropdown-toggle " data-toggle="dropdown" href="#">Сообщить о нарушении</a>
                            <ul class="dropdown-menu ">
                                <? foreach($impropers_question as $improper): ?>
                                <li>
                                    <input type="hidden" class="hImproperId" value="<?=$improper->id_impropertype;?>">
                                    <a class="question improper"><?=$improper->title;?></a>

                                </li>
                                <? endforeach; ?>
                            </ul>
                            <? endif; ?>
                        </li>
                    </ul>
                    <? endif; ?>
                </div>
                <div class="question-text">
                    <?=$question->full;?>
                </div>
                <div class="voting">
                    <?
                    $voted_up = '';
                    $voted_down = '';
                    if($user_auth) {
                        if($question->votes->where('user_id','=',$user_id)->where('value','=','1')->count_all() > 0 ) $voted_up = 'active';
                        elseif($question->votes->where('user_id','=',$user_id)->where('value','=','-1')->count_all() > 0) $voted_down = 'active';
                    }
                    ?>
                    <input type="hidden" class="hQuestionId" value="<?=$question->id_question;?>">
                    <div class="rating">
                        <span class="current"><?=$question->rating;?></span>
                        <span class="icon-loading hide"><img src="/stfile/img/1loading.gif" alt="loading"></span>
                    </div>
                    <a class="hovered vote-up btn-vote <?=$voted_up; ?>">
                        <i class="icon-thumbs-up"></i> хороший вопрос
                    </a>
                    <a class="tips hovered vote-down btn-vote <?=$voted_down; ?>" style="">
                        <i class="icon-thumbs-down"></i> плохой вопрос
                    </a>
                </div>

                <div style="clear: both;"></div>
            </div>
            <footer>
                <? foreach($question->subcategories->find_all() as $subcategory): ?>
                <a href="/questions/all?subcat=<?=$subcategory->id_subcategory;?>"><?=$subcategory->title;?></a>
                <? endforeach; ?>
                <div class="dvToFavorite">
                    <? if($user_auth): ?>
                    <?
                    $active = '';
                    $tip = 'Добавить в избранное';
                    $favorite = $question->favorites->where('user_id','=',$user_id)->find();
                    if($favorite->loaded()) {
                        $active = 'active';
                        $tip = 'Удалить из избранного';
                    }
                    ?>

                    <span>
                        <span class="iconLoading"><img src="/stfile/img/1loading.gif" alt="loading"></span>
                        <i class="icon icon-star <?=$active;?>"></i>
                        <a class="toFavorite single <?=$active;?>"><?=$tip?></a>
                    </span>
                    <? else: ?>
                    <span>
                        <i class="icon icon-star"></i>
                        <a class="single tips" data-original-title="Для добавления вопроса в избранное авторизируйтесь">Добавить в избранное</a>
                    </span>
                    <? endif; ?>
                </div>
            </footer>
        </div>
        <? if($user_auth && !$question->is_closed && $user_id != $question->user_id): ?>
        <div class="content-block">
            <button href="" class="btn" id="showAddingAnswer">Добавить ответ</button>
        </div>
        <div id="block-add-answer" class="hide">
            <label for="answerText"> Ваш ответ</label>
            <textarea rows="5" cols="115" id="answerText"></textarea>
            <div>
                <button class="btn btn-primary" id="addAnswer">Добавить ответ</button>
                <button class="btn" id="canceledAnswer">Отменить</button>
                <span class="icon-loading hide"><img src="/stfile/img/1loading.gif" alt="loading"></span>
            </div>
        </div>
        <? elseif(!$user_auth && !$question->is_closed): ?>
        <div class="content-block">
            Для того что бы добавлять ответы необходимо <a href="/">Авторизироваться</a>
        </div>
        <? elseif($question->is_closed): ?>

        <? endif; ?>










        <? if($question->is_closed): ?>
            <? $best = $question->answers->where('is_best','=','1')->find(); ?>
        <div class="content-block best-answer">
            <header>
                <h4>Лучший ответ</h4>
            </header>
            <div class="content">
                <div class="answer-block">
                    <div class="answer-info">
                        <input type="hidden" class="hAnswerId" value="<?=$best->id_answer;?>">
                        <span class="best-icon"></span>
                        <a href="#"><?=$best->user->username;?></a> <?=date('d-m-Y H:i', strtotime($best->public_date));?>
                        <? if($user_auth) :?>
                        <ul class="unstyled pull-right violation">
                        <li class="dropdown ">
                            <input type="hidden" value="<?=$best->id_answer?>" class="hItemId">
                            <a class="dropdown-toggle " data-toggle="dropdown" href="#">Сообщить о нарушении</a>
                            <ul class="dropdown-menu ">
                                <? foreach($impropers_answer as $improper): ?>
                                <li>
                                    <input type="hidden" class="hImproperId" value="<?=$improper->id_impropertype;?>">
                                    <a class="answer improper"><?=$improper->title;?></a>
                                </li>
                                <? endforeach; ?>
                            </ul>
                        </li>
                    </ul>
                            <?endif;?>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="answer"><?=$best->text;?></div>
                    <div class="voting">
                        <?
                        $voted_up = '';
                        $voted_down = '';
                        if($user_auth) {
                            if($best->votes->where('user_id','=',$user_id)->where('value','=','1')->count_all() > 0 ) $voted_up = 'active';
                            elseif($best->votes->where('user_id','=',$user_id)->where('value','=','-1')->count_all() > 0) $voted_down = 'active';
                        }
                        ?>
                        <div class="rating">
                            <span class="current"><?=$best->rating;?></span>
                            <span class="icon-loading hide"><img src="/stfile/img/1loading.gif" alt="loading"></span>
                        </div>
                        <a class="hovered vote-up btn-vote <?=$voted_up?>">
                            <i class="icon-thumbs-up"></i> хороший ответ
                        </a>
                        <a class=" hovered vote-down btn-vote <?=$voted_down?>">
                            <i class="icon-thumbs-down"></i> плохой ответ
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <? endif; ?>












        <div class="content-block">
            <header>
                <h4>Ответы</h4>
            </header>
            <div class="content answer-list">
                <? if($question->answers->count_all() == 0) echo 'На даный момент нет ответов на даный вопрос'; ?>
                <? foreach($question->answers->order_by('rating','desc')->find_all() as $answer):?>
                <? if(!$answer->is_best): ?>
                    <? switch($answer->rating){
                        case ($answer->rating <= -2 && $answer->rating >= -5): {
                            $opacity = 'not-good-answer';
                            break;
                        }
                        case ($answer->rating <= -6 && $answer->rating >= -10): {
                            $opacity = 'bad-answer';
                            break;
                        }
                        case ($answer->rating <= -11): {
                            $opacity = 'very-bad-answer';
                            break;
                        }
                        default: $opacity = '';
                    } ?>
                 <div class="answer-block <?=$opacity?>">
                    <div class="answer-info">
                        <input type="hidden" class="hAnswerId" value="<?=$answer->id_answer;?>">
                        <a href="#"><?=$answer->user->username;?></a>  <?=date('d-m-Y H:i', strtotime($answer->public_date));?>
                        <? if($user_auth): ?>
                        <ul class="unstyled pull-right violation">
                            <li class="dropdown ">
                                <input type="hidden" value="<?=$answer->id_answer?>" class="hItemId">
                                <a class="dropdown-toggle " data-toggle="dropdown" href="#">Сообщить о нарушении</a>
                                <ul class="dropdown-menu ">
                                    <? foreach($impropers_answer as $improper): ?>
                                    <li>
                                        <input type="hidden" class="hImproperId" value="<?=$improper->id_impropertype;?>">
                                        <a class="answer improper"><?=$improper->title;?></a>
                                    </li>
                                    <? endforeach; ?>
                                </ul>
                            </li>
                        </ul>
                            <? if($user_id == $question->user->id && !$question->is_closed) :?>
                        <a class="hovered check-as-best pull-right"> Это лучший ответ</a>
                            <? endif; ?>
                        <? endif; ?>
                    </div>
                    <div class="answer"><?=$answer->text;?></div>
                     <div class="voting">
                         <?
                         $voted_up = '';
                         $voted_down = '';
                         if($user_auth) {
                             if($answer->votes->where('user_id','=',$user_id)->where('value','=','1')->count_all() > 0 ) $voted_up = 'active';
                             elseif($answer->votes->where('user_id','=',$user_id)->where('value','=','-1')->count_all() > 0) $voted_down = 'active';
                         }
                         ?>
                         <div class="rating">
                             <span class="current"><?=$answer->rating;?></span>
                             <span class="icon-loading hide"><img src="/stfile/img/1loading.gif" alt="loading"></span>
                         </div>
                         <a class="hovered vote-up btn-vote <?=$voted_up;?>">
                             <i class="icon-thumbs-up"></i> хороший ответ
                         </a>
                         <a class=" hovered vote-down btn-vote <?=$voted_down;?>">
                             <i class="icon-thumbs-down"></i> плохой ответ
                         </a>

                     </div>

                 </div>
                     <?endif;?>
                <? endforeach; ?>
            </div>
        </div>
        <? if(isset($similars) || isset($randoms)): ?>
        <div class="content-block">
            <header>
                <? if(isset($similars)):?>
                <h4>Похожие вопросы <small>вопросы на которые вы можете знать ответ</small></h4>
                    <? else: ?>
                <h4>Случайные вопросы <small>возможно вы смогли бы ответить на эти вопросы</small></h4>
                <? endif; ?>
            </header>
            <div class="content">


            <ul class="unstyled similar-questions">
                <? if(isset($similars)): ?>
                <? foreach($similars as $similar): ?>
                <li><a class="" href="/questions/question/<?=$similar->id_question;?>"><?=$similar->title;?></a></li>
                <? endforeach; ?>
                <? else: ?>
                <? foreach($randoms as $random): ?>
                <li><a class="" href="/questions/question/<?=$random->id_question;?>"><?=$random->title;?></a></li>
                <? endforeach; ?>
                <? endif; ?>
            </ul>
            </div>
        </div>
        <?endif;?>



    </section>
</div>