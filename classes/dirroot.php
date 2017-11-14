<?php
/**
 * Created by PhpStorm.
 * User: mortihoo
 * Date: 2017/7/16
 * Time: 17:38
 */

define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASSWORD', 'Morjoe123');
define('DB_NAME', 'Voj');
define('HDU_USER_NAME', 'zhbitwho');
define('PROJECT_PATH', '');
define('USER_CODE_FILE_PATH', '/var/www/html/voj/usercode');
define('COOKIE_DOMAIN', 'morjoe.cc');
define('COOKIE_DOMAIN_IP', '47.94.217.119');
define("CONTEST_ID", '32221');
define('CONTEST_PASSWORD', 'qwertyuiop');
define('CONTEST_STARTTIME', '2017-08-06 17:00:00');
define('CONTEST_ENDTIME', '2017-08-06 20:00:00');
include_once 'send_post.php';
include_once 'filelock.php';