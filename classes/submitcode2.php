<?php
/**
 * Created by PhpStorm.
 * User: mortihoo
 * Date: 2017/7/16
 * Time: 16:57
 */
//http://acm.hdu.edu.cn/diy/contest_submit.php?cid=32081&pid=1001
//error_reporting(E_ALL);
//ini_set('display_errors', '1');

include_once 'dirroot.php';
header("Content-type: text/html;charset=gb2312");
ignore_user_abort(true);
set_time_limit(0);
ob_end_clean();
session_write_close();
$url = 'http://' . $_SERVER['HTTP_HOST'] . PROJECT_PATH ;
//header('HTTP/1.1 301 Permanently Moved');
//header('Location:' . $url . '/status.php');
ob_flush();
flush();

$filelock = new FileLock("postcode");
if (!$filelock->lock()) {
    echo "have been lock!";
    exit();
}
sleep(10);
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
while (true) {
    $query = "select rid,problemid,lang from PostList where hduid = '-1' ";
    $data = mysqli_query($con, $query);
    $rownum = mysqli_num_rows($data);
    if ($rownum == 0) break;
    while ($row = mysqli_fetch_array($data)) {
        $language = $row['lang'];
        $problemid = $row['problemid'];
        $rid = $row['rid'];
        $filename = USER_CODE_FILE_PATH . '/' . $rid . '.txt';
        $fp = fopen($filename, "r+");
        $usercode = fread($fp, filesize($filename));
        fclose($fp);

        //HDU题库状态页面
        $content = GetStatus();
        //上传代码
        PostCode($problemid, $language, $usercode);
        sleep(10);
        //HDU题库状态页面----返回获得结果
        $content = GetStatus();
        $pattern = '/\<td(.class=\".*?\")?\>(.*?)\<\/td\>/s';
        preg_match_all($pattern, $content, $matches);
        ////echo $matches[1][0];
        //print_r($matches);
        $len = count($matches[0]);
        for ($i = 7; $i < $len; $i += 8) {
            if (strip_tags($matches[0][$i]) == HDU_USER_NAME) {
                $hduid = strip_tags($matches[0][$i - 7]);
                $query = "select * from PostList where hduid = '" . $hduid . "'";
                $datatem = mysqli_query($con, $query);
                if (mysqli_num_rows($datatem) == 0) {
                    mysqli_free_result($datatem);
                    $query = "update PostList set posttime = '" . strip_tags($matches[0][$i - 6]) . "',
                     status = '" . strip_tags($matches[0][$i - 5]) . "', hduid = '" . strip_tags($matches[0][$i - 7]) . "',
                     runtime = '" . strip_tags($matches[0][$i - 3]) . "', memory = '" . strip_tags($matches[0][$i - 2]) . "'
                     where rid = '$rid'";
                    mysqli_query($con, $query);
                    break;
                } else {
                    mysqli_free_result($datatem);
                    $query = "update PostList set hduid = '0', status = 'FailToPost' where rid = '$rid'";
                    mysqli_query($con, $query);
                    break;
                }
            }
        }
    }
    mysqli_free_result($data);
}
mysqli_close($con);
echo "Success!";
$filelock->unlock();
exit();



