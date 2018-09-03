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
define('DB_NAME', 'pozitiv');
//define('FORCE_SSL_ADMIN', true);
/** Имя пользователя MySQL */
define('DB_USER', 'pozitiv');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '8C6g8L1b');

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
define('AUTH_KEY',         'IN({x~Xa[x?kwgXmq!C`LBz%!C-4OW>1;n{OU,+2Ns}*GJrxVY]5^Ghhd?{^G`]N');
define('SECURE_AUTH_KEY',  'QlmU`@HM%Vi`!:^6!^yCaxb.p2+.9!G}DYl&Z<?=F!K5y_Owm0KwLUqqT qBZ}30');
define('LOGGED_IN_KEY',    'q:Q0&PmC}9>%ZOk-;Yf?{)/d>:y-Cq(?+6eu!<@<FNwM^EiwU@BKp aVpkjYmo#`');
define('NONCE_KEY',        'xPX!;4+xeKlX$~4LIGj#!Tu>v~e^67p;UG/=&+/;$}?N74Aed!2^Ss&2Ge&nY@P,');
define('AUTH_SALT',        'o_wu<.]z[5QkpkyeVRS.7K B5#@/j|qLG6p2zH(}!(!)fn[NUAcxpD?BNa=D34V(');
define('SECURE_AUTH_SALT', 'K!vnMRWw+:$PQStT4lOt30<k!>52xhk1~Wxh(ji*<j&eSZ{1Snt0cS%9!-ii5(qy');
define('LOGGED_IN_SALT',   'iKI!T^2!}@_,57N8ss}lGka;j(na8=N237~B9p05fLJhzu%FLfsDEzk*{ E;5[4;');
define('NONCE_SALT',       'XoMluA](Wwe OBh2RuZl^pN~tk7AH~~0}iy0_!r1L3)(xK%cCrUcq@;F`rz=1 !]');

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
