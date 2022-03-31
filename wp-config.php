<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wpbaza' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'RRjQDJ;F %;hCrov>E3SV~S*@!v00Q`fxuLNhg%+Utn]>HzY+BZ-qv_mr{72=>qY' );
define( 'SECURE_AUTH_KEY',  'vzzDK+;(NS!Q%k)XnRS|?Dsx/MLHg?E;-n8G]Pn9CwDS#aL=k6_U.(sot^ELLnX&' );
define( 'LOGGED_IN_KEY',    'QZ66UDY?*{!%k{OcFWxsf2GZ87 }{x6XI)ZxT7tFD1.50P7}tGv>jCd}btxndzfw' );
define( 'NONCE_KEY',        'JcMFniA4U;bJG28!_`R1CMj:sF4@0JkI<IWW9J_8e)Y9t*TJ|9<s]N,IGV3Ot|M^' );
define( 'AUTH_SALT',        '~tzJe:U3lTg-kCt-=Br^@M(q/j>4CDy,eE:xg3{zi:KQXdM`w5RNt;:#Bn,H&(qb' );
define( 'SECURE_AUTH_SALT', ')}fI{@i_8Zw|xxDqQzlP*Eb]m(=xnH<`PJd6}x6*rmHWp9*wZQZ)Ey5m6y@(%N?i' );
define( 'LOGGED_IN_SALT',   'o~`<-q.#%?#4@b5,6S}@14:q?_1$ns{FN4!_O<h^fU/CT=KYq06RP%XVxk>>]6eX' );
define( 'NONCE_SALT',       'p)K@pd<E/d=W&n+[Q.{n*n2a&ym*3jaP ?P0DI@p)AGP3^{gOz`ko3wXB#gTeE3T' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
