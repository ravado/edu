<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-16 10:25:50 --- ERROR: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/controller/tests/tests.php [ 35 ]
2012-03-16 10:25:50 --- STRACE: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/controller/tests/tests.php [ 35 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/tests/tests.php(35): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/STORED...', 35, Array)
#1 [internal function]: Controller_Tests_Tests->action_get()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-16 10:25:50 --- ERROR: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/controller/tests/tests.php [ 35 ]
2012-03-16 10:25:50 --- STRACE: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/controller/tests/tests.php [ 35 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/tests/tests.php(35): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/STORED...', 35, Array)
#1 [internal function]: Controller_Tests_Tests->action_get()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-16 10:25:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-16 10:25:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-16 10:25:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-16 10:25:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-16 12:36:35 --- ERROR: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/controller/tests/tests.php [ 35 ]
2012-03-16 12:36:35 --- STRACE: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/controller/tests/tests.php [ 35 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/tests/tests.php(35): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/STORED...', 35, Array)
#1 [internal function]: Controller_Tests_Tests->action_get()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-16 12:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-16 12:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}