
<?php
/**
 * Created by PhpStorm.
 * User: mortihoo
 * Date: 2017/7/20
 * Time: 19:44
 */
require_once 'header.php';
?>
<div class="wrapper">
    <?php
    require_once 'navmenu.php';
    ?>
     <div class='contest'>
     <TABLE id=maintable width="100%" style="text-align: center"><TBODY>
     <H1>Contest Ranklist</H1>
     <TR class=tbheader style="HEIGHT: 25px !important">
        <TD width=50>Rank</TD>
        <TD>Team</TD>
        <TD width=40>Solved</TD>
        <TD width=70>Penalty</TD>
<TD><A href="./problems.html#problem1">1001</A></TD><TD><A href="./problems.html#problem2">1002</A></TD><TD><A href="./problems.html#problem3">1003</A></TD><TD><A href="./problems.html#problem4">1004</A></TD><TD><A href="./problems.html#problem5">1005</A></TD><TD><A href="./problems.html#problem6">1006</A></TD><TD><A href="./problems.html#problem7">1007</A></TD><TD><A href="./problems.html#problem8">1008</A></TD><TD><A href="./problems.html#problem9">1009</A></TD><TD><A href="./problems.html#problem10">1010</A></TD><TD><A href="./problems.html#problem11">1011</A></TD></TR><TR onmouseover=Highlight(this,1) onmouseout=Highlight(this,0) style="HEIGHT: 25px; BACKGROUND: none transparent scroll repeat 0% 0%"><TD>1</TD><TD>100003</TD><TD>2</TD><TD class=penalty>16:11:33</TD><TD style="COLOR: white; BACKGROUND-COLOR: green">13<BR>-0</TD><TD style="COLOR: white; BACKGROUND-COLOR: red">-8</TD><TD style="COLOR: white; BACKGROUND-COLOR: red">-2</TD><TD style="COLOR: white; BACKGROUND-COLOR: green">3<BR>-0</TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD></TR><TR onmouseover=Highlight(this,1) onmouseout=Highlight(this,0) style="HEIGHT: 25px; BACKGROUND: none transparent scroll repeat 0% 0%"><TD>2</TD><TD>100004</TD><TD>2</TD><TD class=penalty>29:19:0</TD><TD style="COLOR: white; BACKGROUND-COLOR: red">-1</TD><TD style="COLOR: white; BACKGROUND-COLOR: green">14<BR>-1</TD><TD></TD><TD style="COLOR: white; BACKGROUND-COLOR: green">14<BR>-0</TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD></TR><TR onmouseover=Highlight(this,1) onmouseout=Highlight(this,0) style="HEIGHT: 25px; BACKGROUND: none transparent scroll repeat 0% 0%"><TD>3</TD><TD>100005</TD><TD>1</TD><TD class=penalty>14:33:44</TD><TD style="COLOR: white; BACKGROUND-COLOR: green">14<BR>-0</TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD></TR><TR onmouseover=Highlight(this,1) onmouseout=Highlight(this,0) style="HEIGHT: 25px; BACKGROUND: none transparent scroll repeat 0% 0%"><TD>4</TD><TD>100006</TD><TD>1</TD><TD class=penalty>14:37:21</TD><TD style="COLOR: white; BACKGROUND-COLOR: green">14<BR>-0</TD><TD style="COLOR: white; BACKGROUND-COLOR: red">-1</TD><TD style="COLOR: white; BACKGROUND-COLOR: red">-8</TD><TD style="COLOR: white; BACKGROUND-COLOR: red">-1</TD><TD></TD><TD style="COLOR: white; BACKGROUND-COLOR: red">-1</TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD></TR></TBODY></TABLE></div>

    <!--<footer>-->
    <!--<hr>-->
    <!--<p>Copyright &copy;|You-know-who</p>-->
    <!--</footer>-->

</div>
<?php
include_once 'footer.php';