<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-20 20:07:30 --- ERROR: ErrorException [ 1 ]: Call to undefined function rusToLat() ~ APPPATH/classes/controller/adm/ahid.php [ 452 ]
2012-07-20 20:07:30 --- STRACE: ErrorException [ 1 ]: Call to undefined function rusToLat() ~ APPPATH/classes/controller/adm/ahid.php [ 452 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-20 20:08:24 --- ERROR: ErrorException [ 1 ]: Call to undefined function rusToLat() ~ APPPATH/classes/controller/adm/ahid.php [ 452 ]
2012-07-20 20:08:24 --- STRACE: ErrorException [ 1 ]: Call to undefined function rusToLat() ~ APPPATH/classes/controller/adm/ahid.php [ 452 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-20 20:10:09 --- ERROR: ErrorException [ 1 ]: Call to undefined function rusToLat() ~ APPPATH/classes/controller/adm/ahid.php [ 452 ]
2012-07-20 20:10:09 --- STRACE: ErrorException [ 1 ]: Call to undefined function rusToLat() ~ APPPATH/classes/controller/adm/ahid.php [ 452 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-20 20:10:33 --- ERROR: ErrorException [ 1 ]: Call to undefined function action_rusToLat() ~ APPPATH/classes/controller/adm/ahid.php [ 452 ]
2012-07-20 20:10:33 --- STRACE: ErrorException [ 1 ]: Call to undefined function action_rusToLat() ~ APPPATH/classes/controller/adm/ahid.php [ 452 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-20 21:59:55 --- ERROR: ErrorException [ 2 ]: json_encode() [function.json-encode]: Invalid UTF-8 sequence in argument ~ APPPATH/classes/controller/adm/ahid.php [ 545 ]
2012-07-20 21:59:55 --- STRACE: ErrorException [ 2 ]: json_encode() [function.json-encode]: Invalid UTF-8 sequence in argument ~ APPPATH/classes/controller/adm/ahid.php [ 545 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'json_encode() [...', '/Users/admin/Dr...', 545, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(545): json_encode(Array)
#2 [internal function]: Controller_Adm_Ahid->action_updateCategory()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-20 22:04:02 --- ERROR: ErrorException [ 2 ]: json_encode() [function.json-encode]: Invalid UTF-8 sequence in argument ~ APPPATH/classes/controller/adm/ahid.php [ 545 ]
2012-07-20 22:04:02 --- STRACE: ErrorException [ 2 ]: json_encode() [function.json-encode]: Invalid UTF-8 sequence in argument ~ APPPATH/classes/controller/adm/ahid.php [ 545 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'json_encode() [...', '/Users/admin/Dr...', 545, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(545): json_encode('j????????????')
#2 [internal function]: Controller_Adm_Ahid->action_updateCategory()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-20 22:04:41 --- ERROR: ErrorException [ 2 ]: json_encode() [function.json-encode]: Invalid UTF-8 sequence in argument ~ APPPATH/classes/controller/adm/ahid.php [ 546 ]
2012-07-20 22:04:41 --- STRACE: ErrorException [ 2 ]: json_encode() [function.json-encode]: Invalid UTF-8 sequence in argument ~ APPPATH/classes/controller/adm/ahid.php [ 546 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'json_encode() [...', '/Users/admin/Dr...', 546, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(546): json_encode('j????????????')
#2 [internal function]: Controller_Adm_Ahid->action_updateCategory()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-20 22:08:07 --- ERROR: ErrorException [ 2 ]: json_encode() [function.json-encode]: Invalid UTF-8 sequence in argument ~ APPPATH/classes/controller/adm/ahid.php [ 546 ]
2012-07-20 22:08:07 --- STRACE: ErrorException [ 2 ]: json_encode() [function.json-encode]: Invalid UTF-8 sequence in argument ~ APPPATH/classes/controller/adm/ahid.php [ 546 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'json_encode() [...', '/Users/admin/Dr...', 546, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(546): json_encode('j????????????')
#2 [internal function]: Controller_Adm_Ahid->action_updateCategory()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-20 22:09:18 --- ERROR: ErrorException [ 2 ]: json_encode() [function.json-encode]: Invalid UTF-8 sequence in argument ~ APPPATH/classes/controller/adm/ahid.php [ 546 ]
2012-07-20 22:09:18 --- STRACE: ErrorException [ 2 ]: json_encode() [function.json-encode]: Invalid UTF-8 sequence in argument ~ APPPATH/classes/controller/adm/ahid.php [ 546 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'json_encode() [...', '/Users/admin/Dr...', 546, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(546): json_encode('j????????????')
#2 [internal function]: Controller_Adm_Ahid->action_updateCategory()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-20 22:10:00 --- ERROR: ErrorException [ 8 ]: Undefined index: label ~ APPPATH/classes/controller/adm/ahid.php [ 546 ]
2012-07-20 22:10:00 --- STRACE: ErrorException [ 8 ]: Undefined index: label ~ APPPATH/classes/controller/adm/ahid.php [ 546 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(546): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 546, Array)
#1 [internal function]: Controller_Adm_Ahid->action_updateCategory()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-20 22:11:14 --- ERROR: ErrorException [ 2 ]: json_encode() [function.json-encode]: Invalid UTF-8 sequence in argument ~ APPPATH/classes/controller/adm/ahid.php [ 546 ]
2012-07-20 22:11:14 --- STRACE: ErrorException [ 2 ]: json_encode() [function.json-encode]: Invalid UTF-8 sequence in argument ~ APPPATH/classes/controller/adm/ahid.php [ 546 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'json_encode() [...', '/Users/admin/Dr...', 546, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(546): json_encode('j????????????')
#2 [internal function]: Controller_Adm_Ahid->action_updateCategory()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-20 22:26:18 --- ERROR: ErrorException [ 2 ]: json_encode() [function.json-encode]: Invalid UTF-8 sequence in argument ~ APPPATH/classes/controller/adm/ahid.php [ 546 ]
2012-07-20 22:26:18 --- STRACE: ErrorException [ 2 ]: json_encode() [function.json-encode]: Invalid UTF-8 sequence in argument ~ APPPATH/classes/controller/adm/ahid.php [ 546 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'json_encode() [...', '/Users/admin/Dr...', 546, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(546): json_encode(Array)
#2 [internal function]: Controller_Adm_Ahid->action_updateCategory()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-20 22:51:59 --- ERROR: ErrorException [ 2 ]: json_encode() [function.json-encode]: Invalid UTF-8 sequence in argument ~ APPPATH/classes/controller/adm/ahid.php [ 548 ]
2012-07-20 22:51:59 --- STRACE: ErrorException [ 2 ]: json_encode() [function.json-encode]: Invalid UTF-8 sequence in argument ~ APPPATH/classes/controller/adm/ahid.php [ 548 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'json_encode() [...', '/Users/admin/Dr...', 548, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(548): json_encode(Array)
#2 [internal function]: Controller_Adm_Ahid->action_updateCategory()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-20 23:43:47 --- ERROR: ErrorException [ 2 ]: json_encode() [function.json-encode]: Invalid UTF-8 sequence in argument ~ APPPATH/classes/controller/adm/ahid.php [ 495 ]
2012-07-20 23:43:47 --- STRACE: ErrorException [ 2 ]: json_encode() [function.json-encode]: Invalid UTF-8 sequence in argument ~ APPPATH/classes/controller/adm/ahid.php [ 495 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'json_encode() [...', '/Users/admin/Dr...', 495, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(495): json_encode(Array)
#2 [internal function]: Controller_Adm_Ahid->action_addCategory()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}