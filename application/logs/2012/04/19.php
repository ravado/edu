<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-19 22:39:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/example.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-19 22:39:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/example.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-19 23:49:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/controller/adm/ahid.php [ 95 ]
2012-04-19 23:49:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/controller/adm/ahid.php [ 95 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-19 23:50:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/controller/adm/ahid.php [ 95 ]
2012-04-19 23:50:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/controller/adm/ahid.php [ 95 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-19 23:52:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/controller/adm/ahid.php [ 95 ]
2012-04-19 23:52:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/controller/adm/ahid.php [ 95 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-19 23:52:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/controller/adm/ahid.php [ 95 ]
2012-04-19 23:52:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/controller/adm/ahid.php [ 95 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-19 23:59:54 --- ERROR: ErrorException [ 8 ]: Undefined index: facts ~ APPPATH/classes/controller/adm/ahid.php [ 99 ]
2012-04-19 23:59:54 --- STRACE: ErrorException [ 8 ]: Undefined index: facts ~ APPPATH/classes/controller/adm/ahid.php [ 99 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(99): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 99, Array)
#1 [internal function]: Controller_Adm_Ahid->action_addFact()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}