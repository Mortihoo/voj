<?php
/**
 * Created by PhpStorm.
 * User: mortihoo
 * Date: 2017/7/18
 * Time: 19:14
 */;
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
$predir = dirname(dirname(__FILE__));
include_once "$predir/classes/dirroot.php";

$url = 'http://' . $_SERVER['HTTP_HOST'] . PROJECT_PATH;
//die();
if (!isset($_COOKIE['userid'])) {
    if (isset($_POST['login'])) {
        $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $user_username = mysqli_real_escape_string($con, trim($_POST['username']));
        $user_password = mysqli_real_escape_string($con, trim($_POST['password']));

        if (!empty($user_password) || !empty($user_username)) {
            $query = "select userid,username from UserInformation where
                      username = '$user_username' and password = SHA('$user_password')";
            $data = mysqli_query($con, $query);
            if (mysqli_num_rows($data) == 1) {
                $row = mysqli_fetch_array($data);
                setcookie('userid', $row['userid'], time() + 3600, '/', COOKIE_DOMAIN);
                setcookie('username', $row['username'], time() + 3600, '/', COOKIE_DOMAIN);
                setcookie('userid', $row['userid'], time() + 3600, '/', COOKIE_DOMAIN_IP);
                setcookie('username', $row['username'], time() + 3600, '/', COOKIE_DOMAIN_IP);
                header('Location:' . $url . '/index.php');
            } else
                header('Location:' . $url . '/login.php');
            mysqli_free_result($data);
        } else
            header('Location:' . $url . '/login.php');
        mysqli_close($con);
        exit();
    } else {
        header('Location:' . $url . '/login.php');
        exit();
    }
} elseif (isset($_COOKIE['userid']) && isset($_POST['login'])) {
    header('Location:' . $url . '/index.php');
}

$nowtime = date("y-m-d H:i:s", time());
if (strtotime($nowtime) < strtotime(CONTEST_STARTTIME)) {
    echo "<script>alert('不在比赛时间');history.go(-1);</script>";
    exit();
}