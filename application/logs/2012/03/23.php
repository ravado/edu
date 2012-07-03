<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-23 13:58:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/get was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-03-23 13:58:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/get was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-23 13:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-23 13:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-23 13:58:19 --- ERROR: ErrorException [ 8 ]: Undefined index: answer ~ APPPATH/classes/model/mtests.php [ 46 ]
2012-03-23 13:58:19 --- STRACE: ErrorException [ 8 ]: Undefined index: answer ~ APPPATH/classes/model/mtests.php [ 46 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/model/mtests.php(46): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/STORED...', 46, Array)
#1 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/tests/tests.php(34): Model_Mtests->addNewTest(Array)
#2 [internal function]: Controller_Tests_Tests->action_done()
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-23 13:58:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-23 13:58:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-23 16:34:31 --- ERROR: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 11 ]
2012-03-23 16:34:31 --- STRACE: ErrorException [ 8 ]: Undefined index: testTitle ~ APPPATH/classes/model/mtests.php [ 11 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/model/mtests.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/STORED...', 11, Array)
#1 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/tests/tests.php(34): Model_Mtests->addNewTest(Array)
#2 [internal function]: Controller_Tests_Tests->action_done()
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-23 16:34:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-23 16:34:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}