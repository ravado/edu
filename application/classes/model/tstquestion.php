<?php defined('SYSPATH') or die('No direct script access.');

class Model_Tstquestion extends ORM{

    protected $_table_name = 'tst_questions';
    protected $_primary_key = 'id_tst_question';
    protected $_belongs_to = array(
        'test' => array(
            'model' => 'ormtest',
            'foreign_key' => 'test_id')
        );
    protected $_has_many = array(
        'answers' => array(
            'model' => 'tstanswer',
            'foreign_key' => 'tst_question_id')
    );

}
