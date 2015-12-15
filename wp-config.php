<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wptest');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[S6-u^;.G.tt6-U)y)4e]Jua@2#-N=MVuaS,5c3:NK+N>3qPXem}2e|8|f*;3BKp');
define('SECURE_AUTH_KEY',  '1Ao6gA?C 5!?GW@sznLz~P60TP2B8I%/QJc,q9EwHrhxNx8]<AKD%V@-:So^i@q5');
define('LOGGED_IN_KEY',    'Tr#7z8x~kpy0@7<gIxkpI$&.nUM{h:@d1rW!<[:j~h)<ca#,sw!qnOyJGE?M{iUV');
define('NONCE_KEY',        'Pt<a6d wgg*77;Y;HdH9t]|TgHa,9q1VnG)r?QaWcFm6GN`ESWvVIT7j~26 >s8N');
define('AUTH_SALT',        'uhu9lDooR|KX9YP{_t/ZU}j=SG?6o^k)X8=e3ilB&s9,>7#KKO(i8S3_Ig)-)Kn9');
define('SECURE_AUTH_SALT', 'aY~)Ct<|+*],8R[I~0IVB2I,/N^[ruZhqAJCS|T}J|XAz9M-o2+H.LPHUW,N+EtC');
define('LOGGED_IN_SALT',   'e:^z5puyO78x[+Q|fB9J]i3pnN+tAC4BP/?=+=AzRas$$qK@2)0j8<B)_d+%CRJr');
define('NONCE_SALT',       '0![8j}s6 1Q$R<B2@3mifC!ZV&D89g_MRR/w~o_[kZHjYNz-~!R9Q0(>wqtFEFfo');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
