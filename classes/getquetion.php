<?php
/**
 * Created by PhpStorm.
 * User: mortihoo
 * Date: 2017/7/20
 * Time: 19:47
 */
error_reporting(E_ALL);
ini_set('display_errors', '1');
include_once 'dirroot.php';

$content = GetContest();
$pattern = '/\<td(.class=\".*?\")?\>(.*?)\<\/td\>/s';
preg_match_all($pattern, $content, $matches);
$len = count($matches[0]);
$quearr = array();
$cdarr = array();
array_push($cdarr, '<div class=\'card-wrapper\'>
            <a href=\'#top\' target=\'_self\'>
                <div class=\'card bg-0' . '6' . '\'>
                    <span class=\'card-content\'>' . '»Øµ½¶¥²¿' . '</span>
                </div>
            </a>
        </div>');
$qdarr = array();

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$inttem = (int)$len/3;
$query = "insert into content (title,pbnum) values ('Test','$inttem')";
mysqli_query($con, $query);
$contentid = mysqli_insert_id($con);

for ($i = 1; $i < $len; $i += 3) {
    $pid = strip_tags($matches[0][$i]);
    array_push($quearr, $pid);
    $query = "insert into contentdetail (contentid,problemnum) values ('$contentid','$pid')";
    mysqli_query($con, $query);
}

mysqli_close($con);
$cnt = 0;
foreach ($quearr as $pid) {
    $cnt++;
    $content = GetQuestions($pid);
    $pattern = '/<h1>(.*?)<\/h1>/s';
    preg_match($pattern, $content, $matches);
    $title = strip_tags($matches[0]);

    $pattern = '/<h5>(.*?)<\/h5>/s';
    preg_match_all($pattern, $content, $matches);
    $tlml = strip_tags($matches[0][0]);

    $pattern = '/<div id="procon">(.*?)<\/div>/s';
    preg_match($pattern, $content, $matches);
    $pd = $matches[1];

    $pattern = '/<div id="proinput">(.*?)<\/div>/s';
    preg_match($pattern, $content, $matches);
    $ip = $matches[1];

    $pattern = '/<div id="prooutput">(.*?)<\/div>/s';
    preg_match($pattern, $content, $matches);
    $op = $matches[1];

    $pattern = '/<div id="prosamplein">(.*?)<\/div>/s';
    preg_match($pattern, $content, $matches);
    $si = $matches[1];

    $pattern = '/<div id="prosampleout">(.*?)<\/div>/s';
    preg_match($pattern, $content, $matches);
    $so = $matches[1];

    $chstr = CardHolder($cnt, $title);
    $qdstr = QuestionDetail($cnt, $pid . ' ' . $title, $tlml, $pd, $ip, $op, $si, $so);
    array_push($cdarr, $chstr);
    array_push($qdarr, $qdstr);
}

function CardHolder($cnt, $title) {
    $tem = ($cnt % 6) + 1;
    $str = '<div class=\'card-wrapper\'>
            <a href=\'#problem' . $cnt . '\'>
                <div class=\'card bg-0' . $tem . '\'>
                    <span class=\'card-content\'>' . $title . '</span>
                </div>
            </a>
        </div>';
    return $str;
}

function QuestionDetail($cnt, $title, $tlml, $pd, $ip, $op, $si, $so) {
    $str = ' <div id="problem' . $cnt . '">
            <h2>' . $title . '</h2>
            <p style="text-align:center;">' . $tlml . '
                </p>
            <h3>Problem Description</h3>
            <p>' . $pd . '</p>
            <h3>Input</h3>
            <p>' . $ip . '</p>
            <h3>Output</h3>
            <p>' . $op . '</p>
            <h3>Sample Input</h3>
            ' . $si . '
            <h3>Sample Output</h3>
            ' . $so . '
        </div>';
    return $str;
}

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
     <div class=\'card-holder\'>
';
foreach ($cdarr as $value) {
    $webstr .= $value;
}
$webstr .= ' </div>

    <div style="text-align:center;clear:both;"></div>


    <div id="content">';

foreach ($qdarr as $value) {
    $webstr .= $value;
}
$webstr .= '</div>

    <!--<footer>-->
    <!--<hr>-->
    <!--<p>Copyright &copy;|You-know-who</p>-->
    <!--</footer>-->

</div>
<?php
include_once \'footer.php\';';

$predir = dirname(dirname(__FILE__));

$filename = $predir . '/problems.php';
$fp = fopen($filename, "w+");
fputs($fp, $webstr);
fclose($fp);

