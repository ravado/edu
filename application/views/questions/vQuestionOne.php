<div id="dvContent">
    <div class="spnTitle Page">Вопросы и ответы: вопрос</div>

<!---->
<?php print_r($result['question'][0]); ?>

    <div class="dvSimilarQuestions shadowBlock"><h4 class="lenta">тут будет нечто</h4></div>

    <div class="dvQuestionAndAnswers">

        <div class="dvOneQuestion shadowBlock">
            <table cellspacing="0">
                <tr class="lenta">
                    <th class="lenta""><span class="favorite"></span><span class="oneQuestion"><?php echo $result['question'][0]['title'] ?></span></th>
                </tr>
                <tr>
                    <td>
                        <table>
                            <tr>

                                <td colspan="2">
                                    <a href="" class="username"><?php echo $result['question'][0]['username'] ?></a>
                                    <span class="time"><?php echo $result['question'][0]['public_date']?></span>
                                </td>
                            </tr>
                            <tr>
                                <!-- Голосовалочка -->
                                <td class="tdVote">
                                    <div class="dvVote">
                                        <a class="voteUp-off"></a>
                                        <span class="spnVotesCount"><?php echo $result['question'][0]['rating'] ?></span>
                                        <a class="voteDown-off"></a>
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
                                    <?php $tags = '';
                                    $countTags = 0;
                                    $pieces = explode(",", $result['question'][0]['tags']);
                                    foreach ($pieces as $k=>$v) {
                                    $tags .= '<a href="" class="greenCat">' .$pieces[$k] .'</a>';
                                        $countTags++;                                        
                                    } ?>
                                    <span class="catLinks"><?php if($countTags > 1) echo 'Категории:'; else echo 'Категория' ?></span> <span class="spnTags">
                                    <?php
                                        echo $tags;
                                    ?>
                                </span></td>
                            </tr>
                            <tr style="display: ;">
                                <td colspan="2">
                                    <?php if($userAuth) {
                                            echo '<form class="frmAddAnswer">
                                                <table>
                                                    <tr><td><textarea name="answer_text" class="inpColor"></textarea>
                                                    <input type="hidden" id="inpQuestionID" name="id_question" value="' .$result['question'][0]['id_question'] .'" ></td></tr>
                                                    <tr>
                                                        <td>
                                                            <div>
                                                                <a class="btnSilver postAnswer">Добавить ответ</a>
                                                                <a class="btnSilver cancelAnswer">Отмена</a>
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
        <div class="dvAllAnswers">
<!--            <h4 class="lenta ">Ответы</h4>-->
            <?php
                if($userAuth) {
                    echo '<a class="btnSilver" id="btnGiveAnswer">Ответить</a>';
                } else {
                    echo '<a class="btnSilver" id="btnGiveAnswerNotAuth">Ответить</a>';
                }
            ?>
            <br />

            <table class="tblAnswers">
                <?php
                if( ($count = count($result['answers'])) == 0 ) {
                    echo '<p class="searchTitle"> Увы ответов на даный вопрос пока нет, станьте первым </p>';
                } else if($count > 0) {
                    $bestExist = false;
                    echo '<hr>';
                    // Ищем сразу есть ли лучший ответ и выводим его
                    foreach ($result['answers'] as $k=>$v) {
                        if ($result['answers'][$k]['best'] == true) {
                        echo '<tr>
                                <td class="bestAnswer-icon"><span class="bestAnswerLabel" title="лучший ответ"></span></td>
                                <td>
                                    <div class="shadowBlock dvBestAnswer">
                                        <table cellspacing="0">
                                            <tr>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td colspan="2">
                                                                <a href="" class="username">' .$result['answers'][$k]['username'] .'</a>
                                                                <span class="time">' .$result['answers'][$k]['public_date'] .'</span>
                                                                <span class="titleToBest">этот ответ выбран в качестве лучшего</span>
                                                                <input type="hidden" value="' .$result['answers'][$k]['id_answer'] .'">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <!-- Голосовалочка -->
                                                            <td class="tdVote">
                                                                <div class="dvVote">
                                                                    <a class="voteUp-off"></a>
                                                                    <span class="spnVotesCount">' .$result['answers'][$k]['rating'] .'</span>
                                                                    <a class="voteDown-off"></a>
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

                    if($bestExist == true ) {
                        $checkAsBest = '';
//                        echo 'best is true';
                    } else if($bestExist == false && $user_id == $result['question'][0]['id_user']) {
                        $checkAsBest = "<a class='checkAsBest'>Признать ответ лучшим</a>";
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
                            

                            
                            echo '<tr>
                    <td class="bestAnswer-icon">

                    </td>
                    <td>
                        <div class="shadowBlock ">
                            <table cellspacing="0" '.$isBadRating .'>
                                <tr>
                                    <td>
                                        <table>
                                            <tr>
                                                <td colspan="2">
                                                    <a href="" class="username">' .$result['answers'][$k]['username'] .'</a>
                                                    <span class="time">' .$result['answers'][$k]['public_date'] .'</span>
                                                    <input type="hidden" value="' .$result['answers'][$k]['id_answer'] .'">
                                                    ' .$checkAsBest .'
                                                </td>
                                            </tr>
                                            <tr>
                                                <!-- Голосовалочка -->
                                                <td class="tdVote">
                                                    <div class="dvVote">
                                                        <a class="voteUp-off"></a>
                                                        <span class="spnVotesCount">' .$result['answers'][$k]['rating'] .'</span>
                                                        <a class="voteDown-off"></a>
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