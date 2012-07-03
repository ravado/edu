<?php defined('SYSPATH') or die('No direct script access.');

class Model_TstCategory extends ORM{

    protected $_table_name = 'tst_categories';
    protected $_primary_key = 'id_category';
    protected $_has_many = array(
        'tests' => array(
            'model' => 'ormtest',
            'foreign_key' => 'category_id',
        )
    );

}
