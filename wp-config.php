<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'test');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ECWa8Eu8Uf]>g@35Dn@_xj)HEEBEEN<KtaGFn5HDCvIID:LDtI*iVz^<S.zJ0,fy');
define('SECURE_AUTH_KEY',  'Pf(N7LG!g__=YgsgL(ce$^#$O6&n se?;uW0|1!wQ^jlt+}U{N<!(vvyW&:A3~V$');
define('LOGGED_IN_KEY',    ':*c@wsHz},H1@gxZRd]IMtv5k9tt/y~[h|B<!U$VavV/#<O.F%#X{x-O2b PbE2P');
define('NONCE_KEY',        'g{jHfeKumz_@6R}r.;9O5MV%K{X9tR^PDX,=,O 6[<e!<haoIo?)&rdT2`m&!e`/');
define('AUTH_SALT',        'i1FpH)7q]J==]R{fF+`.llnn:a#QCJv quJN?D`#t2FnppTTSBQBGB;YeY7Dz4+=');
define('SECURE_AUTH_SALT', '8L6BBID]r4aC%H&$5p;i(kA1SmGbAXLwz|:4T.Xm]FCP]V3U_+l:/Erg /^MLG}/');
define('LOGGED_IN_SALT',   'siLGsRblSt[1)7G~6h#},CF6f{eMTeWC`/du5h6(WrzHBX1+fY#D__@c(_v0?.Hu');
define('NONCE_SALT',       '>r4qedLL705l~DDNha%+JAj&&jrP8j>8ek DT!I vgk:ho6#=MW J=ng[#f]ZgGQ');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
