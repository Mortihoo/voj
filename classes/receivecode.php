<?php
/**
 * Created by PhpStorm.
 * User: mortihoo
 * Date: 2017/7/18
 * Time: 15:58
 */
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
include_once 'dirroot.php';
$predir = dirname(dirname(__FILE__));
include_once "$predir/login_reg/onlinecheck.php";
$url = 'http://' . $_SERVER['HTTP_HOST'] . PROJECT_PATH;

$nowtime = date("y-m-d H:i:s", time());
if (strtotime($nowtime) > strtotime(CONTEST_ENDTIME)) {
    echo "<script>alert('比赛结束');history.go(-1);</script>";
    exit();
}

header("Content-type: text/html;charset=gb2312");
header('Location:' . $url . '/status.php');
ob_flush();
flush();
if (!isset($_POST['problemid']) || !isset($_POST['language']) || !isset($_POST['usercode'])) {
    return false;
}else if( empty($_POST['problemid']) || empty($_POST['usercode'])){
    return false;
}
$problemid = $_POST['problemid'];
$language = $_POST['language'];
//$language = 0;
$usercode = $_POST['usercode'];
$userid = $_COOKIE['userid'];
$username = $_COOKIE['username'];

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query = "insert into PostList (problemid,userid,lang) values ('$problemid','$userid','$language')";
$data = mysqli_query($con, $query);
if (!$data) die("Fail to post");
$rid = mysqli_insert_id($con);
//echo $rid;
mysqli_free_result($data);
mysqli_close($con);
$filename = USER_CODE_FILE_PATH.'/'.$rid.'.txt';

$fp = fopen($filename, "w+");
fputs($fp, $usercode);
fclose($fp);

require_once 'submitcode.php';