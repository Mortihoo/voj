<?php
/**
 * Created by PhpStorm.
 * User: mortihoo
 * Date: 2017/7/20
 * Time: 17:32
 */
include_once 'classes/dirroot.php';
$url = 'http://' . $_SERVER['HTTP_HOST'] . PROJECT_PATH;

if (!isset($_GET['rid']) || empty($_GET['rid'])) {
    header('Location:' . $url . '/login.php');
    exit();
}
$rid = $_GET['rid'];
if (isset($_COOKIE['userid'])) {
    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $userid = $_COOKIE['userid'];
    $query = "select * from UserInformation where userid = '$userid'";
    $data = mysqli_query($con, $query);
    if (mysqli_num_rows($data) == 1) {
        $userclass =$row['class'];
        mysqli_free_result($data);
    }else{
        header('Location:' . $url . '/login.php');
        exit();
    }
    if ($userclass < 1) {
        $query = "select * from PostList where userid = '$userid' and rid = '$rid'";
        $data = mysqli_query($con, $query);
        if (mysqli_num_rows($data) == 0) {
            mysqli_free_result($data);
            mysqli_close($con);
            echo "Who are you!";
            exit();
        }
    }
} else {
    header('Location:' . $url . '/login.php');
    exit();
}
$filename = USER_CODE_FILE_PATH . '/' . $rid . '.txt';
$fp = fopen($filename, "r+");
$usercode = fread($fp, filesize($filename));
fclose($fp);
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="GB2312">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>tan90</title>
        <!--CSS-->
        <link rel="stylesheet" href="css/index.css" type="text/css">
    </head>
<body>
<div class="wrapper">
<?php
include_once 'navmenu.php';
?>
    <div id="bg">
        <form action="classes/receivecode.php" method="post" class="form-style">
            <label>
                <span style="width:100%;text-align:center;display:block;">YourCode:</span>
            </label>
            <textarea id="usercode" name="usercode" placeholder="paste"
                      style="font-size:16px ;margin: auto;display:block; height:500px">
<?php
echo $usercode;
?>
          </textarea>

        </form>
    </div>
<?php
require_once "footer.php";