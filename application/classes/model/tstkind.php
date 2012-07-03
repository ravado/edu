<?php defined('SYSPATH') or die('No direct script access.');

class Model_TstKind extends ORM{

    protected $_table_name = 'tst_kinds';
    protected $_primary_key = 'id_kind';
    protected $_has_many = array(
        'tests' => array(
            'model' => 'ormtest',
            'foreign_key' => 'kind_id',
        )
    );

}
