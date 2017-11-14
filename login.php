<?php
header("Content-type: text/html;charset=gb2312");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="GB2312">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>闭幕赛一次性Voj</title>
    <!--CSS-->
    <link rel="stylesheet" href="css/index.css" type="text/css">

    <script language="javascript">
        function checkForm(){
            var username=document.getElementById("username");
            var password=document.getElementById("password");
            if(trim(username.value)==null||trim(username.value)==""){
                alert("Username can't be null");
                username.focus();
                return false;
            }
            if(trim(password.value)==null||trim(password.value)==""){
                alert("Password can't be null");
                password.focus();
                return false;
            }
            return true;
        }
        function trim(str) {
            return str.replace(/(^\s*)|(\s*$)/g, "");
        }

    </script>

</head>
<body>
<div class="wrapper">
    <?php
        include_once "navmenu.php";
    ?>

    <div id="content_login">
        <h1>LOGIN</h1>
        <form action="login_reg/onlinecheck.php"  method="post" id="form_login" onsubmit="return checkForm()">
            <li>
                <span>账号:</span>
                <input type="text" name="username" id="username" maxlength="20"/>
                <span class="div_form_li_span_right">*</span>
            </li>
            <li>
                <span>密码:</span>
                <input type="password" name="password" id="password" maxlength="20" >
                <span class="div_form_li_span_right">*</span>
            </li>
            <li>
                <input type="submit" name="login" id="submit_login" value="login">
            </li>
        </form>



    </div>

    <!--<footer>-->
    <!--<hr>-->
    <!--<p>Copyright &copy;|You-know-who</p>-->
    <!--</footer>-->
</div>
<?php
include_once "$predir/footer.php";