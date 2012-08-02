<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-03 00:01:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH/views/questions/vQuestionOne.php [ 103 ]
2012-08-03 00:01:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH/views/questions/vQuestionOne.php [ 103 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionOne.php(103): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 103, Array)
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(25): Kohana_View->__toString()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Base->after()
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#11 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#14 {main}
2012-08-03 00:04:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSEIF ~ APPPATH/views/questions/vQuestionOne.php [ 107 ]
2012-08-03 00:04:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSEIF ~ APPPATH/views/questions/vQuestionOne.php [ 107 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 00:04:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSEIF ~ APPPATH/views/questions/vQuestionOne.php [ 107 ]
2012-08-03 00:04:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSEIF ~ APPPATH/views/questions/vQuestionOne.php [ 107 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 00:04:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSEIF ~ APPPATH/views/questions/vQuestionOne.php [ 107 ]
2012-08-03 00:04:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSEIF ~ APPPATH/views/questions/vQuestionOne.php [ 107 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 00:04:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: voted_up ~ APPPATH/views/questions/vQuestionOne.php [ 111 ]
2012-08-03 00:04:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: voted_up ~ APPPATH/views/questions/vQuestionOne.php [ 111 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionOne.php(111): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 111, Array)
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(25): Kohana_View->__toString()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Base->after()
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#11 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#14 {main}