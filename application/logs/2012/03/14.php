<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-14 22:16:41 --- ERROR: View_Exception [ 0 ]: The requested view tests/vTest could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-03-14 22:16:41 --- STRACE: View_Exception [ 0 ]: The requested view tests/vTest could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/view.php(137): Kohana_View->set_filename('tests/vTest')
#1 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/view.php(30): Kohana_View->__construct('tests/vTest', Array)
#2 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/tests/tests.php(34): Kohana_View::factory('tests/vTest', Array)
#3 [internal function]: Controller_Tests_Tests->action_get()
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#8 {main}
2012-03-14 22:16:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-14 22:16:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 22:33:23 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/tests/tests.php [ 37 ]
2012-03-14 22:33:23 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/tests/tests.php [ 37 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/tests/tests.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/STORED...', 37, Array)
#1 [internal function]: Controller_Tests_Tests->action_get()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-14 22:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-14 22:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 22:35:11 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/tests/tests.php [ 37 ]
2012-03-14 22:35:11 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/tests/tests.php [ 37 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/tests/tests.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/STORED...', 37, Array)
#1 [internal function]: Controller_Tests_Tests->action_get()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-14 22:35:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-14 22:35:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 23:07:23 --- ERROR: ErrorException [ 8 ]: Undefined index: test ~ APPPATH/classes/controller/tests/tests.php [ 34 ]
2012-03-14 23:07:23 --- STRACE: ErrorException [ 8 ]: Undefined index: test ~ APPPATH/classes/controller/tests/tests.php [ 34 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/tests/tests.php(34): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/STORED...', 34, Array)
#1 [internal function]: Controller_Tests_Tests->action_get()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-14 23:07:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-14 23:07:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 23:07:25 --- ERROR: ErrorException [ 8 ]: Undefined index: test ~ APPPATH/classes/controller/tests/tests.php [ 34 ]
2012-03-14 23:07:25 --- STRACE: ErrorException [ 8 ]: Undefined index: test ~ APPPATH/classes/controller/tests/tests.php [ 34 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/tests/tests.php(34): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/STORED...', 34, Array)
#1 [internal function]: Controller_Tests_Tests->action_get()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-14 23:07:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-14 23:07:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 23:07:51 --- ERROR: ErrorException [ 8 ]: Undefined index: question ~ APPPATH/classes/controller/tests/tests.php [ 37 ]
2012-03-14 23:07:51 --- STRACE: ErrorException [ 8 ]: Undefined index: question ~ APPPATH/classes/controller/tests/tests.php [ 37 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/tests/tests.php(37): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/STORED...', 37, Array)
#1 [internal function]: Controller_Tests_Tests->action_get()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-14 23:07:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-14 23:07:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 23:08:31 --- ERROR: ErrorException [ 8 ]: Undefined index: question ~ APPPATH/classes/controller/tests/tests.php [ 37 ]
2012-03-14 23:08:31 --- STRACE: ErrorException [ 8 ]: Undefined index: question ~ APPPATH/classes/controller/tests/tests.php [ 37 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/tests/tests.php(37): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/STORED...', 37, Array)
#1 [internal function]: Controller_Tests_Tests->action_get()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-14 23:08:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-14 23:08:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 23:10:09 --- ERROR: ErrorException [ 8 ]: Undefined index: question ~ APPPATH/classes/controller/tests/tests.php [ 37 ]
2012-03-14 23:10:09 --- STRACE: ErrorException [ 8 ]: Undefined index: question ~ APPPATH/classes/controller/tests/tests.php [ 37 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/tests/tests.php(37): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/STORED...', 37, Array)
#1 [internal function]: Controller_Tests_Tests->action_get()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-14 23:10:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-14 23:10:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 23:13:49 --- ERROR: ErrorException [ 8 ]: Undefined index: question ~ APPPATH/classes/controller/tests/tests.php [ 39 ]
2012-03-14 23:13:49 --- STRACE: ErrorException [ 8 ]: Undefined index: question ~ APPPATH/classes/controller/tests/tests.php [ 39 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/tests/tests.php(39): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/STORED...', 39, Array)
#1 [internal function]: Controller_Tests_Tests->action_get()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-14 23:13:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-14 23:13:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 23:14:11 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/tests/tests.php [ 39 ]
2012-03-14 23:14:11 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/tests/tests.php [ 39 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/tests/tests.php(39): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/STORED...', 39, Array)
#1 [internal function]: Controller_Tests_Tests->action_get()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-14 23:14:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-14 23:14:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 23:30:25 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/tests/tests.php [ 42 ]
2012-03-14 23:30:25 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/tests/tests.php [ 42 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/tests/tests.php(42): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/STORED...', 42, Array)
#1 [internal function]: Controller_Tests_Tests->action_get()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-14 23:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-14 23:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}