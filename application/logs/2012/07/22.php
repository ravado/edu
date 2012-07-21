<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-22 01:52:43 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/views/adm/vAdmVioQuestions.php [ 29 ]
2012-07-22 01:52:43 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/views/adm/vAdmVioQuestions.php [ 29 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', '/Users/admin/Dr...', 29, Array)
#1 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmVioQuestions.php(29): date('Y-m-d H:i', '2012-10-25 18:0...')
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdm.php(9): Kohana_View->__toString()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#9 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(25): Kohana_View->__toString()
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#11 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#12 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#13 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Base->after()
#15 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#16 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#19 {main}
2012-07-22 01:53:04 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/views/adm/vAdmVioQuestions.php [ 29 ]
2012-07-22 01:53:04 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/views/adm/vAdmVioQuestions.php [ 29 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', '/Users/admin/Dr...', 29, Array)
#1 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmVioQuestions.php(29): date('Y-m-d H:i', '2012-10-25 18:0...')
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdm.php(9): Kohana_View->__toString()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#9 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(25): Kohana_View->__toString()
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#11 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#12 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#13 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Base->after()
#15 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#16 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#19 {main}
2012-07-22 01:53:49 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/views/adm/vAdmVioQuestions.php [ 29 ]
2012-07-22 01:53:49 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/views/adm/vAdmVioQuestions.php [ 29 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', '/Users/admin/Dr...', 29, Array)
#1 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmVioQuestions.php(29): date('Y-m-d H:i', '2012-10-25 18:0...')
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdm.php(9): Kohana_View->__toString()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#9 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(25): Kohana_View->__toString()
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#11 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#12 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#13 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Base->after()
#15 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#16 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#19 {main}