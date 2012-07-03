<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-11 23:16:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_Test' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-05-11 23:16:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_Test' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-11 23:16:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-11 23:16:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-11 23:16:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_Test' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-05-11 23:16:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_Test' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-11 23:16:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-11 23:16:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-11 23:17:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test/278 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-11 23:17:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL test/278 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-11 23:17:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-11 23:17:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-11 23:27:26 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Tests_Tests::action_zno() ~ APPPATH/classes/controller/tests/tests.php [ 65 ]
2012-05-11 23:27:26 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Tests_Tests::action_zno() ~ APPPATH/classes/controller/tests/tests.php [ 65 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(65): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/admin/Dr...', 65, Array)
#1 [internal function]: Controller_Tests_Tests->action_zno()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-11 23:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-11 23:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-11 23:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/zno/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-11 23:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/zno/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-11 23:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-11 23:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-11 23:28:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/zno/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-11 23:28:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/zno/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-11 23:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-11 23:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-11 23:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/zno/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-11 23:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/zno/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-11 23:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-11 23:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-11 23:28:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/zno1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-11 23:28:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/zno1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-11 23:28:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-11 23:28:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-11 23:28:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/zno/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-11 23:28:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/zno/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-11 23:28:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-11 23:28:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-11 23:28:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/zno/222 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-11 23:28:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/zno/222 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-11 23:28:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-11 23:28:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-11 23:30:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/zno/222/asd ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-11 23:30:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/zno/222/asd ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-11 23:30:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-11 23:30:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-11 23:38:18 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$param ~ APPPATH/classes/controller/tests/tests.php [ 72 ]
2012-05-11 23:38:18 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$param ~ APPPATH/classes/controller/tests/tests.php [ 72 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(72): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/admin/Dr...', 72, Array)
#1 [internal function]: Controller_Tests_Tests->action_zno()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-11 23:38:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-11 23:38:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}