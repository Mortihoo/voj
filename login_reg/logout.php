<?php
/**
 * Created by PhpStorm.
 * User: mortihoo
 * Date: 2017/7/20
 * Time: 13:27
 */
$predir = dirname(dirname(__FILE__));
include_once "$predir/classes/dirroot.php";
$url = 'http://' . $_SERVER['HTTP_HOST'] . PROJECT_PATH;
if(isset($_COOKIE['userid'])){
    setcookie('userid', $row['userid'], time() -1, '/', COOKIE_DOMAIN);
    setcookie('username', $row['username'], time() -1, '/', COOKIE_DOMAIN);
    setcookie('userid', $row['userid'], time() -1, '/', COOKIE_DOMAIN_IP);
    setcookie('username', $row['username'], time() -1, '/', COOKIE_DOMAIN_IP);
}
header('Location:' . $url . '/index.php');