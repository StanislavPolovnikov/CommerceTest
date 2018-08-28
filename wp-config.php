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
define('DB_NAME', 'wp_CommerceTest');

/** Имя пользователя MySQL */
define('DB_USER', 'wp_stas');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'Zx12cv34');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '>Ry~%+ok#kc?WmjV1sQV3@JrKJjfLO@>_j]]7#}3(g&k|]DjJy[),{69wzi05%p`');
define('SECURE_AUTH_KEY',  'E%3O+Ru]eY% tUQ5#XLUHKQTs$o8~TQ@/9hI$_PodmMs*3wU2PYLK7~$XjAVl#*0');
define('LOGGED_IN_KEY',    ',u95|/2*^Nk[U,gUdJ r$ZOS1?d/;O1/H9y,$%fA0b=>V_]lN>,*1[~]!YwA`q5_');
define('NONCE_KEY',        'xn5KNpv0(3iyl=R%I/0i~2Avmiz*Z&`va7*dT U=ezX_OF%+n>,RJO6~_LV-@IHM');
define('AUTH_SALT',        'L7-92g%G7KJnDhkdVQ1]{)3a>DWrMZ%hqvbHzGX+sbwcw)R?N/2=<Z0&mjmW_3#7');
define('SECURE_AUTH_SALT', 'cHtY,m!va*Xek(|-tbX)%j9imQD/Gr(>zyWxg<wqA<)Eq},B&_SzBb@)>^hX!{^`');
define('LOGGED_IN_SALT',   'IKvi^k>bL]F>g75qzCQA}MHVEJ^f~D^=kgV3%UH]6wx%Nh2E<*2E}Z(Q2W~*+,3`');
define('NONCE_SALT',       '-/J7^-|8jpM%C=?-u`l?e+cM/0|X2pmb-B/4u*huGD8>{wg$OaslvVvj_FM,4+sA');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'comm_wp_';

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
