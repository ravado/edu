<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-27 10:41:43 --- ERROR: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 11 ]
2012-03-27 10:41:43 --- STRACE: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 11 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 11, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(34): Model_Mtests->addNewTest(Array)
#2 [internal function]: Controller_Tests_Tests->action_created()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-27 10:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-27 10:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-27 10:45:31 --- ERROR: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 16 ]
2012-03-27 10:45:31 --- STRACE: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 16 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 16, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(34): Model_Mtests->addNewTest(Array)
#2 [internal function]: Controller_Tests_Tests->action_created()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-27 10:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-27 10:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-27 10:50:14 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH/orm/classes/kohana/orm.php [ 315 ]
2012-03-27 10:50:14 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH/orm/classes/kohana/orm.php [ 315 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge() [...', '/Users/admin/Dr...', 315, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(315): array_merge(Array, 'test')
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#3 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#4 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(584): Kohana_ORM::factory('tstquestion')
#5 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(10): Kohana_ORM->__get('questions')
#6 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(34): Model_Mtests->addNewTest(Array)
#7 [internal function]: Controller_Tests_Tests->action_created()
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#12 {main}
2012-03-27 10:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-27 10:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-27 10:50:52 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH/orm/classes/kohana/orm.php [ 315 ]
2012-03-27 10:50:52 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH/orm/classes/kohana/orm.php [ 315 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge() [...', '/Users/admin/Dr...', 315, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(315): array_merge(Array, 'test')
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#3 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#4 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(584): Kohana_ORM::factory('tstquestion')
#5 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(10): Kohana_ORM->__get('questions')
#6 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(34): Model_Mtests->addNewTest(Array)
#7 [internal function]: Controller_Tests_Tests->action_created()
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#12 {main}
2012-03-27 10:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-27 10:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-27 10:50:57 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH/orm/classes/kohana/orm.php [ 315 ]
2012-03-27 10:50:57 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH/orm/classes/kohana/orm.php [ 315 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge() [...', '/Users/admin/Dr...', 315, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(315): array_merge(Array, 'test')
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#3 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#4 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(584): Kohana_ORM::factory('tstquestion')
#5 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(10): Kohana_ORM->__get('questions')
#6 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(34): Model_Mtests->addNewTest(Array)
#7 [internal function]: Controller_Tests_Tests->action_created()
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#12 {main}
2012-03-27 10:50:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-27 10:50:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-27 10:52:57 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH/orm/classes/kohana/orm.php [ 315 ]
2012-03-27 10:52:57 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH/orm/classes/kohana/orm.php [ 315 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge() [...', '/Users/admin/Dr...', 315, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(315): array_merge(Array, 'test')
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#3 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#4 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(584): Kohana_ORM::factory('tstquestion')
#5 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(10): Kohana_ORM->__get('questions')
#6 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(34): Model_Mtests->addNewTest(Array)
#7 [internal function]: Controller_Tests_Tests->action_created()
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#12 {main}
2012-03-27 10:52:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-27 10:52:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-27 10:54:49 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH/orm/classes/kohana/orm.php [ 315 ]
2012-03-27 10:54:49 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH/orm/classes/kohana/orm.php [ 315 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge() [...', '/Users/admin/Dr...', 315, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(315): array_merge(Array, 'test')
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#3 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#4 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(584): Kohana_ORM::factory('tstquestion')
#5 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(10): Kohana_ORM->__get('questions')
#6 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(34): Model_Mtests->addNewTest(Array)
#7 [internal function]: Controller_Tests_Tests->action_created()
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#12 {main}
2012-03-27 10:54:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-27 10:54:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-27 10:56:19 --- ERROR: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 22 ]
2012-03-27 10:56:19 --- STRACE: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 22 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(22): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 22, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(34): Model_Mtests->addNewTest(Array)
#2 [internal function]: Controller_Tests_Tests->action_created()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-27 10:56:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-27 10:56:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-27 11:02:30 --- ERROR: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 25 ]
2012-03-27 11:02:30 --- STRACE: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 25 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(25): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 25, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(34): Model_Mtests->addNewTest(Array)
#2 [internal function]: Controller_Tests_Tests->action_created()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-27 11:02:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-27 11:02:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-27 11:02:38 --- ERROR: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 25 ]
2012-03-27 11:02:38 --- STRACE: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 25 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(25): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 25, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(34): Model_Mtests->addNewTest(Array)
#2 [internal function]: Controller_Tests_Tests->action_created()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-27 11:02:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-27 11:02:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-27 11:16:12 --- ERROR: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 29 ]
2012-03-27 11:16:12 --- STRACE: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 29 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(29): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 29, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(34): Model_Mtests->addNewTest(Array)
#2 [internal function]: Controller_Tests_Tests->action_created()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-27 11:16:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-27 11:16:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-27 11:24:08 --- ERROR: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 41 ]
2012-03-27 11:24:08 --- STRACE: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 41 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(41): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 41, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(34): Model_Mtests->addNewTest(Array)
#2 [internal function]: Controller_Tests_Tests->action_created()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-27 11:24:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-27 11:24:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-27 11:25:52 --- ERROR: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 43 ]
2012-03-27 11:25:52 --- STRACE: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 43 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(43): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 43, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(34): Model_Mtests->addNewTest(Array)
#2 [internal function]: Controller_Tests_Tests->action_created()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-27 11:25:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-27 11:25:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}