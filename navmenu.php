<?php
/**
 * Created by PhpStorm.
 * User: mortihoo
 * Date: 2017/7/20
 * Time: 11:09
 */

if (!isset($_COOKIE['userid']))
    echo '<span style="float:right;"><a href="login.php">LOGIN</a>|<a href=""><del>REGISTER</del></a></span><br>';
else
    echo '<span style="float:right;">Hello ' . $_COOKIE['username'] . '|<a href="login_reg/logout.php">LOGOUT</a></span><br>';
?>
<header>
    <h1>2017ÄêÊî¼Ù¼¯Ñµ±ÕÄ»Èü</h1>
    <span>ºÙºÙºÙ</span>
    <div class="clear_float"></div>
    <nav>
        <ul>
            <li><a href="index.php">Index</a></li>
            <li><a href="problems.php">Problems</a></li>
            <li><a href="userpost.php">Submit</a></li>
            <li><a href="status.php">Status</a></li>
            <li><a href="ranklist.php">Rank</a></li>
        </ul>
    </nav>
    <hr>
    <div class="clear_float"></div>
</header>
