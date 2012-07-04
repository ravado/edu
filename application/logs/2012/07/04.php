<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-04 15:19:46 --- ERROR: ErrorException [ 8 ]: Undefined index: status ~ APPPATH/classes/controller/tests/tests.php [ 274 ]
2012-07-04 15:19:46 --- STRACE: ErrorException [ 8 ]: Undefined index: status ~ APPPATH/classes/controller/tests/tests.php [ 274 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/tests/tests.php(274): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 274, Array)
#1 [internal function]: Controller_Tests_Tests->action_zno()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tests_Tests))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}