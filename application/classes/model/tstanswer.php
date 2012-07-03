<?php defined('SYSPATH') or die('No direct script access.');

class Model_Tstanswer extends ORM{

    protected $_table_name = 'tst_answers';
    protected $_primary_key = 'id_tst_answer';
    protected $_belongs_to = array(
        'question' => array(
            'model' => 'tstquestion',
            'foreign_key' => 'tst_question_id')
    );

    /*public function filters() {
        return array(
            'title' => array(
                array('addslashes'),
            ),
        );
    }*/
}
