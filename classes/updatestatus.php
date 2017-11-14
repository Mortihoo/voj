<?php
/**
 * Created by PhpStorm.
 * User: mortihoo
 * Date: 2017/7/20
 * Time: 14:58
 */

//error_reporting(E_ALL);
//ini_set('display_errors', '1');

include_once 'dirroot.php';
ignore_user_abort(true);
set_time_limit(0);
ob_end_clean();
session_write_close();
$url = 'http://' . $_SERVER['HTTP_HOST'] . PROJECT_PATH;
//header('HTTP/1.1 301 Permanently Moved');
//header('Location:' . $url . '/status.php');
//ob_flush();
//flush();

$filelock = new FileLock("updatestatus");
if (!$filelock->lock())
    exit();


$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
while (true) {
    $query = "select hduid from PostList where status = 'Queuing' or status = 'Compiling' or status = 'Running'";
    $data = mysqli_query($con, $query);
    $rownum = mysqli_num_rows($data);
    if ($rownum == 0) break;
    while ($row = mysqli_fetch_array($data)) {
        //HDUÌâ¿â×´Ì¬Ò³Ãæ
        $hduid = $row['hduid'];
        $str = "&first=$hduid";
        $content = GetStatus($str);
        sleep(2);
        $pattern = '/\<td(.class=\".*?\")?\>(.*?)\<\/td\>/s';
        preg_match_all($pattern, $content, $matches);
        if (strip_tags($matches[0][0]) == $hduid) {
            if (strip_tags($matches[0][2]) == 'Queuing' ||
                strip_tags($matches[0][2]) == 'Compiling' ||
                strip_tags($matches[0][2]) == 'Running') {
                sleep(10);
                mysqli_close($con);
                $filelock->unlock();
                exit();
            }
            $query = "update PostList set posttime = '" . strip_tags($matches[0][1]) .
                "',status = '" . strip_tags($matches[0][2]) .
                "',runtime = '" . strip_tags($matches[0][4]) .
                "', memory = '" . strip_tags($matches[0][5]) .
                "'where hduid = '$hduid'";
            mysqli_query($con, $query);
        } else {
            $query = "update PostList set status = 'FailToQuery' where hduid = '$hduid'";
            mysqli_query($con, $query);
        }
    }
}
mysqli_close($con);
$filelock->unlock();
exit();

