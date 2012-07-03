<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-12 00:27:50 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tests ~ APPPATH/classes/model/mtests.php [ 413 ]
2012-05-12 00:27:50 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tests ~ APPPATH/classes/model/mtests.php [ 413 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(413): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/admin/Dr...', 413, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(70): Model_Mtests->getOneZnoTest('1')
#2 [internal function]: Controller_Tests_Tests->action_zno()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-12 00:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-12 00:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-12 00:30:14 --- ERROR: Kohana_Exception [ 0 ]: The tests property does not exist in the Model_OrmTstCategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-05-12 00:30:14 --- STRACE: Kohana_Exception [ 0 ]: The tests property does not exist in the Model_OrmTstCategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(413): Kohana_ORM->__get('tests')
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(70): Model_Mtests->getOneZnoTest('1')
#2 [internal function]: Controller_Tests_Tests->action_zno()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-12 00:30:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-12 00:30:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-12 00:36:49 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/mtests.php [ 414 ]
2012-05-12 00:36:49 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/mtests.php [ 414 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(414): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/admin/Dr...', 414, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(70): Model_Mtests->getOneZnoTest('1')
#2 [internal function]: Controller_Tests_Tests->action_zno()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-12 00:36:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-12 00:36:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-12 00:37:39 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/mtests.php [ 415 ]
2012-05-12 00:37:39 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/mtests.php [ 415 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(415): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/admin/Dr...', 415, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(70): Model_Mtests->getOneZnoTest('1')
#2 [internal function]: Controller_Tests_Tests->action_zno()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-12 00:37:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-12 00:37:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-12 00:40:23 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/mtests.php [ 414 ]
2012-05-12 00:40:23 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/mtests.php [ 414 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(414): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/admin/Dr...', 414, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(70): Model_Mtests->getOneZnoTest('1')
#2 [internal function]: Controller_Tests_Tests->action_zno()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-12 00:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-12 00:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-12 00:40:44 --- ERROR: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_OrmTstSubCategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-05-12 00:40:44 --- STRACE: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_OrmTstSubCategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(415): Kohana_ORM->__get('subcategories')
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(70): Model_Mtests->getOneZnoTest('1')
#2 [internal function]: Controller_Tests_Tests->action_zno()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-12 00:40:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-12 00:40:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-12 00:41:07 --- ERROR: Kohana_Exception [ 0 ]: The subcategory property does not exist in the Model_OrmTstCategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-05-12 00:41:07 --- STRACE: Kohana_Exception [ 0 ]: The subcategory property does not exist in the Model_OrmTstCategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(414): Kohana_ORM->__get('subcategory')
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(70): Model_Mtests->getOneZnoTest('1')
#2 [internal function]: Controller_Tests_Tests->action_zno()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-12 00:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-12 00:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-12 00:41:54 --- ERROR: Kohana_Exception [ 0 ]: The subcategory property does not exist in the Model_OrmTstSubCategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-05-12 00:41:54 --- STRACE: Kohana_Exception [ 0 ]: The subcategory property does not exist in the Model_OrmTstSubCategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(415): Kohana_ORM->__get('subcategory')
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(70): Model_Mtests->getOneZnoTest('1')
#2 [internal function]: Controller_Tests_Tests->action_zno()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-12 00:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-12 00:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-12 00:51:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: test_id ~ APPPATH/classes/controller/tests/tests.php [ 69 ]
2012-05-12 00:51:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: test_id ~ APPPATH/classes/controller/tests/tests.php [ 69 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(69): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 69, Array)
#1 [internal function]: Controller_Tests_Tests->action_zno()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-12 00:51:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-12 00:51:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-12 00:52:02 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subcat_english' in 'where clause' [ SELECT `ormtest`.* FROM `tests` AS `ormtest` WHERE `ormtest`.`subcategory_id` = '6' AND `subcat_english` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-05-12 00:52:02 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subcat_english' in 'where clause' [ SELECT `ormtest`.* FROM `tests` AS `ormtest` WHERE `ormtest`.`subcategory_id` = '6' AND `subcat_english` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormtest...', 'Model_OrmTest', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(415): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(70): Model_Mtests->getOneZnoTest('1')
#5 [internal function]: Controller_Tests_Tests->action_zno()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-05-12 00:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-12 00:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-12 00:52:16 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subcat_english' in 'where clause' [ SELECT `ormtest`.* FROM `tests` AS `ormtest` WHERE `ormtest`.`subcategory_id` = '6' AND `subcat_english` = 'sa' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-05-12 00:52:16 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subcat_english' in 'where clause' [ SELECT `ormtest`.* FROM `tests` AS `ormtest` WHERE `ormtest`.`subcategory_id` = '6' AND `subcat_english` = 'sa' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormtest...', 'Model_OrmTest', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(415): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(70): Model_Mtests->getOneZnoTest('1')
#5 [internal function]: Controller_Tests_Tests->action_zno()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-05-12 00:52:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-12 00:52:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-12 00:55:17 --- ERROR: Kohana_Exception [ 0 ]: The find_all property does not exist in the Model_OrmTest class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-05-12 00:55:17 --- STRACE: Kohana_Exception [ 0 ]: The find_all property does not exist in the Model_OrmTest class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(415): Kohana_ORM->__get('find_all')
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(70): Model_Mtests->getOneZnoTest('physics')
#2 [internal function]: Controller_Tests_Tests->action_zno()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-12 00:55:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-12 00:55:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-12 01:02:41 --- ERROR: Kohana_Exception [ 0 ]: The id property does not exist in the Model_OrmTest class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-05-12 01:02:41 --- STRACE: Kohana_Exception [ 0 ]: The id property does not exist in the Model_OrmTest class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(415): Kohana_ORM->__get('id')
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(70): Model_Mtests->getOneZnoTest('physics')
#2 [internal function]: Controller_Tests_Tests->action_zno()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-12 01:02:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-12 01:02:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-12 01:07:20 --- ERROR: Kohana_Exception [ 0 ]: The loaded property does not exist in the Model_OrmTest class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-05-12 01:07:20 --- STRACE: Kohana_Exception [ 0 ]: The loaded property does not exist in the Model_OrmTest class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(415): Kohana_ORM->__get('loaded')
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(70): Model_Mtests->getOneZnoTest('physics')
#2 [internal function]: Controller_Tests_Tests->action_zno()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-12 01:07:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-12 01:07:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-12 01:07:50 --- ERROR: Kohana_Exception [ 0 ]: The loaded property does not exist in the Model_OrmTest class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-05-12 01:07:50 --- STRACE: Kohana_Exception [ 0 ]: The loaded property does not exist in the Model_OrmTest class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(415): Kohana_ORM->__get('loaded')
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(70): Model_Mtests->getOneZnoTest('physics')
#2 [internal function]: Controller_Tests_Tests->action_zno()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-12 01:07:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-12 01:07:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-12 01:07:52 --- ERROR: Kohana_Exception [ 0 ]: The loaded property does not exist in the Model_OrmTest class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-05-12 01:07:52 --- STRACE: Kohana_Exception [ 0 ]: The loaded property does not exist in the Model_OrmTest class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(415): Kohana_ORM->__get('loaded')
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(70): Model_Mtests->getOneZnoTest('physics')
#2 [internal function]: Controller_Tests_Tests->action_zno()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-12 01:07:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-12 01:07:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-12 01:15:34 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php on line 72 and defined ~ SYSPATH/classes/kohana/view.php [ 28 ]
2012-05-12 01:15:34 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php on line 72 and defined ~ SYSPATH/classes/kohana/view.php [ 28 ]
--
#0 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/admin/Dr...', 28, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(72): Kohana_View::factory('tests/vOneTest', Object(Model_OrmTest))
#2 [internal function]: Controller_Tests_Tests->action_zno()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-12 01:15:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-12 01:15:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}