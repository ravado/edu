<?php defined('SYSPATH') or die('No direct script access.');

class Model_OrmViOimpropertype extends ORM{

    protected $_table_name = 'vio_impropertypes';
    protected $_primary_key = 'id_impropertype';

    // Связь с другой таблицей через id текущей
    protected $_has_many = array(
        'impropers' => array( /* Алиас по которому можно будет вытягивать записи со связаной таблицы */
            'model' => 'ormvioimproper', /* Удаленная модель ОРМ */
            'foreign_key' => 'impropertype_id', /* Внешний ключ */
        )
    );

}
