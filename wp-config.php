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
define( 'DB_NAME', 'ariyateks' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'ariyateks' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Ariya2020Teks' );

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
define( 'AUTH_KEY',         '32KFkE6eY:CKyLS2|*C[hZS`hSCpldfR?Av4iwFf3^H92e5cAh_Fp%]OR;tys/(:' );
define( 'SECURE_AUTH_KEY',  's)4tkKDc)^7d=ZiGhgAPQ;j`)up>{n5$n:TP1|wLrw|8>D a.,RLNo[M9&uT=OhG' );
define( 'LOGGED_IN_KEY',    'f]i>I$uqAAIUYQ?`5g:j%q}:cEA~D8Bcl^l<%(tKswV(JgY]q6y)peAA(56o6#EI' );
define( 'NONCE_KEY',        '`yLNPKMEKEETtZX^<,QLM$o*pB!nm0?2?K,rl2;FNktlFl/O?@UDp_y*PB}d(WKd' );
define( 'AUTH_SALT',        '(&c&*b*f6/+,`~*j%Y66MINd~Y{iPLtT8W5:SrOmxO>U;k}%H#hLl9<Fl@0}GZ&]' );
define( 'SECURE_AUTH_SALT', ';LDzaCXxb%z,Ir[,O`p@{3e%]cp!n(aFb[iL7DyN:PIgKC~yV%v>5>EsAbEZw2$3' );
define( 'LOGGED_IN_SALT',   'rbszRe.2:rEVewoc14aA*k?l!#{MA&,1g/-vRpd{K!ie8FI|Yp8kBTY%T%6))XxJ' );
define( 'NONCE_SALT',       'N(`HNE=y|7[RjLl`tDc2<B4N]ft%mv`_PU7d}L[|+&>N<$)%SfNz {Qy|,mE+|=@' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'ariyateks_';

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
