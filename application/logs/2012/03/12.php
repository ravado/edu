<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-12 12:42:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/model/category.php [ 14 ]
2012-03-12 12:42:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/model/category.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-12 12:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-12 12:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 12:55:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-03-12 12:55:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-12 12:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-12 12:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 12:55:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_Orm/category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-03-12 12:55:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_Orm/category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-12 12:55:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-12 12:55:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 12:55:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_Orm_category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-03-12 12:55:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_Orm_category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-12 12:55:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-12 12:55:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 12:56:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_Orm|category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-03-12 12:56:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_Orm|category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-12 12:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-12 12:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 12:56:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_Orm\category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-03-12 12:56:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_Orm\category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-12 12:56:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-12 12:56:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 14:33:43 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.test' doesn't exist [ SHOW FULL COLUMNS FROM `test` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-03-12 14:33:43 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.test' doesn't exist [ SHOW FULL COLUMNS FROM `test` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Volumes/STOREDGE/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('test')
#2 /Volumes/STOREDGE/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /Volumes/STOREDGE/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /Volumes/STOREDGE/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /Volumes/STOREDGE/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(1)
#6 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/testorm/testorm.php(10): Kohana_ORM::factory('test', 1)
#7 [internal function]: Controller_Testorm_Testorm->action_index()
#8 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#9 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#12 {main}
2012-03-12 14:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-12 14:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 14:45:03 --- ERROR: Kohana_Exception [ 0 ]: The category property does not exist in the Model_Test class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-03-12 14:45:03 --- STRACE: Kohana_Exception [ 0 ]: The category property does not exist in the Model_Test class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/testorm/testorm.php(11): Kohana_ORM->__get('category')
#1 [internal function]: Controller_Testorm_Testorm->action_index()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-12 14:45:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-12 14:45:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 14:45:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_Tst_category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-03-12 14:45:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_Tst_category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-12 14:45:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-12 14:45:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 14:47:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_Tstcategory' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-03-12 14:47:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_Tstcategory' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-12 14:47:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-12 14:47:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 14:48:44 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tst_category ~ APPPATH/classes/controller/testorm/testorm.php [ 11 ]
2012-03-12 14:48:44 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tst_category ~ APPPATH/classes/controller/testorm/testorm.php [ 11 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/testorm/testorm.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/STORED...', 11, Array)
#1 [internal function]: Controller_Testorm_Testorm->action_index()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-12 14:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-12 14:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 15:03:05 --- ERROR: Kohana_Exception [ 0 ]: The tests property does not exist in the Model_Category class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-03-12 15:03:05 --- STRACE: Kohana_Exception [ 0 ]: The tests property does not exist in the Model_Category class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/testorm/testorm.php(16): Kohana_ORM->__get('tests')
#1 [internal function]: Controller_Testorm_Testorm->action_index()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-12 15:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-12 15:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 15:03:21 --- ERROR: Kohana_Exception [ 0 ]: The tests property does not exist in the Model_Category class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-03-12 15:03:21 --- STRACE: Kohana_Exception [ 0 ]: The tests property does not exist in the Model_Category class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/testorm/testorm.php(16): Kohana_ORM->__get('tests')
#1 [internal function]: Controller_Testorm_Testorm->action_index()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-12 15:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-12 15:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 15:03:34 --- ERROR: Kohana_Exception [ 0 ]: The test property does not exist in the Model_Category class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-03-12 15:03:34 --- STRACE: Kohana_Exception [ 0 ]: The test property does not exist in the Model_Category class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/testorm/testorm.php(16): Kohana_ORM->__get('test')
#1 [internal function]: Controller_Testorm_Testorm->action_index()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-12 15:03:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-12 15:03:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 15:04:29 --- ERROR: Kohana_Exception [ 0 ]: The tests property does not exist in the Model_Category class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-03-12 15:04:29 --- STRACE: Kohana_Exception [ 0 ]: The tests property does not exist in the Model_Category class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/testorm/testorm.php(16): Kohana_ORM->__get('tests')
#1 [internal function]: Controller_Testorm_Testorm->action_index()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-12 15:04:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-12 15:04:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 18:12:58 --- ERROR: ErrorException [ 1 ]: Call to a member function pk() on a non-object ~ MODPATH/orm/classes/kohana/orm.php [ 675 ]
2012-03-12 18:12:58 --- STRACE: ErrorException [ 1 ]: Call to a member function pk() on a non-object ~ MODPATH/orm/classes/kohana/orm.php [ 675 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-12 18:12:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-12 18:12:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 18:16:38 --- ERROR: ErrorException [ 1 ]: Call to a member function where() on a non-object ~ APPPATH/classes/controller/testorm/testorm.php [ 13 ]
2012-03-12 18:16:38 --- STRACE: ErrorException [ 1 ]: Call to a member function where() on a non-object ~ APPPATH/classes/controller/testorm/testorm.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-12 18:16:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-12 18:16:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 18:17:28 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH/database/classes/kohana/database.php [ 456 ]
2012-03-12 18:17:28 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH/database/classes/kohana/database.php [ 456 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/modules/database/classes/kohana/database.php(456): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/STORED...', 456, Array)
#1 /Volumes/STOREDGE/Dropbox/sites/edu/modules/database/classes/kohana/database/query/builder/insert.php(140): Kohana_Database->quote(Object(Database_MySQL_Result))
#2 /Volumes/STOREDGE/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(228): Kohana_Database_Query_Builder_Insert->compile(Object(Database_MySQL))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#5 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/testorm/testorm.php(14): Kohana_ORM->save()
#6 [internal function]: Controller_Testorm_Testorm->action_index()
#7 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#8 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-12 18:17:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-12 18:17:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 18:18:21 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id_category ~ APPPATH/classes/controller/testorm/testorm.php [ 13 ]
2012-03-12 18:18:21 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id_category ~ APPPATH/classes/controller/testorm/testorm.php [ 13 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/testorm/testorm.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/STORED...', 13, Array)
#1 [internal function]: Controller_Testorm_Testorm->action_index()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-12 18:18:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-12 18:18:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 18:19:00 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/controller/testorm/testorm.php [ 13 ]
2012-03-12 18:19:00 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/controller/testorm/testorm.php [ 13 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/testorm/testorm.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/STORED...', 13, Array)
#1 [internal function]: Controller_Testorm_Testorm->action_index()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-12 18:19:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-12 18:19:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 18:31:19 --- ERROR: ErrorException [ 1 ]: Call to undefined function as_array() ~ APPPATH/classes/controller/testorm/testorm.php [ 11 ]
2012-03-12 18:31:19 --- STRACE: ErrorException [ 1 ]: Call to undefined function as_array() ~ APPPATH/classes/controller/testorm/testorm.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-12 18:31:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-12 18:31:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 18:32:10 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id_category ~ APPPATH/classes/controller/testorm/testorm.php [ 12 ]
2012-03-12 18:32:10 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id_category ~ APPPATH/classes/controller/testorm/testorm.php [ 12 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/testorm/testorm.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/STORED...', 12, Array)
#1 [internal function]: Controller_Testorm_Testorm->action_index()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-12 18:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-12 18:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 18:35:32 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$title ~ APPPATH/classes/controller/testorm/testorm.php [ 12 ]
2012-03-12 18:35:32 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$title ~ APPPATH/classes/controller/testorm/testorm.php [ 12 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/testorm/testorm.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/STORED...', 12, Array)
#1 [internal function]: Controller_Testorm_Testorm->action_index()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-12 18:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-12 18:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 18:36:55 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tstcategory ~ APPPATH/classes/controller/testorm/testorm.php [ 12 ]
2012-03-12 18:36:55 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tstcategory ~ APPPATH/classes/controller/testorm/testorm.php [ 12 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/testorm/testorm.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/STORED...', 12, Array)
#1 [internal function]: Controller_Testorm_Testorm->action_index()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-12 18:36:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-12 18:36:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 19:37:04 --- ERROR: Kohana_Exception [ 0 ]: The kind_id property does not exist in the Model_TstCategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-03-12 19:37:04 --- STRACE: Kohana_Exception [ 0 ]: The kind_id property does not exist in the Model_TstCategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/model/mtests.php(13): Kohana_ORM->__get('kind_id')
#1 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/testorm/testorm.php(31): Model_Mtests->addNewTest(Array)
#2 [internal function]: Controller_Testorm_Testorm->action_index()
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-12 19:37:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-12 19:37:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 19:38:22 --- ERROR: Kohana_Exception [ 0 ]: The kind_id property does not exist in the Model_TstKind class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-03-12 19:38:22 --- STRACE: Kohana_Exception [ 0 ]: The kind_id property does not exist in the Model_TstKind class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/model/mtests.php(13): Kohana_ORM->__get('kind_id')
#1 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/testorm/testorm.php(31): Model_Mtests->addNewTest(Array)
#2 [internal function]: Controller_Testorm_Testorm->action_index()
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-12 19:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-12 19:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 19:41:55 --- ERROR: Kohana_Exception [ 0 ]: The id property does not exist in the Model_TstCategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-03-12 19:41:55 --- STRACE: Kohana_Exception [ 0 ]: The id property does not exist in the Model_TstCategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/model/mtests.php(9): Kohana_ORM->__get('id')
#1 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/testorm/testorm.php(31): Model_Mtests->addNewTest(Array)
#2 [internal function]: Controller_Testorm_Testorm->action_index()
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-12 19:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-12 19:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}