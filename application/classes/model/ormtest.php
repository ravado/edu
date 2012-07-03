<?php defined('SYSPATH') or die('No direct script access.');

class Model_OrmTest extends ORM{

    protected $_table_name = 'tests';
    protected $_primary_key = 'id_test';
    protected $_belongs_to = array(
        'category' => array(
            'model' => 'tstcategory',
            'foreign_key' => 'category_id'
        ),
        'kind' => array(
            'model' => 'tstkind',
            'foreign_key' => 'kind_id'
        ),
        'user' => array(
            'model' => 'ormuser',
            'foreign_key' => 'user_id'
        )
    );

    protected $_has_many = array(
        'questions' => array(
            'model' => 'tstquestion',
            'foreign_key' => 'test_id')
    );

}
