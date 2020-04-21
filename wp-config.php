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
define( 'DB_NAME', 'memleketparty.kz' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?wz@{(8`ce{$ZlL|9c%PK!,972nLCx_,c^DrZ8I=LijYKL8oez86@(lrh^p-,gFm' );
define( 'SECURE_AUTH_KEY',  '|w0Km,Dd-1}rY-}W`SFfu&,JyJ}$3=Uf`$rGFN^Uu@MR=:FoK~TDe.^yI]JZJv?z' );
define( 'LOGGED_IN_KEY',    'LkN]!nkPAaWH!;[8$5J6fE[#M;1,vx@UiWpZ_S@zl4N4SG`R)j|pi~k2a2t$H&vD' );
define( 'NONCE_KEY',        'F}RMq]OP-bfG;!0,9/lm&)|ZJF|bEYePmUrJ*Z)@+eYsvijxv&i$gch7^KPxa#0X' );
define( 'AUTH_SALT',        'w`nII<f9tM@p{?4Yl>`-++bM]X8oiwmXu#oq=vT^Fi@!;eIL7cjw+(=>ouEWUue`' );
define( 'SECURE_AUTH_SALT', 'Oz+mChAr]9?6$26v/]cm3Kvhy@3|/3Ec<WyhN1es4%{ryc@BL,_ 4iP1xp(gLdkl' );
define( 'LOGGED_IN_SALT',   '6_Oc(GF:7F*e8de.Pt/bhxzGD2+K>MiES$TZUw:t4x|6VQe?o^OI0`#x)tyT)M0c' );
define( 'NONCE_SALT',       'l*JY*_4#1=5o~)_*W,3yDgt)n-&=6PBvtpdJT^4P6qw$u(FdPX5 ;pl?/1ehb)5`' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
