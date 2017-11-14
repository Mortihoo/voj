<?php
header("Content-type: text/html;charset=gb2312");
/**
 * Created by PhpStorm.
 * User: mortihoo
 * Date: 2017/7/11
 * Time: 16:01
 */
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
//模拟登录
include_once "dirroot.php";
function login_post($url, $post) {
    $cookie = dirname(__FILE__) . '/cookie_oschina.txt';
    $this_header = array(
        "content-type: application/x-www-form-urlencoded; charset=gb2312"
    );
    $curl = curl_init();//初始化curl模块
    curl_setopt($curl, CURLOPT_URL, $url);//登录提交的地址
    curl_setopt($curl, CURLOPT_HEADER, 0);//是否显示头信息
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 0);//是否自动显示返回的信息
    curl_setopt($curl, CURLOPT_COOKIEJAR, $cookie); //设置Cookie信息保存在指定的文件中
    curl_setopt($curl, CURLOPT_POST, 1);//post方式提交
    curl_setopt($curl, CURLOPT_COOKIEFILE, $cookie); //读取cookie
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post));//要提交的信息
    curl_exec($curl);//执行cURL
    curl_close($curl);//关闭cURL资源，并且释放系统资源
}

//登录成功后获取数据
function get_content($url) {
    $cookie = dirname(__FILE__) . '/cookie_oschina.txt';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie); //读取cookie
    $rs = curl_exec($ch); //执行cURL抓取页面内容
    curl_close($ch);
    return $rs;
}

function PostCode($problemid, $language, $usercode) {
    $post = array(
        'problemid' => $problemid,
        'language' => $language,
        'usercode' => $usercode,
        'submit' => 'Submit'
    );
    $url = 'acm.hdu.edu.cn/diy/contest_submit.php?action=submit&cid=' . CONTEST_ID;
    login_post($url, $post);
}

function LoginUser() {
    //设置post的数据
    $post = array(
        'username' => 'zhbitwho',
        'userpass' => '12365a',
        'login' => 'Sign In'
    );
    //登录地址
    $url = "acm.hdu.edu.cn/userloginex.php?action=login";
    login_post($url, $post);
}

function LoginContent() {
    //设置post的数据
    $post = array(
        'password' => CONTEST_PASSWORD
    );
    //登录地址
    $url = 'http://acm.hdu.edu.cn/diy/contest_login.php?cid=' . CONTEST_ID . '&action=login';
    login_post($url, $post);
}

function GetStatus($str = '') {
    //HDU题库状态页面
    $url2 = 'http://acm.hdu.edu.cn/diy/contest_status.php?cid=' . CONTEST_ID . $str;
    $content = get_content($url2);
    $pos = strpos($content, "Realtime Status");
    while (!$pos) {
        LoginUser();
        sleep(5);
        LoginContent();
        sleep(5);
        $content = get_content($url2);
        $pos = strpos($content, "Realtime Status");
    }
    return $content;
}

function GetContest() {
    //HDU题库状态页面
    $url2 = 'http://acm.hdu.edu.cn/diy/contest_show.php?cid=' . CONTEST_ID;
    $content = get_content($url2);
    $pos = strpos($content, "Ratio(Accepted / Submitted)");
    while (!$pos) {
        LoginUser();
        sleep(5);
        LoginContent();
        sleep(5);
        $content = get_content($url2);
        $pos = strpos($content, "Ratio(Accepted / Submitted)");
    }
    return $content;
}

function GetQuestions($pid = '') {
    //HDU题库状态页面
    $url2 = 'http://acm.hdu.edu.cn/diy/contest_showproblem.php?cid=' . CONTEST_ID . "&pid=$pid";
    $content = get_content($url2);
    $pos = strpos($content, "Problem Description");
    while (!$pos) {
        LoginUser();
        sleep(5);
        LoginContent();
        sleep(5);
        $content = get_content($url2);
        $pos = strpos($content, "Problem Description");
    }
    return $content;
}
