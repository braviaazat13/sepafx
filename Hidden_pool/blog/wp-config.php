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
define('DB_NAME', 'blog');

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
define('AUTH_KEY',         '^hv7.Zd&{Fs,2y9VnR*<sn2XW$Mtt2Mql=-:7^w}R.b0ZmOh2T(}~yEj+;<xZorG');
define('SECURE_AUTH_KEY',  '4(VDLGW%RJ~mM2iQ (|)<,KZ~IXK]0O W*A2sghoyeqf,YS/4q2OAnO}]zM2E2.&');
define('LOGGED_IN_KEY',    '!vPoS7e_xs ZU<F.d~-M5O~XzSK4CmGcY5Vl}$Hgq6i=}M`j1}4;G]ir<Rk:?G!`');
define('NONCE_KEY',        'Ul.9G{,E6^0clqP ;qYyQ|[&;!PqDuB#A<97dm] p*{pFL0Q(01BtM{QCHx^)u*N');
define('AUTH_SALT',        '|a?]Jp%&h^qh<pn.iJ#g=ruJSrBI^hlHw:<md3aUOd3Q)2wA.gapw(Eq 3S*{2mW');
define('SECURE_AUTH_SALT', 'e}@/rrFN+fD^5L1FZr#%@`]_-IYkjgBc<CVTp;V:)L>#35q6IHlx*d(QW)A,n$S%');
define('LOGGED_IN_SALT',   'M&ki>@:jX;z3s/g2-uc0F7_v Q}ECVO+5%F#%HpvK1O#!2x.qpn.Ss2t5&Ful0sR');
define('NONCE_SALT',       '8y<-%&PXGANT~#p+D-sKiS-(R!&?c?!~=%Cd##WJDzmO&wl6alU-grcKt|F5k}NF');

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
