<?php
/**
 * Created by PhpStorm.
 * User: mortihoo
 * Date: 2017/7/20
 * Time: 14:24
 */
include_once 'header.php';
?>
    <div class="wrapper">
        <?php
        require_once 'navmenu.php';
        ?>
        <div id="bg">
            <form action="classes/receivecode.php" method="post" class="form-style">
                <label>
                    <span>Problem ID:</span>
                    <input type="text" name="problemid" placeholder="Full Problem ID"/>
                </label>

                <label>
                    <span>Language:</span>
                    <select name="language">
                        <option value="0">G++</option>
                        <option value="1">GCC</option>
                        <option value="2">C++</option>
                        <option value="3">C</option>
                        <option value="4">Pascal</option>
                        <option value="5">Java</option>
                        <option value="6">C#</option>
                    </select>
                </label>

                <label>
                    <span>Code:</span>
                    <textarea id="usercode" name="usercode" placeholder="paste"></textarea>
                </label>
                <input type="submit" name="submit" class="sub" value="Submit"/>
            </form>

        </div>

        <!--<footer>-->
        <!--<hr>-->
        <!--<p>Copyright &copy;|You-know-who</p>-->
        <!--</footer>-->
    </div>
<?php
include_once 'footer.php';
