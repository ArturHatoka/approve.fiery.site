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
define( 'DB_NAME', 'approve' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         ')SD=oE$/i>KeUUiNF9P36#-6vl0%%07 dN}hrI4Nb8<3> o`7Fh$pV]0NK7B|LSP' );
define( 'SECURE_AUTH_KEY',  'Og?V~f(mT ?x;+.^S79-^=<Q/RewAsw#K}g$WvE]I#~o bcrNeU71E&M(bn:QH+Z' );
define( 'LOGGED_IN_KEY',    'Bp}}4g,i3^r-,8F+M2xd#SNx2rM`d xV?poB8(]*)rRapMJ?`md0!XH6_E#5oj8<' );
define( 'NONCE_KEY',        'C$SFn50 tOv5CGr>QT`X2:Vs[DC3D15#P:O-5cJ=F]P[:ZESW~!;hj[%:?r6I&3I' );
define( 'AUTH_SALT',        'C=WE*|:;`N Iag{7^Fh9E)_&E]V-l8WF[GYkeu2}Q73Rd]ruDP#,>P2Qm,T|@p4y' );
define( 'SECURE_AUTH_SALT', 'f.XiM;Dh.I:p|P@^aYxige@dN`vlBSqB2DeEX6!q=0uFw#kzjI#FB5?!N~9TcIUF' );
define( 'LOGGED_IN_SALT',   '!zPO(>{,8zKo`HCGIqdR$~KScoAw~x#^S0sZ[E(iz.,0<jlBB4sg3PhP~$v8iSI5' );
define( 'NONCE_SALT',       '6}e~cn+HUtE/F-Bhv`px9:@NM~BgU_l(G=FVh&&zR[a!]>.?/>LC!yx0E?cd{6]g' );

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
