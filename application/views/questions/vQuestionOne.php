<div id="dvContent">
    <div class="spnTitle Page">Вопросы и ответы: вопрос</div>
    <ul class="breadcrumb">
        <li><a href="/questions">главная ВиО</a><span class="divider">/</span></li>
        <li><a href="/questions/all/any">все вопросы</a><span class="divider">/</span></li>
        <li class="active"><a href="#">вопрос</a></li>
    </ul>
<!---->
<?php

    $voteClassDown = '';
    $voteClassUp = '';

    //Проверка голосовал ли этот человек уже
    if(!empty($result['question'][0]['value'])) {
        if($result['question'][0]['value'] == 1) {
            $voteClassUp = 'voteUp';
            $voteClassDown = '';
        } elseif ($result['question'][0]['value'] == -1) {
            $voteClassUp = '';
            $voteClassDown = 'voteDown';
        }
    }

//    foreach($similar as $k=>$v) {
//        print_r($similar[$k]);
//    }
?>

    <div class="dvSimilarQuestions shadowBlock"><h4 class="lenta">Похожие вопросы</h4>
        <?php
            if(!empty($similar)) {
                foreach($similar as $k=>$v) {
                    echo '<table style="width: 290px;">';
                    echo '<tr><td><a href="/questions/question/' .$similar[$k]['id_question'] .'">' .$similar[$k]['title'] .'</a></td></tr></table>';
                }
            }
        ?>
    </div>

    <div class="dvQuestionAndAnswers">

        <div class="dvOneQuestion shadowBlock">
            <table cellspacing="0" >
                <tr class="lenta">
                    <th class="lenta">
                        <table class="tblQuestionTitle">
                            <tr>
                                <td class="favorite-icon">
                                    <span class="favorite  <?php if ($result['favorite']) echo 'favoriteChecked' ?>"></span>
                                    <input type="hidden" id="hQuestionId" value="<?php echo $result['question'][0]['id_question']; ?>" >
                                </td>
                                <td>
                                    <span class="oneQuestion"><?php echo $result['question'][0]['title'] ?></span>
                                </td>
                            </tr>

                        </table>


                    </th>
                </tr>
                <tr>
                    <td>
                        <table>
                            <tr>

                                <td colspan="2" class="itemInfo">
                                    <a href="" class="username"><?php echo $result['question'][0]['username'] ?></a>
                                    <span class="time"><?php echo $result['question'][0]['public_date']?></span>
                                    <input type="hidden" class="hQAid" value="<?php echo $result['question'][0]['id_questions_and_answers']; ?>" >
                                </td>
                            </tr>
                            <tr>
                                <!-- Голосовалочка -->
                                <td class="tdVote">
                                    <div class="dvVote">
                                        <a class="voteUp-off <?php echo $voteClassUp; ?>"></a>
                                        <div class="spnVotesCount dvCount"><div class="numCount"><?php echo $result['question'][0]['rating'] ?></div></div>
                                        <a class="voteDown-off <?php echo $voteClassDown; ?>"></a>
                                    </div>
                                </td>
                                <td>
                                    <p><?php
                                            if($result['question'][0]['full'] == '' || empty($result['question'][0]['full'])) {
                                                echo $result['question'][0]['title'] ;
                                            } else {
                                                echo $result['question'][0]['full'] ;
                                            }
                                       ?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <?php
                                    $tags = '';
                                    $countTags = 0;
                                    $question = $result['question'];

                                    foreach($question[1] as $key=>$val) {
                                        $tags .= '<a href="/questions/category/' .$question[1][$key]['id_subcategory']  .'" class="greenCat">' .$question[1][$key]['stitle'] .'</a>';
                                        $countTags++;
                                    }
                                    ?>
                                    <span class="catLinks"><?php if($countTags > 1) echo 'Категории:'; else echo 'Категория' ?></span> <span class="spnTags">
                                    <?php
                                        echo $tags;
                                    ?>
                                </span></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="tdAddAnswer">
                                    <?php if($userAuth && $result['question'][0]['closed'] == false) {
                                            echo '<form class="frmAddAnswer">
                                                <table>
                                                    <tr><td><textarea name="answer_text" class="inpColor"></textarea>
                                                    <input type="hidden" id="inpQuestionID" name="id_question" value="' .$result['question'][0]['id_question'] .'" ></td></tr>
                                                    <tr>
                                                        <td>
                                                            <div>
                                                                <a class="btn btn-large postAnswer">Добавить ответ</a>
                                                                <a class="btn btn-large cancelAnswer">Отмена</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                                </form>';
                                        } ?>

                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
<!--            <div class="lenta"><h4>--><!--</h4></div>-->

<!--            asdad-->
        </div>
        <?php
        if($userAuth && $result['question'][0]['closed'] == false && $result['question'][0]['id_user'] != $user_id) {
            echo '<a class="btn" id="btnGiveAnswer">Добавить ответ</a>';
        } elseif(!$userAuth) {
            if ($result['question'][0]['closed']) {
                echo '<a class="btn hide" id="btnGiveAnswerNotAuth">Добавить ответ</a>';

            } else {
                echo '<a class="btn" id="btnGiveAnswerNotAuth">Добавить ответ</a>';
            }

        } elseif ($result['question'][0]['closed'] || $result['question'][0]['id_user'] == $user_id) {
            echo '<a class="btn hide" id="btnGiveAnswerNotAuth">Добавить ответ</a>';

        }
        ?>
        <div class="dvAllAnswers">
<!--            <h4 class="lenta ">Ответы</h4>-->

            <table class="tblAnswers">
                <?php
                if( ($count = count($result['answers'])) == 0 && $result['question'][0]['id_user'] != $user_id) {
                    echo '<p class="searchTitle"> Увы ответов на даный вопрос пока нет, станьте первым </p>';
                } else if($count > 0) {
                    $bestExist = false;
                    echo '<div class="ansCount"><h4>Ответов: ' .$count .'</h4></div>';



                    // Ищем сразу есть ли лучший ответ и выводим его
                    foreach ($result['answers'] as $k=>$v) {
                        if ($result['answers'][$k]['best'] == true) {

                            $voteClassDown = '';
                            $voteClassUp = '';
                            //Проверка голосовал ли этот человек уже
                            if(!empty($result['answers'][$k]['value'])) {
                                if($result['answers'][$k]['value'] == 1) {
                                    $voteClassUp = 'voteUp';
                                    $voteClassDown = '';
                                } elseif ($result['answers'][$k]['value'] == -1) {
                                    $voteClassUp = '';
                                    $voteClassDown = 'voteDown';
                                }
                            }

                        echo '<tr>
                                <td class="bestAnswer-icon"><span class="bestAnswerLabel" title="лучший ответ"></span></td>
                                <td>
                                    <div class="shadowBlock dvBestAnswer">
                                        <table cellspacing="0">
                                            <tr>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td colspan="2" class="itemInfo">
                                                                <a href="" class="username">' .$result['answers'][$k]['username'] .'</a>
                                                                <span class="time">' .$result['answers'][$k]['public_date'] .'</span>
                                                                <span class="titleToBest">этот ответ выбран в качестве лучшего</span>
                                                                <input type="hidden" class="hAnswerId" value="' .$result['answers'][$k]['id_answer'] .'">
                                                                <input type="hidden" class="hQAid" value="' .$result['answers'][$k]['id_questions_and_answers'] .'" >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <!-- Голосовалочка -->
                                                            <td class="tdVote">
                                                                <div class="dvVote">
                                                                    <a class="voteUp-off ' .$voteClassUp .' "></a>
                                                                    <div class="spnVotesCount dvCount"><div class="numCount">' .$result['answers'][$k]['rating'] .'</div></div>
                                                                    <a class="voteDown-off ' .$voteClassDown .' "></a>
                                                                </div>
                                                            </td>
                                                            <td class="tdAnswerText" ><p>' .$result['answers'][$k]['answer_text'] .'</p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                            </tr>';
                            $bestExist = true;
                            break;
                        }

                   }

                    $checkAsBest = '';
                    if($bestExist == true ) {
                        $checkAsBest = '';
//                        echo 'best is true';
                    } else if($bestExist == false && !empty($user_id)) {
                        if($user_id == $result['question'][0]['id_user']) {
                        $checkAsBest = "<a class='checkAsBest'>Признать ответ лучшим</a>";
                        }
//                        echo 'best is not true';
                    } else {
                        $checkAsBest ='';
                    }

                    //Теперь выводим все остальные ответы
                    foreach ($result['answers'] as $k=>$v) {
                        if ($result['answers'][$k]['best'] == false) {
                            if($result['answers'][$k]['rating'] < -10) {
                                $isBadRating = 'class="badRating"';
                            } else {
                                $isBadRating = '';
                            }

                            $voteClassDown = '';
                            $voteClassUp = '';
                            //Проверка голосовал ли этот человек уже
                            if(!empty($result['answers'][$k]['value'])) {
                                if($result['answers'][$k]['value'] == 1) {
                                    $voteClassUp = 'voteUp';
                                    $voteClassDown = '';
                                } elseif ($result['answers'][$k]['value'] == -1) {
                                    $voteClassUp = '';
                                    $voteClassDown = 'voteDown';
                                }
                            }

                            
                            echo '<tr>
                    <td class="bestAnswer-icon">

                    </td>
                    <td>
                        <div class="lineBlock ">
                            <table cellspacing="0" '.$isBadRating .'>
                                <tr>
                                    <td>
                                        <table>
                                            <tr>
                                                <td colspan="2" class="itemInfo">
                                                    <a href="" class="username">' .$result['answers'][$k]['username'] .'</a>
                                                    <span class="time">' .$result['answers'][$k]['public_date'] .'</span>
                                                    <input type="hidden" class="hAnswerId" value="' .$result['answers'][$k]['id_answer'] .'">
                                                    <input type="hidden" class="hQAid" value="' .$result['answers'][$k]['id_questions_and_answers'] .'" >
                                                    ' .$checkAsBest .'
                                                </td>
                                            </tr>
                                            <tr>
                                                <!-- Голосовалочка -->
                                                <td class="tdVote">
                                                    <div class="dvVote">
                                                        <a class="voteUp-off ' .$voteClassUp .' "></a>
                                                        <div class="spnVotesCount dvCount"><div class="numCount">' .$result['answers'][$k]['rating'] .'</div></div>
                                                        <a class="voteDown-off ' .$voteClassDown .' "></a>
                                                    </div>
                                                </td>
                                                <td class="tdAnswerText">
                                                    <p>' .$result['answers'][$k]['answer_text'] .'</p>
                                                </td>
                                            </tr>

                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>';
                        }
                    }
                }
                ?>


            </table>
        </div>
    </div>

</div>