<?php
/**
 * Database configuration
 *
 * Please see the MyBB Docs for advanced
 * database configuration for larger installations
 * https://docs.mybb.com/
 */

$config['database']['type'] = 'mysql_pdo';
$config['database']['database'] = '__DB_NAME__';
$config['database']['table_prefix'] = 'mybb_';

$config['database']['hostname'] = 'localhost';
$config['database']['username'] = '__DB_NAME__';
$config['database']['password'] = '__DB_PWD__';

/**
 * Admin CP directory
 *  For security reasons, it is recommended you
 *  rename your Admin CP directory. You then need
 *  to adjust the value below to point to the
 *  new directory.
 */

$config['admin_dir'] = 'admin';

/**
 * Hide all Admin CP links
 *  If you wish to hide all Admin CP links
 *  on the front end of the board after
 *  renaming your Admin CP directory, set this
 *  to 1.
 */
