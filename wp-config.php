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
define('DB_NAME', 'cvatro');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         't<FHo%|G(0}<5ZR!7Swq26$ge OEe^a_N>hM;NnESv,;A_/Bi||X>E_Zi_}`>,zH');
define('SECURE_AUTH_KEY',  '&&>l*?G;baxU*]rF3+*||mR+!0I]=;oJt9zEyjX<%on.lLKR7|4VJ~1kkgj:,3,9');
define('LOGGED_IN_KEY',    'LRmr^G`c:$]doH;obwUrBQ<O66j~YTO3rMySnr2-R><;:[zwb/2mR&_g<yL*hmX=');
define('NONCE_KEY',        '3I^N`aiER<Sf|/Nm:v+t)o)AVQj :,&jl|Kmab3#TBq_U!d{;Lh85FQd$qT 4-ft');
define('AUTH_SALT',        'M38I[dtcwZKt.[#@N6Q!co 4K F8rlKzR<=ZT7,4<9`]05Gd7rSr0E8$%#a>CGh]');
define('SECURE_AUTH_SALT', ';mxtNL)HtvaPn.XwZ;w,ZrFb ,rswMLxreaoY=&(gwJI^x;fonYx!rz4Vwf~`b+b');
define('LOGGED_IN_SALT',   'iFvMe$94RY~O *r>1.mtg8a3fPwmCOHrrx`}E`Z=ztx^|I=.H&1q>6Ysqod0) /;');
define('NONCE_SALT',       '`l9~!ktl!Y)g+~KqZqQ)y!5S:>}]3D)hlxG9V@?,-kj51hK0kYw[9V>*.Iqyh4[A');

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
