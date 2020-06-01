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
define( 'DB_NAME', 'cybermax' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'N0^vA@WoiA9w6lg`L8hONmg]JeimkP_(*/N&&MGmfI({.8Nx-`qMFu_V|jyVl yQ' );
define( 'SECURE_AUTH_KEY',  '1^2YkL6T9Z^r(p`kv#N0.0}qKg@o}6)[xE3m%5X]n!:EW#qlU=2`zc9*Pz<W<zP<' );
define( 'LOGGED_IN_KEY',    '!1b5>FL`_;nPwAY(H~_I3Y#!N;WLNj/)[Q%iV?D>:{LZn7|wp[%&?uJ}^XEu!5(M' );
define( 'NONCE_KEY',        'L]i;naXx/taguj{lC9*MpKhDu)#FwzeX!sIh(s8?,2Vuiy;9LlW4J]fy9&>>15E]' );
define( 'AUTH_SALT',        'AA,8c5zS2So7T>))j^D5gc)=~p/^&|YGFPzGxtyeG&i{8Qz!6T(>&*uG8Xa@!SBb' );
define( 'SECURE_AUTH_SALT', 'W9$D75<nX|s6Xk9i70<~T;i^:C:-/uBO*1$KG.s:<yVb4dBj>5z|CO[>U&FllJ_$' );
define( 'LOGGED_IN_SALT',   'iYdG6&j*{vb1`o_ ,Yvp]R._Ciz6t$_,c!0_9XX&7a[25~$mB8u@G2qI$^>i&.b~' );
define( 'NONCE_SALT',       '.EpKfafj/pDh/RjC`|_fY54&$I.vp5J);&I<wrFwLP Awo{dJn&G/fN#].q9q;4i' );

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
