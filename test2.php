<?php
/**
 * Created by PhpStorm.
 * User: mortihoo
 * Date: 2017/7/27
 * Time: 1:27
 */
include 'classes/dirroot.php';
header("Content-type: text/html;charset=gb2312");
$filename = 'username.txt';
$fp = fopen($filename, "r+");
$data = fread($fp, filesize($filename));
$username = explode("\n", $data);
fclose($fp);
$filename = 'nickname';
$fp = fopen($filename, "r+");
$data = fread($fp, filesize($filename));
$nickname = explode("\n", $data);
fclose($fp);
print_r($nickname);
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query = "set names GB2312";
mysqli_query($con, $query);
foreach ($username as $k => $v) {
    $tem = mysqli_real_escape_string($con, trim($v));
    $tem2 = mysqli_real_escape_string($con, trim($nickname[$k]));
    $query = "update  UserInformation  set nickname = '$tem2' where username = '$tem'";
    mysqli_query($con, $query);
}
echo mysqli_error($con);
mysqli_close($con);
fclose($fp);

$query = "select * from UserInformation";