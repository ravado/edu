<?php defined('SYSPATH') or die('No direct script access.');

class Model_Ormuser extends ORM{

    protected $_table_name = 'users';
    protected $_primary_key = 'id';
    protected $_has_many = array(
        'tests' => array(
            'model' => 'test',
            'foreign_key' => 'user_id'
        )
    );
}
