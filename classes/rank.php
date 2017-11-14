<?php
/**
 * Created by PhpStorm.
 * User: mortihoo
 * Date: 2017/7/26
 * Time: 22:38
 */

include_once 'dirroot.php';
header("Content-type: text/html;charset=gb2312");
ignore_user_abort(true);
set_time_limit(0);
ob_end_clean();
session_write_close();
$url = 'http://' . $_SERVER['HTTP_HOST'] . PROJECT_PATH;
//header('HTTP/1.1 301 Permanently Moved');
//header('Location:' . $url . '/status.php');
ob_flush();
flush();
//$nowtime = date("y-m-d H:i:s", time());
//if (strtotime($nowtime) > (strtotime(CONTEST_ENDTIME) - 3600))
//    exit();

$filelock = new FileLock("rank");
if (!$filelock->lock()) {
    echo "have been lock!";
    exit();
}
$pbidarr = array();
$peoplearr = array();
$postdetailarr = array();

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query = 'select * from content order by id DESC  limit 1';
$data = mysqli_query($con, $query);
$row = mysqli_fetch_array($data);
mysqli_free_result($data);
$pbnum = $row['pbnum'];
$contentid = $row['id'];

$query = "select * from contentdetail where contentid = '$contentid'";
$data = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($data))
    $pbidarr[] = $row['problemnum'];
mysqli_free_result($data);
$query = 'select userid from PostList where userid != 100156 group by userid';
$data = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($data))
    $peoplearr[] = $row['userid'];
mysqli_free_result($data);
//init
foreach ($peoplearr as $k => $v) {
    $postdetailarr[$v]['acnum'] = 0;
    $postdetailarr[$v]['time'] = 0;
    $postdetailarr[$v]['username'] = $v;
    foreach ($pbidarr as $k2 => $v2) {
        $postdetailarr[$v][$v2][0] = 0;
        $postdetailarr[$v][$v2][1] = 0;
        $postdetailarr[$v][$v2][2] = '00:00:00';
    }
}

$query = "select userid,problemid,status,posttime from PostList where 
status != 'FailToPost' and status != 'Compilation Error' and userid != 100156 ORDER BY rid";
$data = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($data)) {
    $userid = $row['userid'];
    $problemid = $row['problemid'];
    $status = $row['status'];
    $posttime = $row['posttime'];
    if ($postdetailarr[$userid][$problemid][1] == 1)
        continue;
    if ($status == 'Accepted') {
        $postdetailarr[$userid]['acnum']++;
        $postdetailarr[$userid][$problemid][1] = 1;
        $datetime1 = new DateTime($posttime);
        $datetime2 = new DateTime(CONTEST_STARTTIME);
        $interval = $datetime1->diff($datetime2);
        //echo $interval->format('%H:%i:%s').'<br>';
        $hour = (int)$interval->format('%H');
        $min = (int)$interval->format('%i');
        $sec = (int)$interval->format('%s');
        $sumtime = $hour * 3600 + $min * 60 + $sec;
        $postdetailarr[$userid][$problemid][2] = $interval->format('%H:%i:%s');
        $postdetailarr[$userid]['time'] += $sumtime;
        $postdetailarr[$userid]['time'] += $postdetailarr[$userid][$problemid][0] * 20 * 60;
        continue;
    }
    $postdetailarr[$userid][$problemid][0]++;

}
mysqli_free_result($data);
foreach ($postdetailarr as $k => $v) {
    $time[] = $v['time'];
    $acnum[] = $v['acnum'];

}
array_multisort($acnum, SORT_DESC, $time, $postdetailarr);
$webstr = '
<?php
/**
 * Created by PhpStorm.
 * User: mortihoo
 * Date: 2017/7/20
 * Time: 19:44
 */
require_once \'header.php\';
?>
<div class="wrapper">
    <?php
    require_once \'navmenu.php\';
    ?>
     <div class=\'contest\'">  
     <div align="center"><H1>Contest Ranklist</H1></div>
     <TABLE id=maintable width="100%" style="text-align: center"><TBODY>
     <TR class=tbheader style="HEIGHT: 25px !important">
        <TD width=50>Rank</TD>
        <TD>Team</TD>
        <TD width=40>Solved</TD>
        <TD width=70>Penalty</TD>
';
for ($i = 1; $i <= $pbnum; $i++)
    $webstr .= "<TD><A href=\"./problems.php#problem" . $i . "\">" . $pbidarr[$i - 1] . "</A></TD>";
$webstr .= '</TR>';
$cnt = 1;
foreach ($postdetailarr as $key => $value) {
    $webstr .= '<TR onmouseover=Highlight(this,1) onmouseout=Highlight(this,0) style="HEIGHT: 25px; BACKGROUND: none transparent scroll repeat 0% 0%">';
    $webstr .= "<TD>$cnt</TD>";
    $strtem = $value['username'];
    $query = "select * from UserInformation where userid= '$strtem'  limit 1";
    $data = mysqli_query($con, $query);
    $row = mysqli_fetch_array($data);
    $webstr .= "<TD>" . $row['nickname'] . "</TD>";
    mysqli_free_result($data);
    $webstr .= "<TD>" . $value['acnum'] . "</TD>";
    $hour = (int)($value['time'] / 3600);
    $min = (int)(($value['time'] % 3600) / 60);
    $sec = (int)($value['time'] % 60);
    $webstr .= "<TD class=penalty>$hour:$min:$sec</TD>";
    foreach ($pbidarr as $k2 => $v2) {
        if ($value[$v2][1] == 1) {
            $webstr .= '<TD style="COLOR: white; BACKGROUND-COLOR: green">' . $value[$v2][2];
            if ($value[$v2][0] != 0)
                $webstr .= '<BR>-' . $value[$v2][0] . '</TD>';
            else
                $webstr .= '</TD>';
        } else {
            if ($value[$v2][0] == 0)
                $webstr .= '<TD></TD>';
            else
                $webstr .= '<TD style="COLOR: white; BACKGROUND-COLOR: red">-' . $value[$v2][0] . '</TD>';
        }
    }
    $webstr .= '</TR>';
    $cnt++;
}
$webstr .= '</TBODY></TABLE>';

$webstr .= '</div>

    <!--<footer>-->
    <!--<hr>-->
    <!--<p>Copyright &copy;|You-know-who</p>-->
    <!--</footer>-->

</div>
<?php
header("Refresh:60;");
include_once \'footer.php\';
ob_flush();
flush();
require_once \'classes/rank.php\';
';
mysqli_close($con);

$predir = dirname(dirname(__FILE__));
$filename = $predir . '/ranklist.php';
$fp = fopen($filename, "w+");
fputs($fp, $webstr);
fclose($fp);

sleep(30);
$filelock->unlock();
exit();