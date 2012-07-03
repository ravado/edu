<?php defined('SYSPATH') or die('No direct script access.');

class Model_OrmTstSubCategory extends ORM{

    protected $_table_name = 'tst_subcategories';
    protected $_primary_key = 'id_subcategory';

    protected $_belongs_to = array(
        'category'    => array(
            'model'         => 'ormtstcategory',
            'foreign_key' => 'category_id',
        )
    );

    protected $_has_many = array(
        'tests' => array(
            'model' => 'ormtest',
            'foreign_key' => 'subcategory_id')
    );

}
