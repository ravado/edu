<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-07 10:43:26 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-03-07 10:43:26 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Volumes/STOREDGE/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/model/mnews.php(11): Kohana_Database_Query->execute()
#3 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/news/news.php(20): Model_Mnews->getCountNews()
#4 [internal function]: Controller_News_News->action_index()
#5 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_News_News))
#6 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-03-07 10:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-07 10:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-07 10:46:28 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'edu' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2012-03-07 10:46:28 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'edu' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/modules/database/classes/kohana/database/mysql.php(75): Kohana_Database_MySQL->_select_db('edu')
#1 /Volumes/STOREDGE/Dropbox/sites/edu/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `questio...', false, Array)
#3 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/model/mquestions.php(24): Kohana_Database_Query->execute()
#4 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/questions/questions.php(25): Model_Mquestions->mainQA(Array)
#5 [internal function]: Controller_Questions_Questions->action_index()
#6 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#7 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-03-07 10:46:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-07 10:46:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-07 10:47:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-07 10:47:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-07 10:47:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-07 10:47:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}