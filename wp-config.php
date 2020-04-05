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
define( 'DB_NAME', 'teplo-voda-dev' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'teplo-voda-dev' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'teplo-voda-dev' );

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
define( 'AUTH_KEY',         '>oq>P:+G((*IB*+w6yg*p^Cm&#0GGq|2/nO-T(uU4K$+Ij+1@~DLb%]GjAmZV~F:' );
define( 'SECURE_AUTH_KEY',  '}Oe9WD5X=)O-p<RaF|pdAJz|tD8=h;AG_QOEX?I`QtKvH>%+|L35qfX4x0y[j4eB' );
define( 'LOGGED_IN_KEY',    'IwiGiIPuw|HeXJ|E/{yd!E57EQC(y&K/NwErS,(}Y0ru:iNre9eaK)0Z-9Z+}2ud' );
define( 'NONCE_KEY',        '58d}2z*.2uWyGkejDu_SfyYaNuY,%F7c0]~A+q_-ZNYT&8As*PhY7LiR%X[M8R`J' );
define( 'AUTH_SALT',        'D=>+KSlG0yg{O0}n|jr&J*4@3NR;priO0rww0quj49FHF8Z~$T3`I<U;;sBXDi/j' );
define( 'SECURE_AUTH_SALT', 'SmX;Wz-PBNU:<@6/m$JCJ{yF9_*&Ha;I&=e;990bWg]Q:)hBvhhjgdUkF8+!b}`Q' );
define( 'LOGGED_IN_SALT',   'oHm[W~2<yg40fwUbVbHGX=|%xs8=i3Uq=}g9AW$aT-+JQdH1JcUl8#%.(cQ8`Fg ' );
define( 'NONCE_SALT',       'O^ZT}O!KDd.gB`/tRJtF#~DFNF&{Gx?T)VHJ`#tt6QE1)gTC.-q!w/y4jca*`G^C' );

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
