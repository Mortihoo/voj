<?php
/**
 * Created by PhpStorm.
 * User: mortihoo
 * Date: 2017/7/16
 * Time: 19:56
 */
error_reporting(E_ALL);
ini_set('display_errors', '1');
header("Content-type: text/html;charset=gb2312");
include_once 'classes/dirroot.php';
//$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
//for ($i = 6; $i <= 50; $i++) {
//    $query = "insert into UserInformation (username,password) VALUES ('user$i',sha('user$i'))";
//    mysqli_query($con,$query);
//}
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query = "select * from UserInformation where userid= '100157'  limit 1";
$data = mysqli_query($con, $query);
$row = mysqli_fetch_array($data);
print_r($row);

?>