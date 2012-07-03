<div id="dvContent">
    <?php
        $questions = array();
        $page = 1;
        $qcount = 0;
        if(!empty($result['questions'])) {
            $questions = $result['questions'];
        }

        if(!empty($result['qcount'])) {
            $qcount = $result['qcount'];
        }

        if(!empty($result['page'])) {
            $page = $result['page'];
        }

/*        foreach ($questions as $k=>$v) {
            print_r($questions[$k]);
            echo '<br>' .$result['page'] .'<br>';
        }
            echo 'count: ' .$qcount;*/

    ?>
    <div class="spnTitle Page">Вопросы и ответы: все вопросы</div>

    <!--  "Хлебные крошки"  -->
    <ul class="breadcrumb">
    <?php
        if ($qtype == 'closed') {
            echo '<li><a href="/questions">главная ВиО</a><span class="divider">/</span></li>';
            echo '<li><a href="/questions/all/any">все вопросы</a><span class="divider">/</span></li>';
            echo '<li class="active"><a href="#">закрытые</a></li>';
            $tblTitle = 'Закрытые';
        } elseif($qtype == 'opened') {
            echo '<li><a href="/questions">главная ВиО</a><span class="divider">/</span></li>';
            echo '<li><a href="/questions/all/any">все вопросы</a><span class="divider">/</span></li>';
            echo '<li class="active"><a href="#">открытые</a></li>';
            $tblTitle = 'Открытые';
        } elseif($qtype == 'any') {
            echo '<li><a href="/questions">главная ВиО</a><span class="divider">/</span></li>';
            echo '<li class="active"><a href="#">все вопросы</a></li>';
            $tblTitle = 'Все';
        } elseif($qtype == 'category') {
            echo '<li><a href="/questions">главная ВиО</a><span class="divider">/</span></li>';
            echo '<li><a href="/questions/all/any">все вопросы</a><span class="divider">/</span></li>';
            echo '<li><a href="/questions/category">все категории</a><span class="divider">/</span></li>';
            if (!empty($questions)) {
                echo '<li class="active"><a href="#">' .$questions[0]['stitle'] .'</a></li>';
                $tblTitle = $questions[0]['stitle'];
            }
        }
    ?>
    </ul>
<!--    <div class="tabbable">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#1" data-toggle="tab">Все</a></li>
            <li><a href="#2" data-toggle="tab">Открытые</a></li>
            <li><a href="#2" data-toggle="tab">Закрытые</a></li>
        </ul>
    </div>-->

    <?php
        if(empty($questions)) {
            echo '<br>Нет такой страницы 404';
            die;
        }
    ?>

    <div class="" id="dvAllQuestions">
        <table class="shadowBlock" cellspacing="0" width="100%">
            <tr class="lenta">
                <th class="lenta" colspan="3"><?php echo $tblTitle ?></th>
                <th align="center" class="icons"><img src="/stfile/img/questions/user-icon.png"></th>
                <th align="center" class="icons"><img src="/stfile/img/questions/comment-icon.png"></th>
                <th align="center" class="icons"><img src="/stfile/img/questions/clock-icon.png"></th>
            </tr>
            <?php
                //Выводим короткие записи вопросов
                foreach($questions as $k => $v) {

                    if(!empty($questions[$k]['id_qfavorite'])) {
                        $favorite = 'favoriteChecked';
                    } else {
                        $favorite = '';
                    }

                    echo    '<tr>
                                <td class="tdFavorite-icon">
                                    <span class="favorite ' .$favorite .'"></span>
                                    <input type="hidden" value="' .$questions[$k]['id_question'] .'" name="hQuestionId" />
                                </td>
                                <td class="tdClosed-icon">';
                    if($questions[$k]['closed']) {
                        echo '<span title="Вопрос закрыт" class="closed-mini"></span>';
                    }

                    echo '</td>
                                <td>
                                    <a href="/questions/question/' .$questions[$k]['id_question'] .'">' .$questions[$k]['title'] .'</a>
                                    <span class="spnTags">';

                    // Вставляем категории
                    foreach($questions[$k][0] as $key => $val) {
                        echo '<a href="/questions/category/' .$questions[$k][0][$key]['id_subcategory'] .'" class="greenCat">' .$questions[$k][0][$key]['stitle'] .'</a>';
                    }

                    echo '</span></td>
                          <td class="username"><a href="">' .$questions[$k]['username'] .'</a></td>
                          <td class="answers">' .$questions[$k]['answers_count'] .'</td>
                          <td class="time">' .date('G:i',strtotime($questions[$k]['public_date'])) .'</td>
                          </tr>';
                }
            ?>
        </table>

        <!--Блок с пагинацией-->
        <div class="pagination">
            <ul>
            <?php
                /*$per_page = 'СКОЛЬКО НА СТРАНИЦУ ВЫВОДИТЬ НОВОСТЕЙ (INT)';
                $qcount = 'СКОЛЬКО ВСЕГО НОВОСТЕЙ (INT)';
                $curr_page = 'КАКАЯ ТЕКУЩАЯ СТРАНИЦА (INT)';
                $lnk = 'ССЫЛКА К КОТОРОЙ ПОТОМ БУДЕТ ПРИБАВЛЯТЬСЯ ЧИСЛО (STRING) НАПРИМЕР: /questions/all/closed/page-';
                $page_count = ceil($qcount/$per_page);
                if (($curr_page + 4) < $page_count) {
                    if ($curr_page <= 4) {
                        $page_end_border = 9;
                    } else {
                        $page_end_border = $curr_page + 4;
                    }
                } else {
                    $page_end_border = $page_count;
                }
                if ($curr_page > 4) {
                    if (($page_count - $curr_page) < 5 ) {
                        $page_start_border = $page_count - 9;
                    } else {
                        $page_start_border = $curr_page - 5;
                    }
                } else {
                    $page_start_border = 0;
                }

                if($page_count > 1) {
                    if($curr_page > 1) {
                        $some = $curr_page-1;
                        echo '<li><a href="'.$lnk .$some .'">«</a></li>';
                    }
                    for($i = $page_start_border; $i < $page_end_border; $i++) {
                        $temp = $i+1;
                        if($i == $page-1) {
                            echo '<li class="active"><a href="'.$lnk .$temp .'">' .$temp .'</a></li>';
                        } else {
                            echo '<li><a href="'.$lnk .$temp .'">' .$temp .'</a></li>';
                        }
                    }
                    if($curr_page < $page_count) {
                        $some = $curr_page+1;
                        echo '<li><a href="'.$lnk .$some .'">»</a></li>';
                    }
                }*/

                $per_page = $per_page;
                $page_count = ceil($qcount/$per_page);
                $curr_page = $page;
                if (($curr_page + 4) < $page_count) {
                    if ($curr_page <= 4) {
                        $page_end_border = 9;
                    } else {
                        $page_end_border = $curr_page + 4;
                    }
                } else {
                    $page_end_border = $page_count;
                }
                if ($curr_page > 4) {
                    if (($page_count - $curr_page) < 5 ) {
                        $page_start_border = $page_count - 9;
                    } else {
                        $page_start_border = $curr_page - 5;
                    }
                } else {
                    $page_start_border = 0;
                }

                if ($qtype == 'category') {
                    $lnk = '/questions/category/' .$cat_id .'/';
                } elseif ($qtype == 'opened') {
                    $lnk = '/questions/all/opened/';
                } elseif ($qtype == 'closed') {
                    $lnk = '/questions/all/closed/';
                } elseif ($qtype == 'any') {
                    $lnk = '/questions/all/any/';
                }
                if($page_count > 1) {
                    if($curr_page > 1) {
                        $some = $curr_page-1;
                        echo '<li><a href="'.$lnk .$some .'">«</a></li>';
                    } else {
                        echo '<li><a>«</a></li>';
                    }
                    for($i = $page_start_border; $i < $page_end_border; $i++) {
                        $temp = $i+1;
                        if($i == $page-1) {
                            echo '<li class="active"><a>' .$temp .'</a></li>';
                        } else {
                            echo '<li><a href="'.$lnk .$temp .'">' .$temp .'</a></li>';
                        }
                    }
                    if($curr_page < $page_count) {
                        $some = $curr_page+1;
                        echo '<li><a href="'.$lnk .$some .'">»</a></li>';
                    } else {
                        echo '<li><a>»</a></li>';
                    }
                }
           ?>
            </ul>
        </div>
    </div>




    <div class="shadowBlock" id="dvClosedQuestions" style="display: none;">
        <table cellpadding="0" cellspacing="0">
        </table>
    </div>

    </div>
</div>