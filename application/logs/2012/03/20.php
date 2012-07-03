<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-20 11:02:04 --- ERROR: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/controller/tests/tests.php [ 36 ]
2012-03-20 11:02:04 --- STRACE: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/controller/tests/tests.php [ 36 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/tests/tests.php(36): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/STORED...', 36, Array)
#1 [internal function]: Controller_Tests_Tests->action_get()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-20 11:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-20 11:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}