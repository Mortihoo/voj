<?php
/**
 * Created by PhpStorm.
 * User: mortihoo
 * Date: 2017/7/19
 * Time: 15:51
 */
$predir = dirname(dirname(__FILE__));
include_once "$predir/classes/dirroot.php";
$url = 'http://' . $_SERVER['HTTP_HOST'] . PROJECT_PATH;

if (isset($_COOKIE['userid'])) {
    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $userid = $_COOKIE['userid'];
    $query = "select class from UserInformation where userid = '$userid'";
    $data = mysqli_query($con, $query);
    if (mysqli_num_rows($data) == 1) {
        $row = mysqli_fetch_array($data);
        if ($row['class'] == 1) {
            mysqli_free_result($data);
            mysqli_close($con);
            exit();
        } else {
            mysqli_free_result($data);
            mysqli_close($con);
            header('Location:' . $url . '/index.php');
        }
    } else {
        mysqli_free_result($data);
        mysqli_close($con);
        header('Location:' . $url . '/login.php');
    }
} else {
    header('Location:' . $url . '/index.php');
}