<div id="dvContent">
    <div class="tstOneTestBlock">
        <ul class="breadcrumb">
            <li>
                <a href="/">Главная</a> <span class="divider">/</span>
            </li>
            <li>
                <a href="/tests">Тесты</a> <span class="divider">/</span>
            </li>
            <li class="active"><?php echo $test->title;?></li>
        </ul>

    <?php
//        echo $message;
//        $some[3][44][66] = 'ololo';
//        echo key($some[3]);
        $count = sizeof($test->questions->find_all()->as_array());
        foreach($test->questions->find_all() as $key => $question) {
            if($key == ($number - 1)) {
                if( ($number+1) <= $count) { echo '<form method="POST" id="frmOneTest" action="/tests/' .$test_kind.'/' .$test_id .'/' .($number+1) .'">'; }
                else { echo '<form method="POST" id="frmOneTest" action="/tests/' .$test_kind.'/' .$test_id .'/result">'; }
                echo '<input type="hidden" id="testId" name="id_test" value="' .$test_id .'">';
                echo '<input type="hidden" id="testKind" name="test_kind" value="' .$test_kind .'">';
                echo '<input type="hidden" name="id_question" value="' .$question->id_tst_question .'">';
                echo '<input type="hidden" id="currentQuestion" name="current_question" value="' .$number .'">';
                echo '<input type="hidden" id="countQuestions" name="count" value="' .$count .'">';
                echo '<input type="hidden" id="kindQuestions" name="kind" value="' .$question->is_text .'">';
                echo '<div class="tstQuestionBlock"><h3>Вопрос №' .$number .' из ' .$count.'.</h3>
                    ' .$question->title .'</div>';
                echo '<div class="tstVariantsBlock">';
                echo '<table class="table tstTableVars"><tbody>';
                $correct_answers_count = 0;
                foreach ($question->answers->find_all() as $variant) {
                    if($variant->correct == 1) {
                        $correct_answers_count++;
                    }
                }
                
                if($question->is_text == 0) {
                    foreach ($question->answers->find_all() as $variant) {
                        $additional_tags = '';
                        if($correct_answers_count > 1) {
                            $additional_tags = '<input type="checkbox" name="variants[]" value="' .$variant->id_tst_answer .'">';
                        } else {
                            $additional_tags = '<input type="radio" name="variants[]" value="' .$variant->id_tst_answer .'">';
                        }
                        echo '<tr>
                            <td class="tdCheck">' .$additional_tags .'</td>
                            <td class="tdVariants">' .$variant->title .'</td>
                        </tr>';
                    }
                } elseif($question->is_text == 1) {
                    echo '<tr><td><input type="text" name="variants" placeholder="Введите ответ"></td></tr>';
                }
                echo '</tbody></table></div>';
                echo '<div class="tstNavBlock"><input type="submit" class="btn btn-large" value="Ответить">';




                echo '</div></form>';

            }

        }

    ?>

    </div>
</div>
