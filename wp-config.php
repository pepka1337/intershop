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
 * * Настройки базы данных
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
define( 'DB_NAME', 'shop' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'artem' );

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
define( 'AUTH_KEY',         '$ZEuqoWDh+~4n#rjbE7Ds?,9[47I,{oKm%17C3$/pI|E&xnvSO_@Iz|qK|Lh}vTy' );
define( 'SECURE_AUTH_KEY',  '9o!sEL(H?_}aSZ)52cH>kMd5e8,NY*4{0:vg<wW|czkWo>9|>RGE^[nJSg86zH2d' );
define( 'LOGGED_IN_KEY',    ')-~KY>a94,U7mSzwktZZo^q HWbeHfB5 /r?!PJSKQ@<1M{KFh^DWZ,R&y+u BLj' );
define( 'NONCE_KEY',        'zEA>@Wde)-F[0+S.)/}Cp|prZhQX_U5l>u+ncV7J~}A@fM5jd!FKgwGV_M%u@}o9' );
define( 'AUTH_SALT',        '^C9,-d|Hc((G2,&y<4j:}Mnbo6M5c:%$r M?AuYjzWdhX!v30&F;9ll3`t]yDm2.' );
define( 'SECURE_AUTH_SALT', ':#rI+(8BNPV.Zbwf;9qPYZ,_ly[.^7dAg>FiqYjh9BA%Gp>>o[ZD&gZl@eF_=Ap2' );
define( 'LOGGED_IN_SALT',   '^?Q#=Aqlmlrp~,Heg0#O]c%ihxP?U*vv-;H=hk%]v7.ZFoynm%Fh2e`@=QbLdmFm' );
define( 'NONCE_SALT',       '*RVN7f[UUM1b/DsFEKJTZ<7;FYb,iEfAK<)Q{iadWm4f8X/*+CotlSr4bc%Wk{6V' );

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
