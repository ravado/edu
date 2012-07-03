<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-28 19:45:26 --- ERROR: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 44 ]
2012-03-28 19:45:26 --- STRACE: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 44 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(44): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 44, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(40): Model_Mtests->addNewTest(Array)
#2 [internal function]: Controller_Tests_Tests->action_created()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-28 19:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-28 19:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 19:46:14 --- ERROR: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 44 ]
2012-03-28 19:46:14 --- STRACE: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 44 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(44): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 44, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(40): Model_Mtests->addNewTest(Array)
#2 [internal function]: Controller_Tests_Tests->action_created()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-28 19:46:15 --- ERROR: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 44 ]
2012-03-28 19:46:15 --- STRACE: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 44 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(44): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 44, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(40): Model_Mtests->addNewTest(Array)
#2 [internal function]: Controller_Tests_Tests->action_created()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-28 20:02:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/done was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-03-28 20:02:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/done was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 20:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-28 20:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 20:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/done was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-03-28 20:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/done was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 20:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-28 20:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 20:04:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/done was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-03-28 20:04:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/done was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 20:05:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-28 20:05:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 20:53:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: time ~ APPPATH/classes/model/mtests.php [ 131 ]
2012-03-28 20:53:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: time ~ APPPATH/classes/model/mtests.php [ 131 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(131): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 131, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(40): Model_Mtests->addNewTest(Array)
#2 [internal function]: Controller_Tests_Tests->action_created()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-28 20:53:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-28 20:53:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 20:54:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: pass ~ APPPATH/classes/model/mtests.php [ 143 ]
2012-03-28 20:54:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: pass ~ APPPATH/classes/model/mtests.php [ 143 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(143): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 143, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(40): Model_Mtests->addNewTest(Array)
#2 [internal function]: Controller_Tests_Tests->action_created()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-28 20:54:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-28 20:54:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 20:55:09 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/model/mtests.php [ 173 ]
2012-03-28 20:55:09 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/model/mtests.php [ 173 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(173): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/admin/Dr...', 173, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(40): Model_Mtests->addNewTest(Array)
#2 [internal function]: Controller_Tests_Tests->action_created()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-28 20:55:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-28 20:55:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 21:18:54 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/model/mtests.php [ 173 ]
2012-03-28 21:18:54 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/model/mtests.php [ 173 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(173): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/admin/Dr...', 173, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(40): Model_Mtests->addNewTest(Array)
#2 [internal function]: Controller_Tests_Tests->action_created()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-28 21:18:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-28 21:18:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}