<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-27 20:34:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_Mocatalogdirection' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-04-27 20:34:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_Mocatalogdirection' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-27 20:34:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-27 20:34:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:35:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_Mocatalogdirection' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-04-27 20:35:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_Mocatalogdirection' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-27 20:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-27 20:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:36:47 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_MoCatalogUniversity class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-04-27 20:36:47 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_MoCatalogUniversity class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/search/search.php(29): Kohana_ORM->__get('name')
#1 [internal function]: Controller_Search_Search->action_index()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Search_Search))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-27 20:36:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-27 20:36:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}