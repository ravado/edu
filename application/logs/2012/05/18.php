<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-18 21:30:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_Test' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-05-18 21:30:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_Test' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-18 21:31:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_Test' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-05-18 21:31:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_Test' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-18 21:31:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_Test' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-05-18 21:31:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_Test' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-18 21:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test/283 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-18 21:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL test/283 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-18 21:36:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 21:36:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 21:47:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 21:47:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 21:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 21:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 21:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 21:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 21:52:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/2/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-18 21:52:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/2/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-18 21:52:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 21:52:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 21:52:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/2/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-18 21:52:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/2/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-18 21:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 21:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:04:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:04:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:08:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:08:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:08:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:08:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:14:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/2/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-18 22:14:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/2/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-18 22:18:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:18:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:18:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/2/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-18 22:18:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/2/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-18 22:18:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:18:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:18:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:18:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:18:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:18:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:19:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:19:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:20:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:20:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:21:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:21:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:21:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:21:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:22:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:22:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:22:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:22:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:23:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:23:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:23:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:23:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:23:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:23:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:28:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:28:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:28:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:28:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:30:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/tests/vOneTest.php [ 11 ]
2012-05-18 22:30:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/tests/vOneTest.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-18 22:30:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:30:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:30:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH/views/tests/vOneTest.php [ 10 ]
2012-05-18 22:30:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH/views/tests/vOneTest.php [ 10 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/tests/vOneTest.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 10, Array)
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(43): Kohana_View->__toString()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Base->after()
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#11 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#14 {main}
2012-05-18 22:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:32:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:32:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:32:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:32:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:32:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:32:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:42:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:42:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:43:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:43:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:46:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:46:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:52:55 --- ERROR: ErrorException [ 1 ]: Call to undefined function lenght() ~ APPPATH/views/tests/vOneTest.php [ 8 ]
2012-05-18 22:52:55 --- STRACE: ErrorException [ 1 ]: Call to undefined function lenght() ~ APPPATH/views/tests/vOneTest.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-18 22:52:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:52:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:53:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:53:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:53:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:53:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:54:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:54:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:55:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:55:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 22:58:57 --- ERROR: ErrorException [ 8 ]: Undefined index: status ~ APPPATH/classes/controller/tests/tests.php [ 79 ]
2012-05-18 22:58:57 --- STRACE: ErrorException [ 8 ]: Undefined index: status ~ APPPATH/classes/controller/tests/tests.php [ 79 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(79): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 79, Array)
#1 [internal function]: Controller_Tests_Tests->action_zno()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-18 22:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 22:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:02:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:02:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:06:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:06:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:07:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:07:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:08:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:08:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:09:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:09:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:10:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:10:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:10:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:10:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:10:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:10:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:10:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:10:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:10:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:10:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:10:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:10:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:10:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:10:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:10:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:10:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:10:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:10:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:10:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:10:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:11:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:11:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:11:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:11:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:12:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:12:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:12:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:12:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:12:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:12:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:12:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:12:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:12:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:12:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:12:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:12:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:15:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:15:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:16:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:16:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:16:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:16:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:16:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:16:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:17:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:17:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:17:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:17:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:17:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:17:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:17:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:17:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:18:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:18:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:21:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:21:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:21:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:21:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:21:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:21:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:21:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:21:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:22:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:22:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:22:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:22:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:22:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:22:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:24:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:24:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:29:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:29:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:29:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:29:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:30:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:30:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:30:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:30:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:30:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:30:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:30:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:30:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:31:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:31:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:36:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:36:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:36:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:36:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:36:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:36:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:39:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:39:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:40:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:40:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:40:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:40:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:41:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:41:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-18 23:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 23:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/stfile/img/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}