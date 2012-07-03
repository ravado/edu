<?php defined('SYSPATH') or die('No direct script access.'); ?>
le to find a route to match the URI: stfile/img/tests/gadgets.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-03 12:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stfile/img/tests/gadgets.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-03 12:50:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stfile/img/tests/art.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-03 12:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stfile/img/tests/art.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-03 12:53:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stfile/img/tests/gadgets.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-03 12:53:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stfile/img/tests/gadgets.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-03 13:56:43 --- ERROR: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 45 ]
2012-04-03 13:56:43 --- STRACE: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 45 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(45): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 45, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(40): Model_Mtests->addNewTest(Array)
#2 [internal function]: Controller_Tests_Tests->action_created()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-03 13:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-03 13:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-03 13:58:16 --- ERROR: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 45 ]
2012-04-03 13:58:16 --- STRACE: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 45 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(45): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 45, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(41): Model_Mtests->addNewTest(Array)
#2 [internal function]: Controller_Tests_Tests->action_created()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-03 13:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-03 13:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-03 13:58:29 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/classes/controller/tests/tests.php [ 34 ]
2012-04-03 13:58:29 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/classes/controller/tests/tests.php [ 34 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(34): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 34, Array)
#1 [internal function]: Controller_Tests_Tests->action_created()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-03 13:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-03 13:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-03 13:58:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: user_auth ~ APPPATH/views/tests/vTestsCreated.php [ 4 ]
2012-04-03 13:58:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: user_auth ~ APPPATH/views/tests/vTestsCreated.php [ 4 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/tests/vTestsCreated.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 4, Array)
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
2012-04-03 13:59:34 --- ERROR: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 45 ]
2012-04-03 13:59:34 --- STRACE: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 45 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(45): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 45, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(38): Model_Mtests->addNewTest(Array)
#2 [internal function]: Controller_Tests_Tests->action_created()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-03 13:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-03 13:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}