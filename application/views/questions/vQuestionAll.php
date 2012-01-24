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

    <?php
        if ($qtype == 'closed') {
            echo '<p class="navigation"><a href="/questions">главная ВиО</a> => <a href="/questions/all">все вопросы</a> => закрытые</p>';
            $tblTitle = 'Закрытые';
        } elseif($qtype == 'opened') {
            echo '<p class="navigation"><a href="/questions">главная ВиО</a> => <a href="/questions/all">все вопросы</a> => открытые</p>';
            $tblTitle = 'Открытые';
        } elseif($qtype == '') {
            echo '<p class="navigation"><a href="/questions">главная ВиО</a> => все вопросы</p>';
            $tblTitle = 'Все';
        } elseif($qtype == 'category') {
            echo '<p class="navigation"><a href="/questions">главная ВиО</a> => <a href="/questions/all">все вопросы</a> => <a href="/questions/category">все категории</a>';
            if (!empty($questions)) {
                echo ' => ' .$questions[0]['stitle'] .'</p>';
                $tblTitle = $questions[0]['stitle'];
            }
        }

    ?>


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
                <th align="center" class="icons"><img src="../../../stfile/img/questions/user-icon.png"></th>
                <th align="center" class="icons"><img src="../../../stfile/img/questions/comment-icon.png"></th>
                <th align="center" class="icons"><img src="../../../stfile/img/questions/clock-icon.png"></th>
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
                        echo '<a href="/questions/all/category/' .$questions[$k][0][$key]['id_subcategory'] .'" class="greenCat">' .$questions[$k][0][$key]['stitle'] .'</a>';
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
        <div id="dvPagination">

            <?php
                for($i = 0; $i < ceil($qcount/3)+1; $i++) {
                    $temp = $i+1;
                    if ($qtype == 'category') {
                        $lnk = '/questions/all/category/';
                    } elseif ($qtype == 'opened') {
                        $lnk = '/questions/all/opened/';
                    } elseif ($qtype == 'closed') {
                        $lnk = '/questions/all/closed/';
                    } elseif ($qtype == '') {
                        $lnk = '/questions/all/';
                    }
                    if($i == $page-1) {
                        echo '<a href="'.$lnk .$temp .'" class="pagination selected">' .$temp .'</a>';
                    } else {
                        echo '<a href="' .$lnk .$temp .'" class="pagination">' .$temp .'</a>';
                    }
                }
            ?>

        </div>
    </div>


    <div class="shadowBlock" id="dvClosedQuestions" style="display: none;">
        <table cellpadding="0" cellspacing="0">
        </table>
    </div>

    </div>
</div>