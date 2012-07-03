<?php defined('SYSPATH') or die('No direct script access.');

class Model_OrmTstCategory extends ORM{

    protected $_table_name = 'tst_categories';
    protected $_primary_key = 'id_category';
    protected $_has_many = array(
        'subcategories' => array(
            'model' => 'ormtstsubcategory',
            'foreign_key' => 'category_id'
        ),
    );


}
