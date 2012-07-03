<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-19 18:30:45 --- ERROR: ErrorException [ 2 ]: rename(uploads/p16olsnpj81kth1hvnpr61f7m1sp23.png.part,uploads/p16olsnpj81kth1hvnpr61f7m1sp23.png) [function.rename]: No such file or directory ~ APPPATH/classes/controller/questions/qhid.php [ 205 ]
2012-03-19 18:30:45 --- STRACE: ErrorException [ 2 ]: rename(uploads/p16olsnpj81kth1hvnpr61f7m1sp23.png.part,uploads/p16olsnpj81kth1hvnpr61f7m1sp23.png) [function.rename]: No such file or directory ~ APPPATH/classes/controller/questions/qhid.php [ 205 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'rename(uploads/...', '/Volumes/STORED...', 205, Array)
#1 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/questions/qhid.php(205): rename('uploads/p16olsn...', 'uploads/p16olsn...')
#2 [internal function]: Controller_Questions_Qhid->action_upload()
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Qhid))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}