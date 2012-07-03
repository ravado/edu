<?php defined('SYSPATH') or die('No direct script access.');

class Model_Product extends ORM{

    protected $_table_name = 'products';
    protected $_primary_key = 'id';
    protected $_has_many = array(
        'categories' => array(
            'model' => 'category',
            'foreign_key' => 'product_id',
            'through' => 'products_categories',
            'far_key' => 'category_id')
    );

}
