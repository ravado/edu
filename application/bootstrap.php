<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
require SYSPATH.'classes/kohana/core'.EXT;

if (is_file(APPPATH.'classes/kohana'.EXT))
{
	// Application extends the core
	require APPPATH.'classes/kohana'.EXT;
}
else
{
	// Load empty core extension
	require SYSPATH.'classes/kohana'.EXT;
}

/**
 * Set the default time zone.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/timezones
 */
date_default_timezone_set('Europe/Zaporozhye');

/**
 * Set the default locale.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/setlocale
 */
setlocale(LC_ALL, 'ru_RU.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @see  http://kohanaframework.org/guide/using.autoloading
 * @see  http://php.net/spl_autoload_register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @see  http://php.net/spl_autoload_call
 * @see  http://php.net/manual/var.configuration.php#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('ru-RU');

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
if (isset($_SERVER['KOHANA_ENV']))
{
	Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
}

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 */
Kohana::init(array(
	'base_url'   => '/',
    'index_file' => FALSE,
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
	 'auth'       => MODPATH.'auth',       // Basic authentication
    'profilertoolbar' => MODPATH.'profiletoolbar',
	// 'cache'      => MODPATH.'cache',      // Caching with multiple backends
	// 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
	 'database'   => MODPATH.'database',   // Database access
	// 'image'      => MODPATH.'image',      // Image manipulation
	 'orm'        => MODPATH.'orm',        // Object Relationship Mapping
	// 'unittest'   => MODPATH.'unittest',   // Unit testing
	// 'userguide'  => MODPATH.'userguide',  // User guide and API documentation
));

/*Запомни меня*/
Cookie::$salt = 'a234aflk234jbdf';

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
/*Роут тесторм*/
Route::set('testorm', 'testorm(/<action>)')
    ->defaults(array(
    'directory'  => 'testorm',
    'controller' => 'testorm',
    'action'     => 'index',
));

/*Роут тестов*/
Route::set('tests', 'tests(/<action>(/<id_test>(/<question_number>)))')
    ->defaults(array(
    'directory'  => 'tests',
    'controller' => 'tests',
    'action'     => 'index',
));

/*роут для аяксов в ВиО*/
Route::set('hide_question', 'questions/qhid/(<action>)')
    ->defaults(array(
    'directory'  => 'questions',
    'controller' => 'qhid',
    'action'     => 'getOneNews',
));
/*роут отдельного вопроса*/

/*роут отдельного вопроса*/
Route::set('one_question', 'questions/question(/<id>)')
    ->defaults(array(
    'directory'  => 'questions',
    'controller' => 'questions',
    'action'     => 'question',
));

/*роут поиска*/
Route::set('search', 'search(/<action>)')
    ->defaults(array(
    'directory'  => 'search',
    'controller' => 'search',
    'action'     => 'index',
));

/*роут задания вопроса*/
Route::set('ask_questions', 'questions/(<action>(/<qtype>(/<page>)))')
    ->defaults(array(
    'directory'  => 'questions',
    'controller' => 'questions',
    'action'     => 'ask',
));

/*роут вопросов и ответов*/
Route::set('questions', 'questions(/<controller>(/<action>(/<id>)))')
	->defaults(array(
		'directory'  => 'questions',
		'controller' => 'questions',
		'action'     => 'index',
	));

/*Одна новость*/
Route::set('one_news', 'news/public(/<id>)')
	->defaults(array(
		'directory'  => 'news',
		'controller' => 'news',
		'action'     => 'public',
	));

/*Роут страц главной страницы*/
Route::set('newsPage', 'news/page(/<id>)')
	->defaults(array(
        'directory'  => 'news',
		'controller' => 'news',
		'action'     => 'page',
	));

/*роут новоестей*/
Route::set('news', 'news(/<controller>(/<action>(/<id>)))')
	->defaults(array(
		'directory'  => 'news',
		'controller' => 'news',
		'action'     => 'index',
	));



/*роут админки*/
Route::set('adm', 'adm(/<controller>(/<action>(/<id>)))')
	->defaults(array(
		'directory'  => 'adm',
		'controller' => 'panel',
		'action'     => 'index',
	));

/*роут пользователя, принимает все котроллеры папки User */
Route::set('user', 'user(/<controller>(/<action>(/<id>)))')
	->defaults(array(
		'directory'  => 'user',
		'controller' => 'main',
		'action'     => 'index',
	));

/*Дефолтный роут, пытается принять все, показывает главную страницу*/
Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'home',
		'action'     => 'index',
	));

set_exception_handler(array('Exceptionhandler', 'handle'));