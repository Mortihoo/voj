<?php
/**
 * Created by PhpStorm.
 * User: mortihoo
 * Date: 2017/7/20
 * Time: 9:58
 */
require_once 'header.php';
?>
    <div class="wrapper">
<?php
require_once 'navmenu.php';
?>
    <div id="content">
        <h1>Realtime Status</h1>
        <div class="m-list-table">
            <table>
                <thead>
                <tr>
                    <th class="first" width="160">Run ID</th>
                    <th>Problem</th>
                    <th>User</th>
                    <th>Result</th>
                    <th>Time</th>
                    <th>Memory</th>
                    <th>Language</th>
                    <th>Submit Time</th>
                </tr>
                </thead>
                <tbody>

                <?php
                $arr = array(
                    '0' => 'G++',
                    '1' => 'GCC',
                    '2' => 'C++',
                    '3' => 'C',
                    '4' => 'Pascal',
                    '5' => 'Java',
                    '6' => 'C#'
                );
                $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                $userid = $_COOKIE['userid'];
                $query = "select * from PostList where userid = '$userid' order by rid desc";
                $data = mysqli_query($con, $query);
                $cnt = 0;
                while ($row = mysqli_fetch_array($data)) {
                    if ((++$cnt) & 1) echo '<tr class="odd">';
                    else echo '<tr>';
                    echo '<td class="first">' . $row['rid'] . '</td>';
                    echo '<td><a href="">' . $row['problemid'] . '</a></td>';
                    echo '<td><a href="">' . $_COOKIE['username'] . '</a></td>';

                    if ($row['status'] == 'Accepted') echo '<td><span style="color:green">Accepted</span></td>';
                    else if ($row['status'] == 'Compilation Error')
                        echo '<td><span style="color:navy">Compilation Error</span></td>';
                    else if ($row['status'] == 'FailToPost')
                        echo '<td><span style="color:purple">FailToPost</span></td>';
                    else
                        echo '<td><span style="color:red">' . $row['status'] . '</span></td>';
                    echo '<td><a href="">' . $row['runtime'] . '</a></td>';
                    echo '<td><a href="">' . $row['memory'] . '</a></td>';
                    $rid = $row['rid'];
                    $codepath = "viewcode.php?rid=$rid";
                    echo '<td><a href="'.$codepath.'">' . $arr[$row['lang']] . '</a></td>';
                    echo '<td><a href="">' . $row['posttime'] . '</a></td>';
                    echo '</tr>';
                }
                ?>


                </tbody>
            </table>
        </div>
    </div>
<?php
include_once 'footer.php';
ob_flush();
flush();
require_once 'classes/updatestatus.php';
?>