<?php
header("Content-type: text/html;charset=gb2312");
include_once 'classes/dirroot.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="GB2312">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>��Ļ��һ����OJ</title>
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
        echo "������ʱ��:" . date('H:i:s', time()).'<br>';
        $nowtime = date("y-m-d H:i:s", time());
        if (strtotime($nowtime) < strtotime(CONTEST_STARTTIME))
            echo "����δ��ʼ<br>";
        else if(strtotime($nowtime)< strtotime(CONTEST_ENDTIME))
            echo "����������<br>";
        else
            echo "��������<br>";
        ?>
    </div>
<div>
        <pre>
ע������
1������ʱ��Ϊ5Сʱ
2���Ա�����Ŀ���ɻ���ֱ�Ӿ��ָ�֪ʦ��ʦ��
3������������ٶȽ����������ĵȴ�
4������Я��U�̵ȵ������ϣ��ֻ��ػ������Ͻ���̨����������κ�ֽ������
5��������᷵��AC��PE��WA��CE��TLE��MLE��RE,�������failed to post���˴��ύ���㷣ʱ�������ύ����
6����Ŀ�ѶȲ���˳���벻Ҫ����
7���˴α���Ϊ��������������
     </pre>

</div>
</div>
<?php
include_once 'footer.php';
?>
