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
//ģ���¼
include_once "dirroot.php";
function login_post($url, $post) {
    $cookie = dirname(__FILE__) . '/cookie_oschina.txt';
    $this_header = array(
        "content-type: application/x-www-form-urlencoded; charset=gb2312"
    );
    $curl = curl_init();//��ʼ��curlģ��
    curl_setopt($curl, CURLOPT_URL, $url);//��¼�ύ�ĵ�ַ
    curl_setopt($curl, CURLOPT_HEADER, 0);//�Ƿ���ʾͷ��Ϣ
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 0);//�Ƿ��Զ���ʾ���ص���Ϣ
    curl_setopt($curl, CURLOPT_COOKIEJAR, $cookie); //����Cookie��Ϣ������ָ�����ļ���
    curl_setopt($curl, CURLOPT_POST, 1);//post��ʽ�ύ
    curl_setopt($curl, CURLOPT_COOKIEFILE, $cookie); //��ȡcookie
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post));//Ҫ�ύ����Ϣ
    curl_exec($curl);//ִ��cURL
    curl_close($curl);//�ر�cURL��Դ�������ͷ�ϵͳ��Դ
}

//��¼�ɹ����ȡ����
function get_content($url) {
    $cookie = dirname(__FILE__) . '/cookie_oschina.txt';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie); //��ȡcookie
    $rs = curl_exec($ch); //ִ��cURLץȡҳ������
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
    //����post������
    $post = array(
        'username' => 'zhbitwho',
        'userpass' => '12365a',
        'login' => 'Sign In'
    );
    //��¼��ַ
    $url = "acm.hdu.edu.cn/userloginex.php?action=login";
    login_post($url, $post);
}

function LoginContent() {
    //����post������
    $post = array(
        'password' => CONTEST_PASSWORD
    );
    //��¼��ַ
    $url = 'http://acm.hdu.edu.cn/diy/contest_login.php?cid=' . CONTEST_ID . '&action=login';
    login_post($url, $post);
}

function GetStatus($str = '') {
    //HDU���״̬ҳ��
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
    //HDU���״̬ҳ��
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
    //HDU���״̬ҳ��
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
