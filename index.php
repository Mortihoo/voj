<?php
header("Content-type: text/html;charset=gb2312");
include_once 'classes/dirroot.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="GB2312">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>闭幕赛一次性OJ</title>
    <!--CSS-->
    <link rel="stylesheet" href="css/index.css" type="text/css">
</head>
<body>
<div class="wrapper">
    <?php
    require_once 'navmenu.php';
    ?>
    <div align="center" style="font-size: x-large">
        <?php
        echo "服务器时间:" . date('H:i:s', time()).'<br>';
        $nowtime = date("y-m-d H:i:s", time());
        if (strtotime($nowtime) < strtotime(CONTEST_STARTTIME))
            echo "比赛未开始<br>";
        else if(strtotime($nowtime)< strtotime(CONTEST_ENDTIME))
            echo "比赛进行中<br>";
        else
            echo "比赛结束<br>";
        ?>
    </div>
<div>
        <pre>
注意事项
1、比赛时间为5小时
2、对比赛题目有疑惑，请直接举手告知师兄师姐
3、判题机判题速度较慢，请耐心等待
4、请勿携带U盘等电子资料，手机关机或者上交讲台，仅允许带任何纸质资料
5、判题机会返回AC、PE、WA、CE、TLE、MLE、RE,假如出现failed to post，此次提交不算罚时，重新提交即可
6、题目难度不按顺序，请不要卡题
7、此次比赛为个人赛，请勿交流
     </pre>

</div>
</div>
<?php
include_once 'footer.php';
?>
