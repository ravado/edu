<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-29 00:45:55 --- ERROR: ErrorException [ 1 ]: Class 'Model_Orm_tstcategory' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-04-29 00:45:55 --- STRACE: ErrorException [ 1 ]: Class 'Model_Orm_tstcategory' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-29 00:45:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 00:45:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 01:11:31 --- ERROR: ErrorException [ 8 ]: Undefined index: cut_subcat ~ APPPATH/classes/controller/adm/tests.php [ 35 ]
2012-04-29 01:11:31 --- STRACE: ErrorException [ 8 ]: Undefined index: cut_subcat ~ APPPATH/classes/controller/adm/tests.php [ 35 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/tests.php(35): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 35, Array)
#1 [internal function]: Controller_Adm_Tests->action_Create()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Tests))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-29 01:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 01:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 01:21:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH/views/adm/vAdmTestAdd.php [ 15 ]
2012-04-29 01:21:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH/views/adm/vAdmTestAdd.php [ 15 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmTestAdd.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 15, Array)
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdm.php(9): Kohana_View->__toString()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(43): Kohana_View->__toString()
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#11 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Base->after()
#14 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Adm_Tests))
#15 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#18 {main}
2012-04-29 01:22:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH/views/adm/vAdmTestAdd.php [ 15 ]
2012-04-29 01:22:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH/views/adm/vAdmTestAdd.php [ 15 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmTestAdd.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 15, Array)
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdm.php(9): Kohana_View->__toString()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(43): Kohana_View->__toString()
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#11 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Base->after()
#14 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Adm_Tests))
#15 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#18 {main}
2012-04-29 01:23:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH/views/adm/vAdmTestAdd.php [ 15 ]
2012-04-29 01:23:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH/views/adm/vAdmTestAdd.php [ 15 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmTestAdd.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 15, Array)
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdm.php(9): Kohana_View->__toString()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(43): Kohana_View->__toString()
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#11 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Base->after()
#14 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Adm_Tests))
#15 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#18 {main}
2012-04-29 01:23:41 --- ERROR: ErrorException [ 8 ]: Use of undefined constant page - assumed 'page' ~ APPPATH/views/adm/vAdmTestAdd.php [ 15 ]
2012-04-29 01:23:41 --- STRACE: ErrorException [ 8 ]: Use of undefined constant page - assumed 'page' ~ APPPATH/views/adm/vAdmTestAdd.php [ 15 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmTestAdd.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/admin/Dr...', 15, Array)
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdm.php(9): Kohana_View->__toString()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(43): Kohana_View->__toString()
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#11 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Base->after()
#14 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Adm_Tests))
#15 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#18 {main}
2012-04-29 01:23:55 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/adm/vAdmTestAdd.php [ 16 ]
2012-04-29 01:23:55 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/adm/vAdmTestAdd.php [ 16 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmTestAdd.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 16, Array)
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdm.php(9): Kohana_View->__toString()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(43): Kohana_View->__toString()
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#11 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Base->after()
#14 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Adm_Tests))
#15 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#18 {main}
2012-04-29 01:25:26 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/adm/vAdmTestAdd.php [ 15 ]
2012-04-29 01:25:26 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/adm/vAdmTestAdd.php [ 15 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmTestAdd.php(15): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 15, Array)
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdm.php(9): Kohana_View->__toString()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(43): Kohana_View->__toString()
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#11 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Base->after()
#14 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Adm_Tests))
#15 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#18 {main}
2012-04-29 01:31:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/adm/vAdmTestAdd.php [ 146 ]
2012-04-29 01:31:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/adm/vAdmTestAdd.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-29 01:31:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/adm/vAdmTestAdd.php [ 145 ]
2012-04-29 01:31:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/adm/vAdmTestAdd.php [ 145 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-29 01:32:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/adm/vAdmTestAdd.php [ 145 ]
2012-04-29 01:32:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/adm/vAdmTestAdd.php [ 145 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-29 01:32:35 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/views/adm/vAdmTestAdd.php [ 28 ]
2012-04-29 01:32:35 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/views/adm/vAdmTestAdd.php [ 28 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmTestAdd.php(28): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/admin/Dr...', 28, Array)
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdm.php(9): Kohana_View->__toString()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(43): Kohana_View->__toString()
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#11 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Base->after()
#14 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Adm_Tests))
#15 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#18 {main}
2012-04-29 02:22:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL adm/ahid/addcreatetest was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-04-29 02:22:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL adm/ahid/addcreatetest was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-29 02:23:12 --- ERROR: ErrorException [ 8 ]: Undefined index: need_del ~ APPPATH/classes/controller/adm/ahid.php [ 139 ]
2012-04-29 02:23:12 --- STRACE: ErrorException [ 8 ]: Undefined index: need_del ~ APPPATH/classes/controller/adm/ahid.php [ 139 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(139): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 139, Array)
#1 [internal function]: Controller_Adm_Ahid->action_createTest()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-29 02:25:21 --- ERROR: ErrorException [ 8 ]: Undefined index: need_del ~ APPPATH/classes/controller/adm/ahid.php [ 139 ]
2012-04-29 02:25:21 --- STRACE: ErrorException [ 8 ]: Undefined index: need_del ~ APPPATH/classes/controller/adm/ahid.php [ 139 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(139): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 139, Array)
#1 [internal function]: Controller_Adm_Ahid->action_createTest()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-29 02:25:52 --- ERROR: ErrorException [ 8 ]: Undefined index: need_del ~ APPPATH/classes/controller/adm/ahid.php [ 139 ]
2012-04-29 02:25:52 --- STRACE: ErrorException [ 8 ]: Undefined index: need_del ~ APPPATH/classes/controller/adm/ahid.php [ 139 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(139): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 139, Array)
#1 [internal function]: Controller_Adm_Ahid->action_createTest()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-29 02:26:45 --- ERROR: ErrorException [ 8 ]: Undefined index: need_del ~ APPPATH/classes/controller/adm/ahid.php [ 139 ]
2012-04-29 02:26:45 --- STRACE: ErrorException [ 8 ]: Undefined index: need_del ~ APPPATH/classes/controller/adm/ahid.php [ 139 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(139): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 139, Array)
#1 [internal function]: Controller_Adm_Ahid->action_createTest()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-29 02:27:49 --- ERROR: Kohana_Exception [ 0 ]: The subcategory_id property does not exist in the Model_Test class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-04-29 02:27:49 --- STRACE: Kohana_Exception [ 0 ]: The subcategory_id property does not exist in the Model_Test class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('subcategory_id', '6')
#1 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(197): Kohana_ORM->__set('subcategory_id', '6')
#2 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(142): Model_Mtests->createTest(Array)
#3 [internal function]: Controller_Adm_Ahid->action_createTest()
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-29 02:28:54 --- ERROR: ErrorException [ 8 ]: Undefined index: need_del ~ APPPATH/classes/controller/adm/ahid.php [ 139 ]
2012-04-29 02:28:54 --- STRACE: ErrorException [ 8 ]: Undefined index: need_del ~ APPPATH/classes/controller/adm/ahid.php [ 139 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(139): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 139, Array)
#1 [internal function]: Controller_Adm_Ahid->action_createTest()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-29 02:29:16 --- ERROR: Kohana_Exception [ 0 ]: The subcategory_id property does not exist in the Model_Test class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-04-29 02:29:16 --- STRACE: Kohana_Exception [ 0 ]: The subcategory_id property does not exist in the Model_Test class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('subcategory_id', '6')
#1 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(197): Kohana_ORM->__set('subcategory_id', '6')
#2 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(144): Model_Mtests->createTest(Array)
#3 [internal function]: Controller_Adm_Ahid->action_createTest()
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-29 02:30:38 --- ERROR: Kohana_Exception [ 0 ]: The subcategory_id property does not exist in the Model_Test class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-04-29 02:30:38 --- STRACE: Kohana_Exception [ 0 ]: The subcategory_id property does not exist in the Model_Test class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('subcategory_id', '6')
#1 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(197): Kohana_ORM->__set('subcategory_id', '6')
#2 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(144): Model_Mtests->createTest(Array)
#3 [internal function]: Controller_Adm_Ahid->action_createTest()
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-29 02:31:28 --- ERROR: ErrorException [ 8 ]: Undefined index: need_del ~ APPPATH/classes/model/mtests.php [ 207 ]
2012-04-29 02:31:28 --- STRACE: ErrorException [ 8 ]: Undefined index: need_del ~ APPPATH/classes/model/mtests.php [ 207 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(207): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 207, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(144): Model_Mtests->createTest(Array)
#2 [internal function]: Controller_Adm_Ahid->action_createTest()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}